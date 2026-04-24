<?php

use Fawozane\SocialDashboard\Controller\BackendDashboardController;

return [
    'content_socialdashboard' => [
        'parent' => 'content',
        'position' => ['after' => 'page'],
        'access' => 'user',

        'path' => '/module/content/socialdashboard',

        'iconIdentifier' => 'socialicon',

        'labels' => 'LLL:EXT:social_dashboard/Resources/Private/Language/social.xlf',


        'routes' => [
            '_default' => [
                'target' => BackendDashboardController::class . '::handleRequest',
            ],
            'ajax' => [
                'target' => BackendDashboardController::class . '::ajaxData',
            ],
        ],
    ],
];