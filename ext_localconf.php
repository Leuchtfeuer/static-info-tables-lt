<?php

use Leuchtfeuer\StaticInfoTablesLt\Extension;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die();

call_user_func(function ($extensionKey) {
    // Deprecated since 10.0 @see https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog/10.0/Breaking-87623-ReplaceConfigpersistenceclassesTyposcriptConfiguration.html
    ExtensionManagementUtility::addTypoScriptSetup(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extensionKey . '/Configuration/TypoScript/Extbase/setup.typoscript">'
    );
}, Extension::EXTENSION_KEY);
