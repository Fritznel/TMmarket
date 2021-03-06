<?php

class partial_Bezahlung_536b60840ce295487fdbfec8ce95b0887e3bc43c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<h3>BASKET_PAYMENT_TEMPLATE</h3><em>Subpart used if the GPvar "products_payment" was set. This displays the final information about the order before the payment is initiated.<br>Exact same features as BASKET_TEMPLATE<br>
</em><br><br><br>
<!-- ###BASKET_PAYMENT_TEMPLATE### begin
Subpart used if the GPvar "products_payment" was set. This displays the final information about the order before the payment is initiated.
Exact same features as BASKET_TEMPLATE
-->
###EXTERNAL_COBJECT###
<table border="0" cellspacing="0">
	<tr>
		<td width="21%"><img src="clear.gif" height="1"></td>
    	<td width="34%"><img src="clear.gif" height=1></td>
		<td colspan=2><img src="clear.gif" height="1"></td>
	</tr>
	<tr>
		<td colspan=3 bgcolor="###GC2###">###GW2B###<b>###BASKET_HEADER_ITEM###</b>###GW2E###</td>
    <!-- <td bgcolor="###GC2###">###GW2B###<b>Preis: </b>
###GW2E###
</td>
-->
    	<td bgcolor="###GC2###" width="17%">
		<p align="right">###GW2B###<b>###BASKET_HEADER_QUANTITY###</b>###GW2E###</td>
		<td bgcolor="###GC2###" width="27%">
		<p align="right">###GW2B###<b>###BASKET_HEADER_TOTAL###</b>###GW2E###</td>
	</tr>
  <!-- ###ITEM_CATEGORY_AND_ITEMS### begin -->
  <!-- ###ITEM_CATEGORY### begin -->
  	<tr>
		<td colspan=5><br>###CATEGORY_TITLE###<br></td>
	</tr>
  <!-- ###ITEM_CATEGORY### end -->
  <!-- ###ITEM_LIST### begin -->
  <!-- ###ITEM_SINGLE### begin-->
  	<tr>
		<td colspan=5><img src="clear.gif" width="1" height="6"></td>
	</tr>
	<tr>
		<td valign=top colspan=3>###GW1B###<b>###PRODUCT_TITLE###</b>###GW1E###
		</td>
    <!--
<td valign=top>###GW1B### ###PRICE_TAX### ###GW1E###</td>
-->
    	<td valign=top align=center width="17%">
		<p align="right">###GW1B### ###FIELD_QTY### ###GW1E###</td>
		<td valign=top align=right width="27%">###GW1B###<b>###PRICE_TOTAL_TAX###<br>
		</b><font size="1">(###NO_VAT###&nbsp; ###PRICE_TOTAL_NO_TAX###)</font>###GW1E###
      <!--
<b>###PRICE_TOTAL_TAX###</b>
-->
      <!--
<br>(###PRICE_TOTAL_NO_TAX###) ###GW1E###
-->
    	</td>
	</tr>
  <!-- ###ITEM_SINGLE### end -->
  <!-- ###ITEM_LIST### end -->
  <!-- ###ITEM_CATEGORY_AND_ITEMS### end -->
  	<tr>
		<td colspan= width="21%"><img src="clear.gif" width="1" height="10"></td>
	</tr>
	<tr>
		<td colspan=3 bgcolor="###GC2###">###GW2B###<b>###BASKET_BILLING_ADDRESS###:</b>###GW2E###</td>
		<td colspan=2></td>
	</tr>
	<tr>
		<td colspan=3>
		<table border=0>
			<tr>
				<td>###GW1B######BASKET_COMPANY###:###GW1E###</td>
				<td>###GW1B###<strong>###PERSON_COMPANY###</strong>###GW1E###</td>
			</tr>
			<tr>
				<td>###GW1B######BASKET_NAME###:###GW1E###</td>
				<td>###GW1B###<strong>###PERSON_NAME###</strong>###GW1E###</td>
			</tr>
			<tr>
				<td>###GW1B######BASKET_ADDRESS###:###GW1E###</td>
				<td>###GW1B###<strong>###PERSON_ADDRESS_DISPLAY###</strong>###GW1E###</td>
			</tr>
			<tr>
				<td>###GW1B######BASKET_ZIP_CITY###:###GW1E###</td>
				<td>###GW1B###<strong>###PERSON_ZIP### ###PERSON_CITY###</strong>###GW1E###</td>
			</tr>
			<tr>
				<td>###GW1B######BASKET_COUNTRY###:###GW1E###</td>
				<td>###GW1B###<strong>###PERSON_COUNTRY###</strong>###GW1E###</td>
			</tr>
			<tr>
				<td>###GW1B######BASKET_PHONE###:###GW1E###</td>
				<td>###GW1B###<strong>###PERSON_TELEPHONE###</strong>###GW1E###</td>
			</tr>
			<tr>
				<td valign="TOP">###GW1B######BASKET_EMAIL###:###GW1E###</td>
				<td>###GW1B###<strong>###PERSON_EMAIL###</strong>###GW1E### ###GW2B###<br>
				<i>###BASKET_PAYMENT_EMAIL_COMMENT###</i>###GW2E###<br>
				</td>
			</tr>
<!-- ###MESSAGE_SHIPPING_40### -->
			<tr>
				<td>###GW1B######BASKET_VAT_ID###:###GW1E###</td>
				<td>###GW1B###<strong>###PERSON_TT_PRODUCTS_VAT###</strong>###GW1E###</td>
			</tr>
<!-- ###MESSAGE_SHIPPING_40### -->
		</table></td>
		<td colspan=2></td>
	</tr>
	<tr>
		<td colspan=5><img src="clear.gif" width="1" height="10"></td>
	</tr>
	<tr>
		<td colspan=3 bgcolor="###GC2###">###GW2B###<b>###BASKET_DELIVERY_ADDRESS###:</b>###GW2E###</td>
		<td colspan=2></td>
	</tr>
	<tr>
		<td colspan=3>
		<table border=0>
			<tr>
				<td>###GW1B######BASKET_TITLE###:###GW1E###</td>
				<td>###GW1B###<strong>###DELIVERY_SALUTATION###</strong>###GW1E###</td>
			</tr>
			<tr>
				<td>###GW1B######BASKET_NAME###:###GW1E###</td>
				<td>###GW1B###<strong>###DELIVERY_NAME###</strong>###GW1E###</td>
			</tr>
			<tr>
				<td>###GW1B######BASKET_COMPANY###:###GW1E###</td>
				<td>###GW1B###<strong>###DELIVERY_COMPANY###</strong>###GW1E###</td>
			</tr>

			<tr>
				<td>###GW1B######BASKET_ADDRESS###:###GW1E###</td>
				<td>###GW1B###<strong>###DELIVERY_ADDRESS_DISPLAY###</strong>###GW1E###</td>
			</tr>
			<tr>
				<td>###GW1B######BASKET_ZIP_CITY###:###GW1E###</td>
				<td>###GW1B###<strong>###DELIVERY_ZIP### ###DELIVERY_CITY###</strong>###GW1E###</td>
			</tr>
			<tr>
				<td>###GW1B######BASKET_COUNTRY###:###GW1E###</td>
				<td>###GW1B###<strong>###DELIVERY_COUNTRY###</strong>###GW1E###</td>
			</tr>
			<tr>
				<td>###GW1B######BASKET_PHONE###:###GW1E###</td>
				<td>###GW1B###<strong>###DELIVERY_TELEPHONE###</strong>###GW1E###</td>
			</tr>
			<tr>
				<td valign="TOP">###GW1B######BASKET_EMAIL###:###GW1E###</td>
				<td>###GW1B###<strong>###DELIVERY_EMAIL###</strong>###GW1E###<br>
				</td>
			</tr>
		</table></td>
		<td colspan=2></td>
	</tr>
	<tr>
		<td colspan=5><img src="clear.gif" width="1" height="10"></td>
	</tr>
	<tr>
		<td colspan=3>
		<table>
			<tr>
				<td>###GW1B######BASKET_PAYMENT_SHIPPING_DATE######GW1E###</td>
				<td>###GW1B###<strong>###DELIVERY_DESIRED_DATE###</strong>###GW1E###</td>
			</tr>
		</table></td>
		<td colspan=2></td>
	</tr>
	<tr>
		<td colspan=3 bgcolor="###GC2###">###GW2B###<b>###BASKET_PAYMENT_COMMENT###</b>###GW2E###</td>
		<td colspan=2></td>
	</tr>
	<tr>
		<td colspan=3>
		<table>
			<tr>
				<td>###GW1B######GW1E###</td>
				<td>###GW1B###<strong>###DELIVERY_NOTE_DISPLAY###</strong>###GW1E###</td>
			</tr>
		</table></td>
		<td colspan=2></td>
	</tr>
	<tr>
		<td colspan=5><img src="clear.gif" width="1" height="10"></td>
	</tr>
	<tr>
		<td colspan=3 bgcolor="###GC2###">###GW2B###<a href="index.php?id=###PID_DELIVERY######LANGPARAM###" target=_blank><b><font color=#000000>###BASKET_SHIPPING_HANDLING###</font></b>###GW2E###</td>
		<td colspan=2></td>
	</tr>
	<td colspan=3>###GW1B######BASKET_SHIPPING_PRICE### <b>###SHIPPING_TITLE###</b>###GW1E###<br>
	</td>
	<td valign=top align=right colspan=2>###GW1B###<b>###PRICE_SHIPPING_TAX###
	</b><font size="1">(###NO_VAT### ###PRICE_SHIPPING_NO_TAX###)</font>###GW1E###</td>
	</tr>
	<tr>
		<td colspan=5 height="12"><img src="clear.gif" width="1" height="10"></td>
	</tr>
	<tr>
		<td colspan=3 bgcolor="###GC2###">###GW2B###<b>###BASKET_PAYMENT###</b>###GW2E###</td>
		<td valign=top align=right colspan=3>&nbsp;</td>
	</tr>
	<tr>
		<td valign=top colspan=3>###GW1B######PAYMENT_IMAGE### ###PAYMENT_TITLE###
      ###GW1E###</td>
		<td valign=top align=right colspan=3>###GW1B### <b>###PRICE_PAYMENT_TAX###</b><font size="1">
	(###NO_VAT### ###PRICE_PAYMENT_NO_TAX###)</font><!-- (###PRICE_PAYMENT_NO_TAX###)<br>
-->###GW1E###</td>
	</tr>
	<tr>
		<td colspan=5><img src="clear.gif" width="1" height="10"></td>
	</tr>
	<tr>
		<td colspan=5 bgcolor="###GC2###">###GW2B###<b>###BASKET_PAYMENT_TOTAL###</b>###GW2E###</td>
	</tr>
	<tr>
		<td valign=top colspan=3>###GW1B###<strong>###BASKET_PAYMENT_INVOICE###</strong>
      ###GW1E###</td>
		<td valign=top align=right colspan=2 nowrap>###GW1B### <b>###P_CURRENCY### ###PRICE_TOTAL_TAX###</b>
		<br>(###VAT### ###P_CURRENCY### ###PRICE_TOTAL_ONLY_TAX###)
		<br>(###NO_VAT### ###P_CURRENCY### ###PRICE_TOTAL_NO_TAX###)<br>###GW1E###</td>
	</tr>
	<tr><td valign=top align=right colspan=5 nowrap>
	###MESSAGE_PAYMENT_SCRIPT### <!-- start payment script if available and paymentActivity = payment -->
	<td></tr>
</table>
<form method="post" action="###FORM_URL###" name="###FORM_NAME###" id="paymentForm">
	<table width="100%">
		<tr>
			<td>
			<input type="Submit" name="products_update" value="###BASKET_BACK_TO_CART###">
			<input type="hidden" name="products_cmd" value="cardno"></td>
			<td align="right">
<!-- ###MESSAGE_PAYMENT_TRANSACTOR_NO### begin -->
			<input type="Submit" name="products_finalize" value="###BASKET_PLACE_ORDER###" onclick="this.form.action=\'###FORM_URL_THANKS###\'; this.form.target=\'###FORM_URL_TARGET###\';">###GW1B### ###GW1E###
<!-- ###MESSAGE_PAYMENT_TRANSACTOR_NO### end -->

		</tr>
	</table>
</form><br>
<!-- ###BASKET_PAYMENT_TEMPLATE### end -->
';
}


}
#