<?php

class partial_Shopsuche_3760d997c6111de782d0649918116721b8f50725 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output0 = '';

$output0 .= '<!------------------------------------------------------ SEARCH ---------------------------------------------------------------->


<!-- ###ITEM_SEARCH### begin
	Subpart for the search-form
	-->
    <div class="tt_products_item_search">
    	<form method="post" action="';
$array1 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('FORM_URL', $array1), ENT_QUOTES);

$output0 .= '">
        	<div>
	            <label for="swords">Suchen nach: </label>
	                <input size="30" maxlength="100" type="text" id="swords" name="swords" value="';
$array2 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('SWORDS', $array2), ENT_QUOTES);

$output0 .= '" />
	            <input type="submit" name="order" value="Search" />
            </div>
        </form>
    </div>
<!-- ###ITEM_SEARCH### end -->

<!-- ###ITEM_SEARCH_EMPTY### begin
	Subpart displayed if the search was empty. If the search was successfull, the ITEM_LIST_TEMPLATE in the top is used.
	-->
    <p class="error"><strong>Es wurde leider kein passendes Produkt gefunden.</strong></p>
<!-- ###ITEM_SEARCH_EMPTY### end -->
';

return $output0;
}


}
#