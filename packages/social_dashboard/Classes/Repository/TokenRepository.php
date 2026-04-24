<?php
namespace Fawozane\SocialDashboard\Repository;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class TokenRepository
{
    protected function getConnection()
    {
        return GeneralUtility::makeInstance(ConnectionPool::class)
            ->getConnectionForTable('tx_socialdashboard_token');
    }

    public function save(string $token): void
    {
        $connection = $this->getConnection();

        // optional: alten Token löschen (einfachste Variante)
        $connection->truncate('tx_socialdashboard_token');

        $connection->insert('tx_socialdashboard_token', [
            'access_token' => $token,
            'created_at' => time()
        ]);
    }

    public function getLatest(): ?string
    {
        $row = $this->getConnection()
            ->select(['access_token'], 'tx_socialdashboard_token', [], [], ['uid' => 'DESC'], 1)
            ->fetchAssociative();

        return $row['access_token'] ?? null;
    }
}