<?php

namespace Fawozane\SocialDashboard\Service;

use TYPO3\CMS\Core\Http\RequestFactory;

class MetaAuthService
{
    private string $apiVersion = 'v25.0';

    public function __construct(
        protected RequestFactory $requestFactory
    ) {}

    public function getLoginUrl(): string
    {
        $redirect = 'https://social-dashboard3.ddev.site/index.php?eID=meta_callback';

        $params = [
            'client_id' => '2055541798705176',
            'redirect_uri' => $redirect,
            'scope' => 'instagram_basic,pages_show_list',
            'response_type' => 'code'
        ];

        return 'https://www.facebook.com/v25.0/dialog/oauth?' . http_build_query($params);
    }
    public function getUserData(string $accessToken): array
    {
        return $this->apiRequest(
            'https://graph.facebook.com/' . $this->apiVersion . '/me',
            ['fields' => 'id,name'],
            $accessToken
        );
    }

    public function getInsights(string $accessToken): array
    {
        $pages = $this->apiRequest(
            'https://graph.facebook.com/' . $this->apiVersion . '/me/accounts',
            [],
            $accessToken
        );

        $page = $pages['data'][0] ?? null;

        if (!$page) {
            return ['error' => 'Keine Facebook Page gefunden'];
        }

        $pageId = $page['id'];

        $igData = $this->apiRequest(
            'https://graph.facebook.com/' . $this->apiVersion . '/' . $pageId,
            ['fields' => 'instagram_business_account'],
            $accessToken
        );

        $igId = $igData['instagram_business_account']['id'] ?? null;

        if (!$igId) {
            return ['error' => 'Kein Instagram Business Account'];
        }

        $insights = $this->apiRequest(
            'https://graph.facebook.com/' . $this->apiVersion . '/' . $igId . '/insights',
            [
                'metric' => 'reach',
                'period' => 'day'
            ],
            $accessToken
        );

        $media = $this->apiRequest(
            'https://graph.facebook.com/' . $this->apiVersion . '/' . $igId . '/media',
            [
                'fields' => 'like_count,comments_count,timestamp'
            ],
            $accessToken
        );

        return [
            'pageId' => $pageId,
            'igId' => $igId,
            'insights' => $insights,
            'media' => $media
        ];
    }

    public function exchangeCodeForToken(string $code): array
    {
        try {
            $url = 'https://graph.facebook.com/v25.0/oauth/access_token';

            $response = $this->requestFactory->request($url, 'GET', [
                'query' => [
                    'client_id' => '2055541798705176',
                    'client_secret' => '20f0dc9299af4124aede489c0241ccc9',
                    'redirect_uri' => 'https://social-dashboard3.ddev.site/index.php?eID=meta_callback',
                    'code' => $code,
                ],
            ]);

            $body = $response->getBody()->getContents();

            return json_decode($body, true) ?? [];

        } catch (\Throwable $e) {
            return [
                'error' => $e->getMessage()
            ];
        }
    }
    private function apiRequest(string $url, array $query = [], string $accessToken = ''): array
    {
        try {
            $options = [];

            if (!empty($query)) {
                $options['query'] = $query;
            }

            if (!empty($accessToken)) {
                $options['headers']['Authorization'] = 'Bearer ' . $accessToken;
            }

            $response = $this->requestFactory->request($url, 'GET', $options);

            $data = json_decode($response->getBody()->getContents(), true);

            if (isset($data['error'])) {
                return ['error' => $data['error']['message']];
            }

            return $data;
        } catch (\Throwable $e) {
            return ['error' => $e->getMessage()];
        }
    }


}