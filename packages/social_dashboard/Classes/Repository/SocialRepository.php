<?php

namespace Fawozane\SocialDashboard\Repository;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class SocialRepository
{
    private function getConnection(string $table)
    {
        return GeneralUtility::makeInstance(ConnectionPool::class)
            ->getConnectionForTable($table);
    }

    /**
     *  TOKEN SPEICHERN
     */
    public function saveToken(string $accessToken): void
    {
        $connection = $this->getConnection('tx_socialdashboard_token');

        // optional: nur 1 Token behalten
        $connection->truncate('tx_socialdashboard_token');

        $connection->insert('tx_socialdashboard_token', [
            'access_token' => $accessToken,
            'created_at' => time()
        ]);
    }

    /**
     *  TOKEN HOLEN
     */
    public function getToken(): ?string
    {
        $connection = $this->getConnection('tx_socialdashboard_token');

        $row = $connection->select(
            ['access_token'],
            'tx_socialdashboard_token',
            [],
            [],
            ['uid DESC'],
            1
        )->fetchAssociative();

        return $row['access_token'] ?? null;
    }

    /**
     *  METRICS SPEICHERN
     */
    public function saveMetric(
        string $platform,
        int $likes,
        int $comments,
        int $timestamp
    ): void {
        $connection = $this->getConnection('tx_socialdashboard_metrics');

        $connection->insert('tx_socialdashboard_metrics', [
            'platform' => $platform,
            'likes' => $likes,
            'comments' => $comments,
            'metric_date' => $timestamp
        ]);
    }

    /**
     *  METRICS LADEN (z.B. für Chart)
     */
    public function getMetrics(string $platform, int $days = 7): array
    {
        $connection = $this->getConnection('tx_socialdashboard_metrics');

        $since = time() - ($days * 86400);

        $rows = $connection->select(
            ['likes', 'comments', 'metric_date'],
            'tx_socialdashboard_metrics',
            [
                'platform' => $platform,
                'metric_date >=' => $since
            ],
            [],
            ['metric_date ASC']
        )->fetchAllAssociative();

        return $rows ?: [];
    }

    /**
     *  STATS SPEICHERN
     */
    public function saveStats(array $data): void
    {
        $connection = $this->getConnection('tx_socialdashboard_stats');

        $connection->insert('tx_socialdashboard_stats', [
            'platform' => $data['platform'] ?? 'instagram',
            'followers' => $data['followers'] ?? 0,
            'likes' => $data['likes'] ?? 0,
            'comments' => $data['comments'] ?? 0,
            'impressions' => $data['impressions'] ?? 0,
            'posts' => $data['posts'] ?? 0,
            'tstamp' => time()
        ]);
    }

    /**
     *  LETZTE STATS HOLEN
     */
    public function getLatestStats(string $platform): ?array
    {
        $connection = $this->getConnection('tx_socialdashboard_stats');

        $row = $connection->select(
            ['*'],
            'tx_socialdashboard_stats',
            ['platform' => $platform],
            [],
            ['uid DESC'],
            1
        )->fetchAssociative();

        return $row ?: null;
    }
}