<?php

class partial_Detailansicht_fa99539f6074bc997e900d5b14ab1c0a8c9afcf3 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return '<br><br><br><br><hr><br><br><br>
<h3>ARTICLE_SINGLE_DISPLAY</h3>
<em>This subpart is used to display single products.</em><br>
<br>
<br>

<!-- ###ARTICLE_SINGLE_DISPLAY### begin
	This subpart is used to display single products.
-->

<table border="0" cellspacing="0" cellpadding="1" width=1>
	<tr>
		<td><img src="clear.gif" width="100" height="1"></td>
		<td><img src="clear.gif" width="5" height="1"></td>
		<td><img src="clear.gif" width="300" height="1"></td>
	</tr>
	<tr>
		<td colspan=3><img src="clear.gif" width="1" height="6"></td>
	</tr>
	<tr>
		<td colspan=3 bgcolor="###GC1###"><!--###LINK_ITEM###-->###GW2B###<b>###ARTICLE_TITLE###</b><br>###ARTICLE_SUBTITLE######GW2E###<!--###LINK_ITEM###--></td>
	</tr>
	<tr>
		<td valign=top>###ARTICLE_IMAGE1###  ###ARTICLE_IMAGE2###</td>
		<td></td>
		<td valign=top>
			###GW2B######ARTICLE_NOTE###<br>
		</td>
	</tr>
</table>
<br>


###GW2B###
<!--###LINK_ITEM###-->
<b>&lt;- ###LIST_BACK_TO_LIST###</b>
<!--###LINK_ITEM###-->
###GW2E###


###ARTICLE_ACCESSORY_UID###



<!-- ###ARTICLE_SINGLE_DISPLAY### end -->
';
}


}
#