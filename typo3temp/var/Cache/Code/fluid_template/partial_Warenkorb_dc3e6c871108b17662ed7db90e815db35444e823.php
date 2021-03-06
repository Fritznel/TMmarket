<?php

class partial_Warenkorb_dc3e6c871108b17662ed7db90e815db35444e823 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return '<!-- ###BASKET_TEMPLATE###
Subpart used to display the content of the shopping basket.
The product list part has the exact same features as the regular LIST_ITEM_TEMPLATE subpart.
In addition there\'s a number of fields used for delivery and payment information.
-->
###EXTERNAL_COBJECT###
<form method="post" id="basketForm" action="###FORM_URL###">

<table border="0" cellspacing="0" cellpadding="0" width="100%" style="border-collapse: collapse" bordercolor="#111111">
<tr>
<td><img src="clear.gif" width="100" height="1"></td>
<td><img src="clear.gif" width="5" height="1"></td>
<td><img src="clear.gif" width="110" height="1"></td>
<td colspan=3><img src="clear.gif" width="100" height="1"></td>
</tr>
<tr>
<td colspan=3 bgcolor="###GC2###">###GW2B###<b>###BASKET_HEADER_ITEM###</b>###GW2E###</td>
<td bgcolor="###GC2###">###GW2B###<b> ###BASKET_HEADER_PRICE### </b>###GW2E###</td>
<td bgcolor="###GC2###">###GW2B###<b>###BASKET_HEADER_QUANTITY###</b>###GW2E###</td>
<td align=center bgcolor="###GC2###">
<p align="right">###GW2B###<b>###BASKET_HEADER_TOTAL###</b>###GW2E###</td>
</tr>
<!-- ###ITEM_CATEGORY_AND_ITEMS### begin -->
<!-- ###ITEM_CATEGORY### begin -->
<tr>
<td colspan=6><br>###CATEGORY_TITLE###<br>
</td>
</tr>
<!-- ###ITEM_CATEGORY### end -->
<!-- ###ITEM_LIST### begin -->
<!-- ###ITEM_SINGLE### begin-->
<tr>
<td colspan=6><img src="clear.gif" width="1" height="6"></td>
</tr>
<tr>

<td valign=top style="border-bottom-style: solid; border-bottom-width: 1">
<!--###LINK_ITEM###-->###GW1B###<b>###PRODUCT_TITLE###</b>###GW1E###<!--###LINK_ITEM###-->
<br>
###PRODUCT_IMAGE###</td>
<td colspan="2" style="border-bottom-style: solid; border-bottom-width: 1">
				<!-- ###display_variant1### -->
				<font size="1">###GW2B######P_COLOR###
				###ARTICLE_COLOR######GW2E###</font><br>
				<!-- ###display_variant1### -->
				<!-- ###display_variant6### -->
				<font size="1">###GW2B######P_COLOR2###
				###ARTICLE_COLOR2######GW2E###</font><br>
				<!-- ###display_variant6### -->
				<!-- ###display_variant7### -->
				<font size="1">###GW2B######P_COLOR3###
				###ARTICLE_COLOR3######GW2E###</font><br>
				<!-- ###display_variant7### -->
				<!-- ###display_variant2### -->
				<font size="1">###GW2B######P_SIZE###
				###ARTICLE_SIZE######GW2E###</font><br>
				<!-- ###display_variant2### -->
				<!-- ###display_variant8### -->
				<font size="1">###GW2B######P_WIDTH###
				###ARTICLE_SIZE2######GW2E###</font><br>
				<!-- ###display_variant8### -->
				<!-- ###display_variant9### -->
				<font size="1">###GW2B######P_HEIGHT###
				###ARTICLE_SIZE3######GW2E###</font><br>
				<!-- ###display_variant9### -->
				<!-- ###display_variant4### -->
				<font size="1">###GW2B######P_GRADINGS###
				###ARTICLE_GRADINGS######GW2E###</font><br>
				<!-- ###display_variant4### -->
				<!-- ###display_variant3### -->
				<font size="1">###GW2B######P_DESCRIPTION###
				###ARTICLE_DESCRIPTION######GW2E###</font><br>
				<!-- ###display_variant3### -->
				<!-- ###display_variant10### -->
				<font size="1">###GW2B######P_MATERIAL###
				###ARTICLE_MATERIAL######GW2E###</font><br>
				<!-- ###display_variant10### -->
				<!-- ###display_variant11### -->
				<font size="1">###GW2B######P_QUALITY###
				###ARTICLE_QUALITY######GW2E###</font><br>
				<!-- ###display_variant11### -->
   <br>
		  ###GW1B###<font size="1">###BULKILY_WARNING###</font>###GW1E###</td>
<td valign=top style="border-bottom-style: solid; border-bottom-width: 1">###GW1B### ###PRICE_TAX###<br>
<font size="1">(###NO_VAT### ###PRICE_NO_TAX###)</font>###GW1E###</td>
<td valign=top style="border-bottom-style: solid; border-bottom-width: 1">
<p align="center"> <input size="2" maxlength="4" type="text" name="###FIELD_NAME_BASKET###" value="###FIELD_QTY###"> </td>
<td valign=top align=right style="border-bottom-style: solid; border-bottom-width: 1">###GW1B### <b>###PRICE_TOTAL_TAX###</b> <br>
<font size="1">(###NO_VAT### ###PRICE_TOTAL_NO_TAX###)</font>###GW1E###</td>
</tr>
<!-- ###ITEM_SINGLE### end -->
<!-- ###ITEM_LIST### end -->
<!-- ###ITEM_CATEGORY_AND_ITEMS### end -->
<tr>
<td colspan=6><img src="clear.gif" width="1" height="10"></td>
</tr>


<tr>
<td colspan=6>###GW1B######BASKET_DELETE_ITEM######GW1E###<br>
<br>
###GW1B######BASKET_CHANGE_ITEM######GW1E###<br>
<br>
###GW1B######BASKET_PAYMENT_SELECT_PAYMENT######GW1E###<br>
&nbsp;</td>
</tr>


<tr>
      <td colspan=3 bgcolor="###GC2###">###GW2B###<b>###BASKET_SHIPPING_HANDLING###</b>###GW2E###</td>
      <td colspan=2></td>

</tr>

<tr>
<td colspan=6><img src="clear.gif" width="1" height="6"></td>
</tr>


<tr>
<td colspan=5>
###GW1B######BASKET_SHIPPING_PRICE### <b>###SHIPPING_TITLE###</b>###GW1E###<br><br>

<table width="100%" style="border-collapse: collapse" bordercolor="#111111" cellpadding="0" cellspacing="0"><tr>
            <td valign="middle">###GW1B######SHIPPING_SELECTOR######GW1E###</td>
</tr></table>

</td>
      <td valign=top align=right>###GW1B### <b>###PRICE_SHIPPING_TAX###</b>
         <br>(###NO_VAT### ###PRICE_SHIPPING_NO_TAX###)
        ###GW1E###</td>
</tr>

<tr>
<td colspan=6><img src="clear.gif" width="1" height="10"></td>
</tr>

<tr>
<td valign=top colspan=5></td>
<td valign=top align=right nowrap>###GW1B###(###NO_VAT### ###P_CURRENCY### ###PRICE_TOTAL_NO_TAX###)###GW1E###<br> ###GW1B###(###VAT###
###P_CURRENCY### ###PRICE_TOTAL_ONLY_TAX###)  ###GW1E###<br>
###GW1B### <b>###P_CURRENCY### ###PRICE_TOTAL_TAX###</b>###GW1E###</td>
</tr>
</table><br>
<table width="100%"><tr>
<td>
<input type="hidden" name="mode_update" value="1">
<input type="submit" name="products_update" value="###BASKET_UPDATE_CART###">
<input type="submit" name="products_clear_basket" value="###BASKET_EMPTY_CART###"></td>
<td align="right">
<input type="submit" name="products_info" value="###BASKET_CHECKOUT###" onClick="var basketForm; basketForm = document.getElementById(\'basketForm\'); basketForm.action=\'###FORM_URL_INFO###\';"></td>
</tr>
</table>
</form>
<br>
<!-- ###BASKET_TEMPLATE### end -->
';
}


}
#