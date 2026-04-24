<?php

return [
    'social_dashboard_ajax' => [
        'path' => '/social-dashboard/ajax',
        'target' => \Fawozane\SocialDashboard\Controller\BackendDashboardController::class . '::ajaxData'
    ],
];