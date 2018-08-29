<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'form_distribution',
    'Configuration/TypoScript',
    'Custom form setup #1'
);
