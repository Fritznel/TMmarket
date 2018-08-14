<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "table".
 *
 * Auto generated 14-08-2018 10:45
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Table Library',
  'description' => 'This containts a base class which you can use to make your extensions independant from any specific table. And it can be used to make multiple language support with a separate language overlay table.',
  'category' => 'misc',
  'version' => '0.7.0',
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
      'typo3' => '6.1.0-8.99.99',
      'div2007' => '1.10.1-0.0.0',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

