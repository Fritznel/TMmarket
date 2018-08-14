<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "div2007".
 *
 * Auto generated 14-08-2018 10:45
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Static Methods since 2007',
  'description' => 'This library offers classes and functions to other TYPO3 extensions. It provides a modified t3lib_div of TYPO3 4.7.10. Replacement for tslib_pibase methods and t3skin images.',
  'category' => 'misc',
  'version' => '1.10.8',
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
      'typo3' => '6.2.0-8.99.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
      'migration_core' => '0.0.1-0.99.99',
    ),
  ),
);

