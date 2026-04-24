<?php
namespace Fawozane\SocialDashboard\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Fawozane\SocialDashboard\Service\ScoreService;
use Psr\Http\Message\ResponseInterface;

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
        // 👉 WICHTIG: sauber holen
        $requestData = $this->request->getArgument('data') ?? [];

        $data = [
            'followers' => (int)($requestData['followers'] ?? 0),
            'likes' => (int)($requestData['likes'] ?? 0),
            'comments' => (int)($requestData['comments'] ?? 0),
            'posts' => (int)($requestData['posts'] ?? 0),
        ];

        // Debug (optional)
        // var_dump($data); die();

        $result = $this->scoreService->calculateScore($data);
        $tips   = $this->scoreService->generateTips($data);

        $chartData = [
            'likes' => $data['likes'],
            'comments' => $data['comments']
        ];

        $this->view->assignMultiple([
            'result' => $result,
            'tips' => $tips,
            'chartData' => $chartData
        ]);

        return $this->htmlResponse();
    }
}