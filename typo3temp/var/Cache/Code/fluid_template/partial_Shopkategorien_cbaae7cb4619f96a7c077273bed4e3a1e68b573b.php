<?php

class partial_Shopkategorien_cbaae7cb4619f96a7c077273bed4e3a1e68b573b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return '<br><br><br><br></p>
<hr><br><br><br>
<h3>ITEM_LIST_RELATED_ARTICLES_TEMPLATE</h3>
<em>This subpart is used to display the regular list of articles.</em><br>
<br>
<br>

<!-- ###ITEM_LIST_RELATED_ARTICLES_TEMPLATE### begin
	This subpart is used to display the regular list of articles.
-->
<table border="0" cellspacing="0" cellpadding="1" width=1 id="table1">
	<tr>
		<td><!--###LINK_PREV###-->###GW2B###<div align="left"><b>&lt;&lt; ###LIST_PREV_PAGE###</b></div>###GW2E###<!--###LINK_PREV###--></td>
		<td></td>
		<td></td>
		<td><!--###LINK_NEXT###-->###GW2B###<div align="right"><b>###LIST_NEXT_PAGE###
			&gt;&gt;</b></div>###GW2E###<!--###LINK_NEXT###--></td>
	</tr>
	<tr>
		<td><img src="clear.gif" width=100 height=1></td>
		<td><img src="clear.gif" width=5 height=1></td>
		<td><img src="clear.gif" width=300 height=1></td>
		<td><img src="clear.gif" width=100 height=1></td>
	</tr>
	<!-- ###ITEM_CATEGORY_AND_ITEMS### begin -->
		<!-- ###ITEM_CATEGORY### begin -->
			<tr>
				<td colspan=4><br>###GW1B###<font size=3><strong>###CATEGORY_TITLE###</strong></font> ###GW1E###
				<br>

				</td>
			</tr>
		<!-- ###ITEM_CATEGORY### end -->
		<!-- ###ITEM_PRODUCT_AND_ITEMS### begin -->
		<!-- ###ITEM_PRODUCT### begin -->
		<tr><td>This is the product title: ###PRODUCT_TITLE###</td></tr>
		<!-- ###ITEM_PRODUCT### end -->
		<!-- ###ITEM_LIST### begin -->
			<tr>
				<td colspan=4><img src="clear.gif" width=1 height=6></td>
			</tr>
			<!-- ###ITEM_SINGLE### begin-->
			<tr>
			<td colspan=4>
			<form method="post" action="###FORM_URL###" name="###FORM_NAME###">
			<table border="0" cellspacing="0" cellpadding="1" width=1 id="table2">
				<tr>
					<td><img src="clear.gif" width=100 height=1></td>
					<td><img src="clear.gif" width=5 height=1></td>
					<td><img src="clear.gif" width=300 height=1></td>
					<td><img src="clear.gif" width=100 height=1></td>
				</tr>
				<tr>
					<td colspan=4><img src="clear.gif" width=1 height=6></td>
				</tr>
				<tr>
					<td colspan=4 bgcolor="###GC1###"><!--###LINK_ITEM###-->###GW2B###<b>###ARTICLE_TITLE###</b>###GW2E###<!--###LINK_ITEM###--></td>
				</tr>
					<td valign=top>###ARTICLE_IMAGE###</td>
					<td></td>
					<td valign=top>###GW2B######ARTICLE_NOTE######GW2E###<br>
						<!-- ###display_variant1### -->
						###GW2B######P_COLOR### ###ARTICLE_COLOR######GW2E###<br>
						<!-- ###display_variant1### -->
		  <!-- ###display_variant2### -->
		    			###GW2B######P_SIZE### ###ARTICLE_SIZE######GW2E###<br>
		  <!-- ###display_variant2### -->
			<span class="article_price">&#8364; ###PRICE_TAX###</span>
			###ITEM_SINGLE_POST_HTML###
          <!-- ###ITEM_SINGLE### end -->

					</td>
					<td valign=top nowrap align=right>###GW2B###
					</td>
				</tr>
			</table>
			</form>
			</td>
			</tr>

		<!-- ###ITEM_LIST### end -->
	<!-- ###ITEM_PRODUCT_AND_ITEMS### end -->
	<!-- ###ITEM_CATEGORY_AND_ITEMS### end -->
	<tr>
		<td><!--###LINK_PREV###-->###GW2B###<div align="left"><b>&lt;&lt; ###LIST_PREV_PAGE###</b></div>###GW2E###<!--###LINK_PREV###--></td>
		<td></td>
		<td></td>
		<td><!--###LINK_NEXT###-->###GW2B###<div align="right"><b>###LIST_NEXT_PAGE###
			&gt;&gt;</b></div>###GW2E###<!--###LINK_NEXT###--></td>
	</tr>
</table>
<br>
<!-- ###ITEM_LIST_RELATED_ARTICLES_TEMPLATE### end -->
';
}


}
#