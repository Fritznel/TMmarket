<?php

class Standard_action_index_4bd6197d117576bb1d6947d69f9d83d93459f180 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Standard';
}
public function hasLayout() {
return TRUE;
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
 * section Jumbotron
 */
public function section_54621857be8482061195a0838a0d85f76438f774(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <!--TYPO3SEARCH_BEGIN-->
    <h1 class="display-3">Kaba Lavichè!</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
<!--TYPO3SEARCH_END-->
  </div>
</div>
';
}
/**
 * section Multicolumn
 */
public function section_8682e7727faa6bb2ed497157d65c53bf902fd0d1(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<div class="container maincontent"><!-- Content Container -->
<!-- Content Bereich Product Kategorien -->
<!--TYPO3SEARCH_BEGIN-->
  <div class="row">
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$array3 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array3);
};
$arguments1 = array();
$arguments1['value'] = NULL;

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$array6 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array6);
};
$arguments4 = array();
$arguments4['value'] = NULL;

$output0 .= isset($arguments4['value']) ? $arguments4['value'] : $renderChildrenClosure5();

$output0 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$array9 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array9);
};
$arguments7 = array();
$arguments7['value'] = NULL;

$output0 .= isset($arguments7['value']) ? $arguments7['value'] : $renderChildrenClosure8();

$output0 .= '
    </div>
  </div>
  <!-- Content Bereich ueber ganze Breite -->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$array12 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array12);
};
$arguments10 = array();
$arguments10['value'] = NULL;

$output0 .= isset($arguments10['value']) ? $arguments10['value'] : $renderChildrenClosure11();

$output0 .= '
    </div>
  </div>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$array15 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array15);
};
$arguments13 = array();
$arguments13['value'] = NULL;

$output0 .= isset($arguments13['value']) ? $arguments13['value'] : $renderChildrenClosure14();

$output0 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$array18 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array18);
};
$arguments16 = array();
$arguments16['value'] = NULL;

$output0 .= isset($arguments16['value']) ? $arguments16['value'] : $renderChildrenClosure17();

$output0 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$array21 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array21);
};
$arguments19 = array();
$arguments19['value'] = NULL;

$output0 .= isset($arguments19['value']) ? $arguments19['value'] : $renderChildrenClosure20();

$output0 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$array24 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array24);
};
$arguments22 = array();
$arguments22['value'] = NULL;

$output0 .= isset($arguments22['value']) ? $arguments22['value'] : $renderChildrenClosure23();

$output0 .= '
    </div>
  </div>
  <!-- Content Bereich ueber ganze Breite -->
  <div class="row">
    <div class="col-md-12">
      <h2>Content Bereich über ganze Breite</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi cum deserunt est eum expedita illo iste
        labore modi molestias nulla porro, repudiandae, similique voluptatibus? Dolorem eaque id repellat rerum
        veritatis!</p>
    </div>
  </div>
  <!--TYPO3SEARCH_end-->
';

return $output0;
}
/**
 * section 2spalten
 */
public function section_980d32f42b242592c13e4fbb2e8bd86bb74a461e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output25 = '';

$output25 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['typoscriptObjectPath'] = NULL;
$arguments26['data'] = NULL;
$arguments26['currentValueKey'] = NULL;
$arguments26['table'] = '';
$arguments26['typoscriptObjectPath'] = 'lib.rootline';

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '

<div class="container maincontent"><!-- Content Container -->

  <div class="row">
    <!--TYPO3SEARCH_BEGIN-->
    <div class="col-md-8">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['section'] = NULL;
$arguments34['partial'] = NULL;
$arguments34['delegate'] = NULL;
$arguments34['arguments'] = array (
);
$arguments34['optional'] = false;
$arguments34['default'] = NULL;
$arguments34['contentAs'] = NULL;
$arguments34['partial'] = 'Shopkategorien';

$output33 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$array38 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array38);
};
$arguments36 = array();
$arguments36['value'] = NULL;

$output33 .= isset($arguments36['value']) ? $arguments36['value'] : $renderChildrenClosure37();

$output33 .= '
      ';
return $output33;
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array31);
$array30['1'] = '==\'52\'';

$expression32 = function($context) {return (($context["node0"]) == '52');};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments28['__thenClosure'] = $renderChildrenClosure29;

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output25 .= '
    </div>
    <!--TYPO3SEARCH_end-->
    <div class="col-md-4">

      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['typoscriptObjectPath'] = NULL;
$arguments39['data'] = NULL;
$arguments39['currentValueKey'] = NULL;
$arguments39['table'] = '';
$arguments39['typoscriptObjectPath'] = 'lib.subnavigation';

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output25 .= '
      <!--TYPO3SEARCH_begin-->
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$array43 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array43);
};
$arguments41 = array();
$arguments41['value'] = NULL;

$output25 .= isset($arguments41['value']) ? $arguments41['value'] : $renderChildrenClosure42();

$output25 .= '
      <!--TYPO3SEARCH_end-->
   </div>
  </div>

';

return $output25;
}
/**
 * section 1spalte
 */
public function section_37ef54746835e715637332a9604865e47c4bc546(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output44 = '';

$output44 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['typoscriptObjectPath'] = NULL;
$arguments45['data'] = NULL;
$arguments45['currentValueKey'] = NULL;
$arguments45['table'] = '';
$arguments45['typoscriptObjectPath'] = 'lib.rootline';

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
<div class="container maincontent"><!-- Content Container -->
  <!--TYPO3SEARCH_begin-->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['section'] = NULL;
$arguments53['partial'] = NULL;
$arguments53['delegate'] = NULL;
$arguments53['arguments'] = array (
);
$arguments53['optional'] = false;
$arguments53['default'] = NULL;
$arguments53['contentAs'] = NULL;
$arguments53['partial'] = 'Bezahlung';

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$array57 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array57);
};
$arguments55 = array();
$arguments55['value'] = NULL;

$output52 .= isset($arguments55['value']) ? $arguments55['value'] : $renderChildrenClosure56();

$output52 .= '
      ';
return $output52;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array50);
$array49['1'] = '==\'51\'';

$expression51 = function($context) {return (($context["node0"]) == '51');};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments47['__thenClosure'] = $renderChildrenClosure48;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output44 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['section'] = NULL;
$arguments64['partial'] = NULL;
$arguments64['delegate'] = NULL;
$arguments64['arguments'] = array (
);
$arguments64['optional'] = false;
$arguments64['default'] = NULL;
$arguments64['contentAs'] = NULL;
$arguments64['partial'] = 'Shopkategorien';

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$array68 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array68);
};
$arguments66 = array();
$arguments66['value'] = NULL;

$output63 .= isset($arguments66['value']) ? $arguments66['value'] : $renderChildrenClosure67();

$output63 .= '
      ';
return $output63;
};
$arguments58 = array();
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$arguments58['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array61);
$array60['1'] = '==\'52\'';

$expression62 = function($context) {return (($context["node0"]) == '52');};
$arguments58['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$arguments58['__thenClosure'] = $renderChildrenClosure59;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output44 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['section'] = NULL;
$arguments75['partial'] = NULL;
$arguments75['delegate'] = NULL;
$arguments75['arguments'] = array (
);
$arguments75['optional'] = false;
$arguments75['default'] = NULL;
$arguments75['contentAs'] = NULL;
$arguments75['partial'] = 'Detailansicht';

$output74 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$array79 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array79);
};
$arguments77 = array();
$arguments77['value'] = NULL;

$output74 .= isset($arguments77['value']) ? $arguments77['value'] : $renderChildrenClosure78();

$output74 .= '
      ';
return $output74;
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array72);
$array71['1'] = '==\'53\'';

$expression73 = function($context) {return (($context["node0"]) == '53');};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments69['__thenClosure'] = $renderChildrenClosure70;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output44 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['section'] = NULL;
$arguments86['partial'] = NULL;
$arguments86['delegate'] = NULL;
$arguments86['arguments'] = array (
);
$arguments86['optional'] = false;
$arguments86['default'] = NULL;
$arguments86['contentAs'] = NULL;
$arguments86['partial'] = 'Shopsuche';

$output85 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$array90 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array90);
};
$arguments88 = array();
$arguments88['value'] = NULL;

$output85 .= isset($arguments88['value']) ? $arguments88['value'] : $renderChildrenClosure89();

$output85 .= '
      ';
return $output85;
};
$arguments80 = array();
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$arguments80['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array83);
$array82['1'] = '==\'54\'';

$expression84 = function($context) {return (($context["node0"]) == '54');};
$arguments80['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)
					),
					$renderingContext
				);
$arguments80['__thenClosure'] = $renderChildrenClosure81;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output44 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['section'] = NULL;
$arguments97['partial'] = NULL;
$arguments97['delegate'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['optional'] = false;
$arguments97['default'] = NULL;
$arguments97['contentAs'] = NULL;
$arguments97['partial'] = 'Shopen';

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$array101 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array101);
};
$arguments99 = array();
$arguments99['value'] = NULL;

$output96 .= isset($arguments99['value']) ? $arguments99['value'] : $renderChildrenClosure100();

$output96 .= '
        <!--';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$array104 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array104);
};
$arguments102 = array();
$arguments102['value'] = NULL;

$output96 .= isset($arguments102['value']) ? $arguments102['value'] : $renderChildrenClosure103();

$output96 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$array107 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array107);
};
$arguments105 = array();
$arguments105['value'] = NULL;

$output96 .= isset($arguments105['value']) ? $arguments105['value'] : $renderChildrenClosure106();

$output96 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$array110 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array110);
};
$arguments108 = array();
$arguments108['value'] = NULL;

$output96 .= isset($arguments108['value']) ? $arguments108['value'] : $renderChildrenClosure109();

$output96 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$array113 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array113);
};
$arguments111 = array();
$arguments111['value'] = NULL;

$output96 .= isset($arguments111['value']) ? $arguments111['value'] : $renderChildrenClosure112();

$output96 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$array116 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array116);
};
$arguments114 = array();
$arguments114['value'] = NULL;

$output96 .= isset($arguments114['value']) ? $arguments114['value'] : $renderChildrenClosure115();

$output96 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$array119 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array119);
};
$arguments117 = array();
$arguments117['value'] = NULL;

$output96 .= isset($arguments117['value']) ? $arguments117['value'] : $renderChildrenClosure118();

$output96 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$array122 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array122);
};
$arguments120 = array();
$arguments120['value'] = NULL;

$output96 .= isset($arguments120['value']) ? $arguments120['value'] : $renderChildrenClosure121();

$output96 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$array125 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array125);
};
$arguments123 = array();
$arguments123['value'] = NULL;

$output96 .= isset($arguments123['value']) ? $arguments123['value'] : $renderChildrenClosure124();

$output96 .= '-->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$array128 = array (
);return $renderingContext->getVariableProvider()->getByPath('product1', $array128);
};
$arguments126 = array();
$arguments126['value'] = NULL;

$output96 .= isset($arguments126['value']) ? $arguments126['value'] : $renderChildrenClosure127();

$output96 .= '
      ';
return $output96;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array94);
$array93['1'] = '==\'55\'';

$expression95 = function($context) {return (($context["node0"]) == '55');};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = $renderChildrenClosure92;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output44 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['section'] = NULL;
$arguments135['partial'] = NULL;
$arguments135['delegate'] = NULL;
$arguments135['arguments'] = array (
);
$arguments135['optional'] = false;
$arguments135['default'] = NULL;
$arguments135['contentAs'] = NULL;
$arguments135['partial'] = 'Abschliessen';

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$array139 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array139);
};
$arguments137 = array();
$arguments137['value'] = NULL;

$output134 .= isset($arguments137['value']) ? $arguments137['value'] : $renderChildrenClosure138();

$output134 .= '
      ';
return $output134;
};
$arguments129 = array();
$arguments129['then'] = NULL;
$arguments129['else'] = NULL;
$arguments129['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array132);
$array131['1'] = '==\'56\'';

$expression133 = function($context) {return (($context["node0"]) == '56');};
$arguments129['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression133(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments129['__thenClosure'] = $renderChildrenClosure130;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output44 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['section'] = NULL;
$arguments146['partial'] = NULL;
$arguments146['delegate'] = NULL;
$arguments146['arguments'] = array (
);
$arguments146['optional'] = false;
$arguments146['default'] = NULL;
$arguments146['contentAs'] = NULL;
$arguments146['partial'] = 'Warenkorb';

$output145 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$array150 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array150);
};
$arguments148 = array();
$arguments148['value'] = NULL;

$output145 .= isset($arguments148['value']) ? $arguments148['value'] : $renderChildrenClosure149();

$output145 .= '
      ';
return $output145;
};
$arguments140 = array();
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$arguments140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array143);
$array142['1'] = '==\'58\'';

$expression144 = function($context) {return (($context["node0"]) == '58');};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments140['__thenClosure'] = $renderChildrenClosure141;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output44 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output156 = '';

$output156 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['section'] = NULL;
$arguments157['partial'] = NULL;
$arguments157['delegate'] = NULL;
$arguments157['arguments'] = array (
);
$arguments157['optional'] = false;
$arguments157['default'] = NULL;
$arguments157['contentAs'] = NULL;
$arguments157['partial'] = 'Shopsuche';

$output156 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output156 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$array161 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array161);
};
$arguments159 = array();
$arguments159['value'] = NULL;

$output156 .= isset($arguments159['value']) ? $arguments159['value'] : $renderChildrenClosure160();

$output156 .= '
      ';
return $output156;
};
$arguments151 = array();
$arguments151['then'] = NULL;
$arguments151['else'] = NULL;
$arguments151['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array153 = array();
$array154 = array (
);$array153['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array154);
$array153['1'] = '==\'64\'';

$expression155 = function($context) {return (($context["node0"]) == '64');};
$arguments151['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression155(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array153)
					),
					$renderingContext
				);
$arguments151['__thenClosure'] = $renderChildrenClosure152;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output44 .= '

    </div>
  </div>
  <!--TYPO3SEARCH_end-->
';

return $output44;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output162 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['name'] = NULL;
$arguments163['name'] = 'Standard';

$output162 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext), ENT_QUOTES);

$output162 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return '
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <!--TYPO3SEARCH_BEGIN-->
    <h1 class="display-3">Kaba Lavichè!</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
<!--TYPO3SEARCH_END-->
  </div>
</div>
';
};
$arguments165 = array();
$arguments165['name'] = NULL;
$arguments165['name'] = 'Jumbotron';

$output162 .= '';

$output162 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output169 = '';

$output169 .= '
<div class="container maincontent"><!-- Content Container -->
<!-- Content Bereich Product Kategorien -->
<!--TYPO3SEARCH_BEGIN-->
  <div class="row">
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$array172 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array172);
};
$arguments170 = array();
$arguments170['value'] = NULL;

$output169 .= isset($arguments170['value']) ? $arguments170['value'] : $renderChildrenClosure171();

$output169 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$array175 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array175);
};
$arguments173 = array();
$arguments173['value'] = NULL;

$output169 .= isset($arguments173['value']) ? $arguments173['value'] : $renderChildrenClosure174();

$output169 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$array178 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array178);
};
$arguments176 = array();
$arguments176['value'] = NULL;

$output169 .= isset($arguments176['value']) ? $arguments176['value'] : $renderChildrenClosure177();

$output169 .= '
    </div>
  </div>
  <!-- Content Bereich ueber ganze Breite -->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$array181 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array181);
};
$arguments179 = array();
$arguments179['value'] = NULL;

$output169 .= isset($arguments179['value']) ? $arguments179['value'] : $renderChildrenClosure180();

$output169 .= '
    </div>
  </div>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$array184 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array184);
};
$arguments182 = array();
$arguments182['value'] = NULL;

$output169 .= isset($arguments182['value']) ? $arguments182['value'] : $renderChildrenClosure183();

$output169 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$array187 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array187);
};
$arguments185 = array();
$arguments185['value'] = NULL;

$output169 .= isset($arguments185['value']) ? $arguments185['value'] : $renderChildrenClosure186();

$output169 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$array190 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array190);
};
$arguments188 = array();
$arguments188['value'] = NULL;

$output169 .= isset($arguments188['value']) ? $arguments188['value'] : $renderChildrenClosure189();

$output169 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$array193 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array193);
};
$arguments191 = array();
$arguments191['value'] = NULL;

$output169 .= isset($arguments191['value']) ? $arguments191['value'] : $renderChildrenClosure192();

$output169 .= '
    </div>
  </div>
  <!-- Content Bereich ueber ganze Breite -->
  <div class="row">
    <div class="col-md-12">
      <h2>Content Bereich über ganze Breite</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi cum deserunt est eum expedita illo iste
        labore modi molestias nulla porro, repudiandae, similique voluptatibus? Dolorem eaque id repellat rerum
        veritatis!</p>
    </div>
  </div>
  <!--TYPO3SEARCH_end-->
';
return $output169;
};
$arguments167 = array();
$arguments167['name'] = NULL;
$arguments167['name'] = 'Multicolumn';

$output162 .= '';

$output162 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['typoscriptObjectPath'] = NULL;
$arguments197['data'] = NULL;
$arguments197['currentValueKey'] = NULL;
$arguments197['table'] = '';
$arguments197['typoscriptObjectPath'] = 'lib.rootline';

$output196 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output196 .= '

<div class="container maincontent"><!-- Content Container -->

  <div class="row">
    <!--TYPO3SEARCH_BEGIN-->
    <div class="col-md-8">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$output204 = '';

$output204 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['section'] = NULL;
$arguments205['partial'] = NULL;
$arguments205['delegate'] = NULL;
$arguments205['arguments'] = array (
);
$arguments205['optional'] = false;
$arguments205['default'] = NULL;
$arguments205['contentAs'] = NULL;
$arguments205['partial'] = 'Shopkategorien';

$output204 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output204 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$array209 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array209);
};
$arguments207 = array();
$arguments207['value'] = NULL;

$output204 .= isset($arguments207['value']) ? $arguments207['value'] : $renderChildrenClosure208();

$output204 .= '
      ';
return $output204;
};
$arguments199 = array();
$arguments199['then'] = NULL;
$arguments199['else'] = NULL;
$arguments199['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array201 = array();
$array202 = array (
);$array201['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array202);
$array201['1'] = '==\'52\'';

$expression203 = function($context) {return (($context["node0"]) == '52');};
$arguments199['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression203(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array201)
					),
					$renderingContext
				);
$arguments199['__thenClosure'] = $renderChildrenClosure200;

$output196 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output196 .= '
    </div>
    <!--TYPO3SEARCH_end-->
    <div class="col-md-4">

      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['typoscriptObjectPath'] = NULL;
$arguments210['data'] = NULL;
$arguments210['currentValueKey'] = NULL;
$arguments210['table'] = '';
$arguments210['typoscriptObjectPath'] = 'lib.subnavigation';

$output196 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output196 .= '
      <!--TYPO3SEARCH_begin-->
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$array214 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array214);
};
$arguments212 = array();
$arguments212['value'] = NULL;

$output196 .= isset($arguments212['value']) ? $arguments212['value'] : $renderChildrenClosure213();

$output196 .= '
      <!--TYPO3SEARCH_end-->
   </div>
  </div>

';
return $output196;
};
$arguments194 = array();
$arguments194['name'] = NULL;
$arguments194['name'] = '2spalten';

$output162 .= '';

$output162 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$output217 = '';

$output217 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['typoscriptObjectPath'] = NULL;
$arguments218['data'] = NULL;
$arguments218['currentValueKey'] = NULL;
$arguments218['table'] = '';
$arguments218['typoscriptObjectPath'] = 'lib.rootline';

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output217 .= '
<div class="container maincontent"><!-- Content Container -->
  <!--TYPO3SEARCH_begin-->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['section'] = NULL;
$arguments226['partial'] = NULL;
$arguments226['delegate'] = NULL;
$arguments226['arguments'] = array (
);
$arguments226['optional'] = false;
$arguments226['default'] = NULL;
$arguments226['contentAs'] = NULL;
$arguments226['partial'] = 'Bezahlung';

$output225 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output225 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$array230 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array230);
};
$arguments228 = array();
$arguments228['value'] = NULL;

$output225 .= isset($arguments228['value']) ? $arguments228['value'] : $renderChildrenClosure229();

$output225 .= '
      ';
return $output225;
};
$arguments220 = array();
$arguments220['then'] = NULL;
$arguments220['else'] = NULL;
$arguments220['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array222 = array();
$array223 = array (
);$array222['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array223);
$array222['1'] = '==\'51\'';

$expression224 = function($context) {return (($context["node0"]) == '51');};
$arguments220['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression224(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array222)
					),
					$renderingContext
				);
$arguments220['__thenClosure'] = $renderChildrenClosure221;

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output217 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['section'] = NULL;
$arguments237['partial'] = NULL;
$arguments237['delegate'] = NULL;
$arguments237['arguments'] = array (
);
$arguments237['optional'] = false;
$arguments237['default'] = NULL;
$arguments237['contentAs'] = NULL;
$arguments237['partial'] = 'Shopkategorien';

$output236 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output236 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$array241 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array241);
};
$arguments239 = array();
$arguments239['value'] = NULL;

$output236 .= isset($arguments239['value']) ? $arguments239['value'] : $renderChildrenClosure240();

$output236 .= '
      ';
return $output236;
};
$arguments231 = array();
$arguments231['then'] = NULL;
$arguments231['else'] = NULL;
$arguments231['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array233 = array();
$array234 = array (
);$array233['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array234);
$array233['1'] = '==\'52\'';

$expression235 = function($context) {return (($context["node0"]) == '52');};
$arguments231['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression235(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array233)
					),
					$renderingContext
				);
$arguments231['__thenClosure'] = $renderChildrenClosure232;

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output217 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$output247 = '';

$output247 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['section'] = NULL;
$arguments248['partial'] = NULL;
$arguments248['delegate'] = NULL;
$arguments248['arguments'] = array (
);
$arguments248['optional'] = false;
$arguments248['default'] = NULL;
$arguments248['contentAs'] = NULL;
$arguments248['partial'] = 'Detailansicht';

$output247 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output247 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$array252 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array252);
};
$arguments250 = array();
$arguments250['value'] = NULL;

$output247 .= isset($arguments250['value']) ? $arguments250['value'] : $renderChildrenClosure251();

$output247 .= '
      ';
return $output247;
};
$arguments242 = array();
$arguments242['then'] = NULL;
$arguments242['else'] = NULL;
$arguments242['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array244 = array();
$array245 = array (
);$array244['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array245);
$array244['1'] = '==\'53\'';

$expression246 = function($context) {return (($context["node0"]) == '53');};
$arguments242['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression246(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array244)
					),
					$renderingContext
				);
$arguments242['__thenClosure'] = $renderChildrenClosure243;

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output217 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments259 = array();
$arguments259['section'] = NULL;
$arguments259['partial'] = NULL;
$arguments259['delegate'] = NULL;
$arguments259['arguments'] = array (
);
$arguments259['optional'] = false;
$arguments259['default'] = NULL;
$arguments259['contentAs'] = NULL;
$arguments259['partial'] = 'Shopsuche';

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output258 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
$array263 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array263);
};
$arguments261 = array();
$arguments261['value'] = NULL;

$output258 .= isset($arguments261['value']) ? $arguments261['value'] : $renderChildrenClosure262();

$output258 .= '
      ';
return $output258;
};
$arguments253 = array();
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$arguments253['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array255 = array();
$array256 = array (
);$array255['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array256);
$array255['1'] = '==\'54\'';

$expression257 = function($context) {return (($context["node0"]) == '54');};
$arguments253['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression257(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array255)
					),
					$renderingContext
				);
$arguments253['__thenClosure'] = $renderChildrenClosure254;

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output217 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['section'] = NULL;
$arguments270['partial'] = NULL;
$arguments270['delegate'] = NULL;
$arguments270['arguments'] = array (
);
$arguments270['optional'] = false;
$arguments270['default'] = NULL;
$arguments270['contentAs'] = NULL;
$arguments270['partial'] = 'Shopen';

$output269 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);

$output269 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$array274 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array274);
};
$arguments272 = array();
$arguments272['value'] = NULL;

$output269 .= isset($arguments272['value']) ? $arguments272['value'] : $renderChildrenClosure273();

$output269 .= '
        <!--';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$array277 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array277);
};
$arguments275 = array();
$arguments275['value'] = NULL;

$output269 .= isset($arguments275['value']) ? $arguments275['value'] : $renderChildrenClosure276();

$output269 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$array280 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array280);
};
$arguments278 = array();
$arguments278['value'] = NULL;

$output269 .= isset($arguments278['value']) ? $arguments278['value'] : $renderChildrenClosure279();

$output269 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
$array283 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array283);
};
$arguments281 = array();
$arguments281['value'] = NULL;

$output269 .= isset($arguments281['value']) ? $arguments281['value'] : $renderChildrenClosure282();

$output269 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$array286 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array286);
};
$arguments284 = array();
$arguments284['value'] = NULL;

$output269 .= isset($arguments284['value']) ? $arguments284['value'] : $renderChildrenClosure285();

$output269 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$array289 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array289);
};
$arguments287 = array();
$arguments287['value'] = NULL;

$output269 .= isset($arguments287['value']) ? $arguments287['value'] : $renderChildrenClosure288();

$output269 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$array292 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array292);
};
$arguments290 = array();
$arguments290['value'] = NULL;

$output269 .= isset($arguments290['value']) ? $arguments290['value'] : $renderChildrenClosure291();

$output269 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$array295 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array295);
};
$arguments293 = array();
$arguments293['value'] = NULL;

$output269 .= isset($arguments293['value']) ? $arguments293['value'] : $renderChildrenClosure294();

$output269 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$array298 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array298);
};
$arguments296 = array();
$arguments296['value'] = NULL;

$output269 .= isset($arguments296['value']) ? $arguments296['value'] : $renderChildrenClosure297();

$output269 .= '-->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$array301 = array (
);return $renderingContext->getVariableProvider()->getByPath('product1', $array301);
};
$arguments299 = array();
$arguments299['value'] = NULL;

$output269 .= isset($arguments299['value']) ? $arguments299['value'] : $renderChildrenClosure300();

$output269 .= '
      ';
return $output269;
};
$arguments264 = array();
$arguments264['then'] = NULL;
$arguments264['else'] = NULL;
$arguments264['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array266 = array();
$array267 = array (
);$array266['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array267);
$array266['1'] = '==\'55\'';

$expression268 = function($context) {return (($context["node0"]) == '55');};
$arguments264['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression268(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array266)
					),
					$renderingContext
				);
$arguments264['__thenClosure'] = $renderChildrenClosure265;

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output217 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$output307 = '';

$output307 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments308 = array();
$arguments308['section'] = NULL;
$arguments308['partial'] = NULL;
$arguments308['delegate'] = NULL;
$arguments308['arguments'] = array (
);
$arguments308['optional'] = false;
$arguments308['default'] = NULL;
$arguments308['contentAs'] = NULL;
$arguments308['partial'] = 'Abschliessen';

$output307 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output307 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$array312 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array312);
};
$arguments310 = array();
$arguments310['value'] = NULL;

$output307 .= isset($arguments310['value']) ? $arguments310['value'] : $renderChildrenClosure311();

$output307 .= '
      ';
return $output307;
};
$arguments302 = array();
$arguments302['then'] = NULL;
$arguments302['else'] = NULL;
$arguments302['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array304 = array();
$array305 = array (
);$array304['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array305);
$array304['1'] = '==\'56\'';

$expression306 = function($context) {return (($context["node0"]) == '56');};
$arguments302['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression306(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array304)
					),
					$renderingContext
				);
$arguments302['__thenClosure'] = $renderChildrenClosure303;

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output217 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$output318 = '';

$output318 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments319 = array();
$arguments319['section'] = NULL;
$arguments319['partial'] = NULL;
$arguments319['delegate'] = NULL;
$arguments319['arguments'] = array (
);
$arguments319['optional'] = false;
$arguments319['default'] = NULL;
$arguments319['contentAs'] = NULL;
$arguments319['partial'] = 'Warenkorb';

$output318 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output318 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$array323 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array323);
};
$arguments321 = array();
$arguments321['value'] = NULL;

$output318 .= isset($arguments321['value']) ? $arguments321['value'] : $renderChildrenClosure322();

$output318 .= '
      ';
return $output318;
};
$arguments313 = array();
$arguments313['then'] = NULL;
$arguments313['else'] = NULL;
$arguments313['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array315 = array();
$array316 = array (
);$array315['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array316);
$array315['1'] = '==\'58\'';

$expression317 = function($context) {return (($context["node0"]) == '58');};
$arguments313['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression317(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array315)
					),
					$renderingContext
				);
$arguments313['__thenClosure'] = $renderChildrenClosure314;

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output217 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$output329 = '';

$output329 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments330 = array();
$arguments330['section'] = NULL;
$arguments330['partial'] = NULL;
$arguments330['delegate'] = NULL;
$arguments330['arguments'] = array (
);
$arguments330['optional'] = false;
$arguments330['default'] = NULL;
$arguments330['contentAs'] = NULL;
$arguments330['partial'] = 'Shopsuche';

$output329 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext);

$output329 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$array334 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array334);
};
$arguments332 = array();
$arguments332['value'] = NULL;

$output329 .= isset($arguments332['value']) ? $arguments332['value'] : $renderChildrenClosure333();

$output329 .= '
      ';
return $output329;
};
$arguments324 = array();
$arguments324['then'] = NULL;
$arguments324['else'] = NULL;
$arguments324['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array326 = array();
$array327 = array (
);$array326['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array327);
$array326['1'] = '==\'64\'';

$expression328 = function($context) {return (($context["node0"]) == '64');};
$arguments324['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression328(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array326)
					),
					$renderingContext
				);
$arguments324['__thenClosure'] = $renderChildrenClosure325;

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output217 .= '

    </div>
  </div>
  <!--TYPO3SEARCH_end-->
';
return $output217;
};
$arguments215 = array();
$arguments215['name'] = NULL;
$arguments215['name'] = '1spalte';

$output162 .= '';

$output162 .= '
';

return $output162;
}


}
#