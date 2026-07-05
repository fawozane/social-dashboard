<?php
// Configuration/Backend/Routes.php

return [
    'meta_callback' => [
        'path' => '/meta/callback',
        'target' => \Fawozane\SocialDashboard\Controller\MetaCallbackController::class . '::callbackAction'
    ],
    // 1. Die Haupt-Route für das Modul (das, was man im Backend anklickt
    'social_dashboard_main' => [
        'path' => '/social-dashboard/main',
        'target' => \Fawozane\SocialDashboard\Controller\BackendDashboardController::class . '::handleRequest',
    ],

    // 2. Die AJAX-Route (die, die das JavaScript aufruft)
    'social_dashboard_ajax' => [
        'path' => '/social-dashboard/ajax',
        'target' => \Fawozane\SocialDashboard\Controller\BackendDashboardController::class . '::ajaxData',
    ],

];

