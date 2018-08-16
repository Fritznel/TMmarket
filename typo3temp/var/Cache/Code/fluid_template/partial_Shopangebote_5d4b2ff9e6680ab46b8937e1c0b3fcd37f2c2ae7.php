<?php

class partial_Shopangebote_5d4b2ff9e6680ab46b8937e1c0b3fcd37f2c2ae7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'ITEM_LIST_TEMPLATE
This subpart is used to display the regular list of products. It\'s also used by search-results.

vorherige Seite ###BROWSE_LINKS### nächste Seite
###CATEGORY_TITLE###
###PRODUCT_IMAGE###
###PRODUCT_TITLE###
###PRODUCT_SUBTITLE###

Preis: ###PRICE_TAX### EUR
Detailansicht
Stück:
###FIELD_QTY###
vorherige Seite ###BROWSE_LINKS### nächste Seite
';
}


}
#