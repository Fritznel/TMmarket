<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "tt_products".
 *
 * Auto generated 14-08-2018 10:44
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Shop System',
  'description' => 'New versions at ttproducts.de. Documented in E-Book "Der TYPO3-Webshop" - Shop with listing in multiple languages, with order tracking, photo gallery, DAM, product variants, credit card payment and bank accounts, bill, creditpoint, voucher system and gift certificates. Latest updates at ttproducts.de.',
  'category' => 'plugin',
  'state' => 'stable',
  'uploadfolder' => true,
  'createDirs' => 'uploads/tx_ttproducts/datasheet,uploads/tx_ttproducts/rte,fileadmin/data/bill,fileadmin/data/delivery,fileadmin/img',
  'clearCacheOnLoad' => 1,
  'author' => 'Franz Holzinger',
  'author_email' => 'franz@ttproducts.de',
  'author_company' => 'jambage.com',
  'version' => '2.9.1',
  'constraints' => 
  array (
    'depends' => 
    array (
      'div2007' => '1.7.7-0.0.0',
      'migration_core' => '0.0.0-0.99.99',
      'php' => '5.2.0-7.99.99',
      'table' => '0.3.0-0.0.0',
      'tsparser' => '0.2.5-0.0.0',
      'typo3' => '4.5.0-8.9.99',
    ),
    'conflicts' => 
    array (
      'mkl_products' => '',
      'su_products' => '',
      'zk_products' => '',
      'ast_rteproducts' => '',
      'onet_ttproducts_rte' => '',
      'shopsort' => '',
      'c3bi_cookie_at_login' => '',
    ),
    'suggests' => 
    array (
      'func_wizards' => '',
      'addons_em' => '0.2.1-0.0.0',
    ),
  ),
  'clearcacheonload' => false,
);

