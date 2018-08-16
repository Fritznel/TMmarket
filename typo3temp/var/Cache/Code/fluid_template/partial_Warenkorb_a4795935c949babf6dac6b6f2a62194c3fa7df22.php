<?php

class partial_Warenkorb_a4795935c949babf6dac6b6f2a62194c3fa7df22 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return 'BASKET_TEMPLATE
Subpart used to display the content of the shopping basket. The product list part has the exact same features as the regular LIST_ITEM_TEMPLATE subpart. In addition there\'s a number of fields used for delivery and payment information.
Warenkorb
Stück	 	Produkt	Preis	Gesamt

###FIELD_QTY###
###PRODUCT_IMAGE###	###PRODUCT_TITLE###	###PRICE_TAX### EUR	###PRICE_TOTAL_TAX### EUR
Um einen Artikel aus dem Warenkorb zu entfernen, geben Sie im Feld "Stück" eine "0" ein und klicken Sie dann auf "Warenkorb aktualisieren".
Versandart & Bezahlung
Bitte wählen Sie eine Versandart

###SHIPPING_SELECTOR###
Versandkosten: ###PRICE_SHIPPING_TAX### EUR
Die Ware wird per Postpaket versendet.
Bitte überweisen Sie den Rechnungsbetrag nach Erhalt der Rechung auf unser Konto.

Die Ware wird im Büro abgeholt.
Die Bezahlung erfolgt bar bei Abholung der Ware.
Es fallen keine Versandkosten an.

Die Ware wird per Nachnahme versendet.
Die Bezahlung erfolgt bar bei Entgegennahme der Ware
Gesamtpreis: ###PRICE_TOTAL_TAX### EUR
Gesamtpreis ohne MwSt: ###PRICE_TOTAL_NO_TAX### EUR
Enthaltene MwSt: ###PRICE_TOTAL_ONLY_TAX### EUR
';
}


}
#