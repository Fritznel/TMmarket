This extension provides the migration classes t3lib_div, t3lib_extMgm, tslib_pibase, t3lib_Singleton and all others for TYPO3 6.x, 7.x and 8.x for backwards compatibility to TYPO3 versions from 4.5 to 6.1.

Error messages like this should not happen any more:

    PHP Fatal error: Interface 't3lib_Singleton' not found

If you install this extension, then most of the extensions written for TYPO3 4.5 will still work under TYPO3 8.x. Only the TCA must still be adapted and restructured into the Configuration/TCA folder instead of using the files tca.php and ext_tables.php.

Version  0.0.0:  TYPO3 4.5 - 6.1: It does nothing because all those classes are available.
Versions 0.0.x: TYPO3 6.x and 7.x
Versions 0.1.x: TYPO3 8.x


