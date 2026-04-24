<?php
namespace Fawozane\SocialDashboard\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Fawozane\SocialDashboard\Service\ScoreService;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Http\JsonResponse;

class DashboardController extends ActionController
{
    protected ScoreService $scoreService;

    public function __construct(ScoreService $scoreService)
    {
        $this->scoreService = $scoreService;
    }

    /**
     * Formular anzeigen
     */
    public function inputAction(): ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * Ergebnis berechnen
     */
    public function resultAction(): ResponseInterface
    {
        //  WICHTIG: Daten korrekt aus Request holen
        $requestData = $this->request->hasArgument('data')
            ? $this->request->getArgument('data')
            : [];

        //  Defaults + Input kombinieren
        $data = [
            'followers' => (int)($requestData['followers'] ?? 1000),
            'likes' => (int)($requestData['likes'] ?? 120),
            'comments' => (int)($requestData['comments'] ?? 30),
            'posts' => (int)($requestData['posts'] ?? 10),
        ];

        // Score berechnen
        $result = $this->scoreService->calculateScore($data);
        $tips = $this->scoreService->generateTips($data);

        // Chart Daten
        $chartData = [
            'likes' => $data['likes'],
            'comments' => $data['comments']
        ];

        // Score Klassifizierung
        $scoreClass = 'low';

        if ($result['score'] > 70) {
            $scoreClass = 'high';
        } elseif ($result['score'] > 40) {
            $scoreClass = 'medium';
        }

        // Trend (Demo)
        $trend = [20, 35, 50, 45, 70, $result['score']];

        // 📦 Alles ans Template
        $this->view->assignMultiple([
            'result' => $result,
            'tips' => $tips,
            'chartData' => $chartData,
            'scoreClass' => $scoreClass,
            'trend' => $trend
        ]);

        return $this->htmlResponse();
    }
    public function resultAjaxAction(): ResponseInterface
    {
        $data = $this->request->getParsedBody()['data'] ?? [];

        $result = $this->scoreService->calculateScore($data);

        return new JsonResponse([
            'score' => $result['score'],
            'likes' => $data['likes'],
            'comments' => $data['comments']
        ]);
    }
}