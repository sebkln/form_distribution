<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addStaticFile(
    'form_distribution',
    'Configuration/TypoScript',
    'Custom form setup #1'
);
