<?php
namespace Fawozane\SocialDashboard\Dashboard\Provider;

use Fawozane\SocialDashboard\Service\ScoreService;

class SocialDataProvider
{
    public function __construct(
        protected ScoreService $scoreService
    ) {}

    public function getData(): array
    {
        // Dummy Daten (später DB / API)
        $data = [
            'followers' => 1000,
            'likes' => 1255,
            'comments' => 25,
            'posts' => 1
        ];

        $result = $this->scoreService->calculateScore($data);
        $tips = $this->scoreService->generateTips($data);

        return [
            'score' => $result['score'],
            'engagementRate' => $result['engagementRate'],
            'likes' => $data['likes'],
            'comments' => $data['comments'],
            'followers' => $data['followers'],
            'tips' => $tips,
            'trend' => [20, 35, 50, 45, 70, $result['score']]
        ];
    }
}