<?php
// Configuration/Backend/Routes.php

return [
    'meta_callback' => [
        'path' => '/meta/callback',
        'target' => \Fawozane\SocialDashboard\Controller\MetaController::class . '::callbackAction'
    ],
    // 1. Die Haupt-Route für das Modul (das, was du im Backend anklickst)
    'social_dashboard_main' => [
        'path' => '/social-dashboard/main',
        'target' => \Fawozane\SocialDashboard\Controller\BackendDashboardController::class . '::handleRequest',
    ],

    // 2. Die AJAX-Route (die, die dein JavaScript aufruft)
    'social_dashboard_ajax' => [
        'path' => '/social-dashboard/ajax',
        'target' => \Fawozane\SocialDashboard\Controller\BackendDashboardController::class . '::ajaxData',
    ],

];

