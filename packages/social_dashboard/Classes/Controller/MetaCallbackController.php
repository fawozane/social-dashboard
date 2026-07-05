<?php

namespace Fawozane\SocialDashboard\Controller;

use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Core\Http\RedirectResponse;
use TYPO3\CMS\Core\Utility\GeneralUtility;


class MetaCallbackController
{


    public function __invoke(ServerRequestInterface $request)
    {
        $params = $request->getQueryParams();
        $code = $params['code'] ?? null;

        if (!$code) {
            return new RedirectResponse('/typo3/module/content/socialdashboard');
        }

        $data = $this->metaAuthService->exchangeCodeForToken($code);

        if (empty($data['access_token'])) {
            return new RedirectResponse('/typo3/module/content/socialdashboard?error=token_failed');
        }

        $connection = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Database\ConnectionPool::class)
            ->getConnectionForTable('tx_socialdashboard_token');

        $connection->insert('tx_socialdashboard_token', [
            'access_token' => $data['access_token'],
            'created_at' => time()
        ]);

        return new RedirectResponse('/typo3/module/content/socialdashboard');
    }
}