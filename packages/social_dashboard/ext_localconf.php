<?php
defined('TYPO3') or die();

call_user_func(function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'SocialDashboard',
        'Dashboard',
        [
            \Fawozane\SocialDashboard\Controller\DashboardController::class => 'input,result'
        ],
        [
            \Fawozane\SocialDashboard\Controller\DashboardController::class => 'input,result'
        ]
    );

});





$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['meta_callback'] =
    \Fawozane\SocialDashboard\Controller\MetaCallbackController::class;

$GLOBALS['TYPO3_CONF_VARS']['BE']['ajaxRoutes']['social_dashboard_ajax'] =
    \Fawozane\SocialDashboard\Controller\BackendDashboardController::class . '::ajaxData';