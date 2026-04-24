<?php
/**
 * Compiled ext_tables.php cache file
 */
/**
 * Extension: setup
 * File: /var/www/html/vendor/typo3/cms-setup/ext_tables.php
 */
namespace {




defined('TYPO3') or die();

// Initialize empty structure for backward compatibility with extensions
// that add fields via $GLOBALS['TYPO3_USER_SETTINGS']['columns'].
// Core settings are now defined in Configuration/TCA/Overrides/be_users.php.
// Access to settings should go through UserSettingsSchema which merges both sources.
$GLOBALS['TYPO3_USER_SETTINGS'] = [
    'columns' => [],
    'showitem' => '',
];
}


/**
 * Extension: bootstrap_package
 * File: /var/www/html/vendor/bk2k/bootstrap-package/ext_tables.php
 */
namespace {


/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');
}


/**
 * Extension: social_dashboard
 * File: /var/www/html/vendor/fawozane/social-dashboard/ext_tables.php
 */
namespace {

defined('TYPO3') or die();

call_user_func(function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'SocialDashboard',
        'Dashboard',
        'Social Dashboard'
    );
});
}


#