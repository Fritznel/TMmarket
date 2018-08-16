<?php

class partial_Shopkategorien_a2d84277d662ca73e6b6a2a70b0abb506bee07b9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return '!------------------------------------------------------ Categories: menu ---------------------------------------------------------------->
###ITEM_SINGLE_PRE_HTML### ###LIST_LINK### ###ITEM_SINGLE_POST_HTML###
###ITEM_SINGLE_PRE_HTML### ###LIST_LINK### ###ITEM_SINGLE_POST_HTML###
Suchen nach:
###SWORDS###

Es wurde leider kein passendes Produkt gefunden.
';
}


}
#