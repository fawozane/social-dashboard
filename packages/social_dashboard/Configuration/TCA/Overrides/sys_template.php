<?php
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'social_dashboard',
    'Configuration/TypoScript',
    'Social Dashboard'
);