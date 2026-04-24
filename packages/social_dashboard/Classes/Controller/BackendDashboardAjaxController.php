<?php

namespace Fawozane\SocialDashboard\Controller;


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Http\JsonResponse;
use TYPO3\CMS\Core\Utility\GeneralUtility;

final class BackendDashboardAjaxController
{
    public function ajaxData(ServerRequestInterface $request): ResponseInterface
    {
        $queryParams = $request->getQueryParams();

        $platform = $queryParams['platform'] ?? 'instagram';
        $days = (int)($queryParams['days'] ?? 7);

        $connection = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getQueryBuilderForTable('tx_socialdashboard_metrics');

        $fromDate = strtotime("-$days days");
        $previousFromDate = strtotime("-" . ($days * 2) . " days");
        $previousToDate = strtotime("-$days days");

        $current = $connection
            ->select('likes', 'comments', 'metric_date')
            ->from('tx_socialdashboard_metrics')
            ->where(
                $connection->expr()->eq('platform', $connection->createNamedParameter($platform)),
                $connection->expr()->gte('metric_date', $connection->createNamedParameter($fromDate))
            )
            ->executeQuery()
            ->fetchAllAssociative();

        $previous = $connection
            ->select('likes', 'comments', 'metric_date')
            ->from('tx_socialdashboard_metrics')
            ->where(
                $connection->expr()->eq('platform', $connection->createNamedParameter($platform)),
                $connection->expr()->gte('metric_date', $connection->createNamedParameter($previousFromDate)),
                $connection->expr()->lt('metric_date', $connection->createNamedParameter($previousToDate))
            )
            ->executeQuery()
            ->fetchAllAssociative();

        return new JsonResponse([

            'current' => $current,
            'previous' => $previous
        ]);
    }
}