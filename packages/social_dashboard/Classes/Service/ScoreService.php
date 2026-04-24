<?php
namespace Fawozane\SocialDashboard\Service;

class ScoreService
{
    public function calculateEngagementRate(int|float $likes, int|float $comments, int|float $followers): float
    {
        if ($followers <= 0) {
            return 0.0;
        }

        return (($likes + $comments) / $followers) * 100;
    }

    public function calculateScore(array $data): array
    {
        $likes = (int)($data['likes'] ?? 0);
        $comments = (int)($data['comments'] ?? 0);
        $followers = (int)($data['followers'] ?? 0);
        $posts = (int)($data['posts'] ?? 0);

        $engagement = $this->calculateEngagementRate($likes, $comments, $followers);

        $score = 0;

        // Engagement Gewichtung
        if ($engagement > 6) {
            $score += 50;
        } elseif ($engagement > 3) {
            $score += 35;
        } elseif ($engagement > 1) {
            $score += 20;
        } else {
            $score += 10;
        }

        // Posting Frequenz
        if ($posts >= 20) {
            $score += 20;
        } elseif ($posts >= 10) {
            $score += 10;
        }

        // Kommentar Anteil
        $commentRatio = $likes > 0
            ? $comments / $likes
            : 0;

        if ($commentRatio > 0.2) {
            $score += 20;
        } elseif ($commentRatio > 0.1) {
            $score += 10;
        }

        return [
            'score' => min($score, 100),
            'engagementRate' => round($engagement, 2),
            'commentRatio' => round($commentRatio, 2),
        ];
    }

    public function generateTips(array $data): array
    {
        $likes = (int)($data['likes'] ?? 0);
        $comments = (int)($data['comments'] ?? 0);
        $followers = (int)($data['followers'] ?? 0);
        $posts = (int)($data['posts'] ?? 0);

        $tips = [];

        $engagement = $this->calculateEngagementRate($likes, $comments, $followers);

        $commentRatio = $likes > 0
            ? $comments / $likes
            : 0;

        if ($engagement < 2) {
            $tips[] = "Deine Engagement-Rate ist niedrig – teste emotionalere Inhalte oder stärkere Hooks.";
        }

        if ($commentRatio < 0.1) {
            $tips[] = "Zu wenig Kommentare im Verhältnis zu Likes – stelle gezielte Fragen in deinen Posts.";
        }

        if ($posts < 5) {
            $tips[] = "Poste häufiger – ideal sind 3–5 Beiträge pro Woche.";
        }

        if ($posts > 20 && $engagement < 2) {
            $tips[] = "Du postest viel, aber mit wenig Wirkung – optimiere Content statt Frequenz.";
        }

        return $tips;
    }
}