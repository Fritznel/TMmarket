<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "migration_core".
 *
 * Auto generated 14-08-2018 10:44
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Migration from TYPO3 4.5 to 8.x',
  'description' => 'This extension provides the migration classes needed for TYPO3 8.x like t3lib_div, t3lib_extMgm, tslib_pibase and all others. This provides backwards compatibility to TYPO3 4.5 - 6.1',
  'category' => 'misc',
  'version' => '0.1.3',
  'state' => 'stable',
  'uploadfolder' => true,
  'createDirs' => '',
  'clearcacheonload' => true,
  'author' => 'Franz Holzinger',
  'author_email' => 'franz@ttproducts.de',
  'author_company' => 'jambage.com',
  'constraints' => 
  array (
    'depends' => 
    array (
      'php' => '5.5.0-7.99.99',
      'typo3' => '8.7.0-8.99.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

