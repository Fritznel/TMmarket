<?php

if (!defined ('TYPO3_MODE')) {
    die ('Access denied.');
}

if (!defined ('DIV2007_EXT')) {
    define('DIV2007_EXT', 'div2007');
}

$emClass = '\\TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility';

if (
    class_exists($emClass) &&
    method_exists($emClass, 'extPath')
) {
    // nothing
} else {
    $emClass = 't3lib_extMgm';
}


if (!defined ('PATH_BE_DIV2007')) {
    $bePath = call_user_func($emClass . '::extPath', DIV2007_EXT);
    define('PATH_BE_DIV2007', $bePath);
}


if (!defined ('PATH_FE_DIV2007_REL')) {
    define('PATH_FE_DIV2007_REL', call_user_func($emClass . '::siteRelPath', DIV2007_EXT));
}


if (!defined ('STATIC_INFO_TABLES_EXT')) {
    define('STATIC_INFO_TABLES_EXT', 'static_info_tables');
}

// constants for the TCA fields

if (version_compare(TYPO3_version, '8.0.0', '>=')) {
    // 'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',

    define('DIV2007_LANGUAGE_LGL', 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.');
} else {
    // 'label' => 'LLL:EXT:lang/locallang_general.php:LGL.starttime',
    define('DIV2007_LANGUAGE_LGL', 'LLL:EXT:lang/locallang_general.php:LGL.');
}

define('DIV2007_LANGUAGE_SUBPATH', '/Resources/Private/Language/');
define('DIV2007_ICONS_SUBPATH', 'Resources/Public/Images/Icons/');


