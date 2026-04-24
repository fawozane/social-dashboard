<?php

namespace Fawozane\SocialDashboard\Controller;

use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Core\Http\Response;
use TYPO3\CMS\Core\Http\RedirectResponse;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Http\RequestFactory;

class MetaCallbackController
{
    public function __invoke(ServerRequestInterface $request)
    {
        $params = $request->getQueryParams();
        $code = $params['code'] ?? null;

        if (!$code) {
            return new RedirectResponse('/typo3/module/content/socialdashboard');
        }

        $requestFactory = GeneralUtility::makeInstance(RequestFactory::class);

        $response = $requestFactory->request(
            'https://graph.facebook.com/v25.0/oauth/access_token',
            'GET',
            [
                'query' => [
                    'client_id' => '2055541798705176',
                    'client_secret' => '20f0dc9299af4124aede489c0241ccc9',
                    'redirect_uri' => 'https://social-dashboard3.ddev.site/index.php?eID=meta_callback',
                    'code' => $code
                ]
            ]
        );

        $data = json_decode($response->getBody()->getContents(), true);

        if (empty($data['access_token'])) {
            return new RedirectResponse('/typo3/module/content/socialdashboard?error=token_failed');
        }

        //  Token speichern (JETZT sauber machen)
        $connection = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Database\ConnectionPool::class)
            ->getConnectionForTable('tx_socialdashboard_token');

        $connection->insert('tx_socialdashboard_token', [
            'access_token' => $data['access_token'],
            'created_at' => time()
        ]);

        return new RedirectResponse('/typo3/module/content/socialdashboard');
    }
}