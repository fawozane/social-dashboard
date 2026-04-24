<?php

declare(strict_types=1);

namespace Fawozane\SocialDashboard\Controller;

use Fawozane\SocialDashboard\Service\ScoreService;
use Fawozane\SocialDashboard\Service\MetaAuthService;
use Fawozane\SocialDashboard\Repository\TokenRepository;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Backend\Routing\UriBuilder;
use TYPO3\CMS\Backend\Template\ModuleTemplate;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Core\Http\JsonResponse;

final class BackendDashboardController
{
    public function __construct(
        private readonly ModuleTemplateFactory $moduleTemplateFactory,
        private readonly ScoreService          $scoreService,
        private readonly UriBuilder            $uriBuilder,
        private readonly MetaAuthService       $metaAuthService
    ) {}

    public function handleRequest(ServerRequestInterface $request): ResponseInterface
    {
        $view = $this->moduleTemplateFactory->create($request);
        $view->setTitle('Social Dashboard');

        return $this->indexAction($request, $view);
    }

    private function indexAction(
        ServerRequestInterface $request,
        ModuleTemplate $view
    ): ResponseInterface {

        $loginUrl = $this->metaAuthService->getLoginUrl();

        $ajaxUrl = (string)$this->uriBuilder->buildUriFromRoute(
            'social_dashboard_ajax'
        );
        $tokenRepository = new TokenRepository();
        $token = $tokenRepository->getLatest();

        $view->assignMultiple([
            'loginUrl' => $loginUrl,
            'isConnected' => !empty($token),
            'ajaxUrl' => $ajaxUrl,
            'initialData' => [
                'likes' => 0,
                'comments' => 0,
                'score' => 0,
            ],
        ]);

        return $view->renderResponse('Dashboard/Index');
    }

    public function ajaxData(ServerRequestInterface $request): ResponseInterface
    {
        $query = $request->getQueryParams();

        $days = max(1, (int)($query['days'] ?? 7));
        $mode = $query['mode'] ?? 'range'; // <-- NEU

        $tokenRepository = new TokenRepository();
        $token = $tokenRepository->getLatest();

        if (!$token) {
            return new JsonResponse(['error' => 'Kein Token gespeichert']);
        }

        $data = $this->metaAuthService->getInsights($token);

        if (!empty($data['error'])) {
            return new JsonResponse(['error' => $data['error']]);
        }

        $media = $data['media']['data'] ?? [];

        if (empty($media)) {
            return new JsonResponse(['current' => [], 'previous' => [], 'kpi' => [], 'tips' => []]);
        }

        // Sortieren
        usort($media, fn($a, $b) => strtotime($b['timestamp']) <=> strtotime($a['timestamp']));

        $current = [];
        $previous = [];

        // ----------------------------
        // MODE: SIMPLE
        // ----------------------------
        if ($mode === 'simple') {

            foreach ($media as $index => $item) {
                $entry = [
                    'likes' => $item['like_count'] ?? 0,
                    'comments' => $item['comments_count'] ?? 0,
                    'metric_date' => strtotime($item['timestamp'])
                ];

                if ($index < 10) {
                    $current[] = $entry;
                } else {
                    $previous[] = $entry;
                }
            }

        } else {

            // ----------------------------
            // MODE: RANGE
            // ----------------------------
            $now = time();
            $cutoff = strtotime("-{$days} days", $now);
            $middle = strtotime("-" . floor($days / 2) . " days", $now);

            foreach ($media as $item) {
                $timestamp = strtotime($item['timestamp']);

                if ($timestamp < $cutoff) continue;

                $entry = [
                    'likes' => $item['like_count'] ?? 0,
                    'comments' => $item['comments_count'] ?? 0,
                    'metric_date' => $timestamp
                ];

                if ($timestamp >= $middle) {
                    $current[] = $entry;
                } else {
                    $previous[] = $entry;
                }
            }

            // Fallback wenn leer
            if (count($current) === 0) {
                $fallback = array_slice($media, 0, 10);

                foreach ($fallback as $i => $item) {
                    $entry = [
                        'likes' => $item['like_count'] ?? 0,
                        'comments' => $item['comments_count'] ?? 0,
                        'metric_date' => strtotime($item['timestamp'])
                    ];

                    if ($i < 5) $current[] = $entry;
                    else $previous[] = $entry;
                }
            }
        }

        // ----------------------------
        // KPIs
        // ----------------------------
        $totalLikes = array_sum(array_column($current, 'likes'));
        $totalComments = array_sum(array_column($current, 'comments'));

        $scoreData = $this->scoreService->calculateScore([
            'likes' => $totalLikes,
            'comments' => $totalComments,
            'followers' => 1000,
            'posts' => count($current)
        ]);

        $tips = $this->scoreService->generateTips([
            'likes' => $totalLikes,
            'comments' => $totalComments,
            'followers' => 1000,
            'posts' => count($current)
        ]);

        return new JsonResponse([
            'debug' => $scoreData,
            'current' => $current,
            'previous' => $previous,
            'kpi' => [
                'totalLikes' => $totalLikes,
                'totalComments' => $totalComments,
                'score' => $scoreData['score'],
                'engagementRate' => $scoreData['engagementRate']
            ],
            'tips' => $tips
        ]);
    }
}