<?php

class Standard_action_index_9be3c565d8b9e7c3cfd8367403ed27c381dc3fef extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments64['partial'] = 'Detailansicht';

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
$array60['1'] = '==\'53\'';

$expression62 = function($context) {return (($context["node0"]) == '53');};
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
$arguments75['partial'] = 'Shopsuche';

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
$array71['1'] = '==\'54\'';

$expression73 = function($context) {return (($context["node0"]) == '54');};
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
$arguments86['partial'] = 'Shopen';

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
        <!--';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$array93 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array93);
};
$arguments91 = array();
$arguments91['value'] = NULL;

$output85 .= isset($arguments91['value']) ? $arguments91['value'] : $renderChildrenClosure92();

$output85 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array96 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array96);
};
$arguments94 = array();
$arguments94['value'] = NULL;

$output85 .= isset($arguments94['value']) ? $arguments94['value'] : $renderChildrenClosure95();

$output85 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$array99 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array99);
};
$arguments97 = array();
$arguments97['value'] = NULL;

$output85 .= isset($arguments97['value']) ? $arguments97['value'] : $renderChildrenClosure98();

$output85 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$array102 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array102);
};
$arguments100 = array();
$arguments100['value'] = NULL;

$output85 .= isset($arguments100['value']) ? $arguments100['value'] : $renderChildrenClosure101();

$output85 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$array105 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array105);
};
$arguments103 = array();
$arguments103['value'] = NULL;

$output85 .= isset($arguments103['value']) ? $arguments103['value'] : $renderChildrenClosure104();

$output85 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$array108 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array108);
};
$arguments106 = array();
$arguments106['value'] = NULL;

$output85 .= isset($arguments106['value']) ? $arguments106['value'] : $renderChildrenClosure107();

$output85 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$array111 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array111);
};
$arguments109 = array();
$arguments109['value'] = NULL;

$output85 .= isset($arguments109['value']) ? $arguments109['value'] : $renderChildrenClosure110();

$output85 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$array114 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array114);
};
$arguments112 = array();
$arguments112['value'] = NULL;

$output85 .= isset($arguments112['value']) ? $arguments112['value'] : $renderChildrenClosure113();

$output85 .= '-->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$array117 = array (
);return $renderingContext->getVariableProvider()->getByPath('product1', $array117);
};
$arguments115 = array();
$arguments115['value'] = NULL;

$output85 .= isset($arguments115['value']) ? $arguments115['value'] : $renderChildrenClosure116();

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
$array82['1'] = '==\'55\'';

$expression84 = function($context) {return (($context["node0"]) == '55');};
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
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['section'] = NULL;
$arguments124['partial'] = NULL;
$arguments124['delegate'] = NULL;
$arguments124['arguments'] = array (
);
$arguments124['optional'] = false;
$arguments124['default'] = NULL;
$arguments124['contentAs'] = NULL;
$arguments124['partial'] = 'Abschliessen';

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$array128 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array128);
};
$arguments126 = array();
$arguments126['value'] = NULL;

$output123 .= isset($arguments126['value']) ? $arguments126['value'] : $renderChildrenClosure127();

$output123 .= '
      ';
return $output123;
};
$arguments118 = array();
$arguments118['then'] = NULL;
$arguments118['else'] = NULL;
$arguments118['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array121);
$array120['1'] = '==\'56\'';

$expression122 = function($context) {return (($context["node0"]) == '56');};
$arguments118['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);
$arguments118['__thenClosure'] = $renderChildrenClosure119;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

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
$arguments135['partial'] = 'Warenkorb';

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
$array131['1'] = '==\'58\'';

$expression133 = function($context) {return (($context["node0"]) == '58');};
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
$arguments146['partial'] = 'Shopsuche';

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
$array142['1'] = '==\'64\'';

$expression144 = function($context) {return (($context["node0"]) == '64');};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments140['__thenClosure'] = $renderChildrenClosure141;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

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
$output151 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['name'] = NULL;
$arguments152['name'] = 'Standard';

$output151 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext), ENT_QUOTES);

$output151 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
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
$arguments154 = array();
$arguments154['name'] = NULL;
$arguments154['name'] = 'Jumbotron';

$output151 .= '';

$output151 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
<div class="container maincontent"><!-- Content Container -->
<!-- Content Bereich Product Kategorien -->
<!--TYPO3SEARCH_BEGIN-->
  <div class="row">
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$array161 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array161);
};
$arguments159 = array();
$arguments159['value'] = NULL;

$output158 .= isset($arguments159['value']) ? $arguments159['value'] : $renderChildrenClosure160();

$output158 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$array164 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array164);
};
$arguments162 = array();
$arguments162['value'] = NULL;

$output158 .= isset($arguments162['value']) ? $arguments162['value'] : $renderChildrenClosure163();

$output158 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$array167 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array167);
};
$arguments165 = array();
$arguments165['value'] = NULL;

$output158 .= isset($arguments165['value']) ? $arguments165['value'] : $renderChildrenClosure166();

$output158 .= '
    </div>
  </div>
  <!-- Content Bereich ueber ganze Breite -->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$array170 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array170);
};
$arguments168 = array();
$arguments168['value'] = NULL;

$output158 .= isset($arguments168['value']) ? $arguments168['value'] : $renderChildrenClosure169();

$output158 .= '
    </div>
  </div>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$array173 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array173);
};
$arguments171 = array();
$arguments171['value'] = NULL;

$output158 .= isset($arguments171['value']) ? $arguments171['value'] : $renderChildrenClosure172();

$output158 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$array176 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array176);
};
$arguments174 = array();
$arguments174['value'] = NULL;

$output158 .= isset($arguments174['value']) ? $arguments174['value'] : $renderChildrenClosure175();

$output158 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$array179 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array179);
};
$arguments177 = array();
$arguments177['value'] = NULL;

$output158 .= isset($arguments177['value']) ? $arguments177['value'] : $renderChildrenClosure178();

$output158 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$array182 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array182);
};
$arguments180 = array();
$arguments180['value'] = NULL;

$output158 .= isset($arguments180['value']) ? $arguments180['value'] : $renderChildrenClosure181();

$output158 .= '
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
return $output158;
};
$arguments156 = array();
$arguments156['name'] = NULL;
$arguments156['name'] = 'Multicolumn';

$output151 .= '';

$output151 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['typoscriptObjectPath'] = NULL;
$arguments186['data'] = NULL;
$arguments186['currentValueKey'] = NULL;
$arguments186['table'] = '';
$arguments186['typoscriptObjectPath'] = 'lib.rootline';

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '

<div class="container maincontent"><!-- Content Container -->

  <div class="row">
    <!--TYPO3SEARCH_BEGIN-->
    <div class="col-md-8">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$output193 = '';

$output193 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['section'] = NULL;
$arguments194['partial'] = NULL;
$arguments194['delegate'] = NULL;
$arguments194['arguments'] = array (
);
$arguments194['optional'] = false;
$arguments194['default'] = NULL;
$arguments194['contentAs'] = NULL;
$arguments194['partial'] = 'Shopkategorien';

$output193 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output193 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$array198 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array198);
};
$arguments196 = array();
$arguments196['value'] = NULL;

$output193 .= isset($arguments196['value']) ? $arguments196['value'] : $renderChildrenClosure197();

$output193 .= '
      ';
return $output193;
};
$arguments188 = array();
$arguments188['then'] = NULL;
$arguments188['else'] = NULL;
$arguments188['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array190 = array();
$array191 = array (
);$array190['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array191);
$array190['1'] = '==\'52\'';

$expression192 = function($context) {return (($context["node0"]) == '52');};
$arguments188['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression192(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array190)
					),
					$renderingContext
				);
$arguments188['__thenClosure'] = $renderChildrenClosure189;

$output185 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output185 .= '
    </div>
    <!--TYPO3SEARCH_end-->
    <div class="col-md-4">

      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['typoscriptObjectPath'] = NULL;
$arguments199['data'] = NULL;
$arguments199['currentValueKey'] = NULL;
$arguments199['table'] = '';
$arguments199['typoscriptObjectPath'] = 'lib.subnavigation';

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output185 .= '
      <!--TYPO3SEARCH_begin-->
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$array203 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array203);
};
$arguments201 = array();
$arguments201['value'] = NULL;

$output185 .= isset($arguments201['value']) ? $arguments201['value'] : $renderChildrenClosure202();

$output185 .= '
      <!--TYPO3SEARCH_end-->
   </div>
  </div>

';
return $output185;
};
$arguments183 = array();
$arguments183['name'] = NULL;
$arguments183['name'] = '2spalten';

$output151 .= '';

$output151 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['typoscriptObjectPath'] = NULL;
$arguments207['data'] = NULL;
$arguments207['currentValueKey'] = NULL;
$arguments207['table'] = '';
$arguments207['typoscriptObjectPath'] = 'lib.rootline';

$output206 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output206 .= '
<div class="container maincontent"><!-- Content Container -->
  <!--TYPO3SEARCH_begin-->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['section'] = NULL;
$arguments215['partial'] = NULL;
$arguments215['delegate'] = NULL;
$arguments215['arguments'] = array (
);
$arguments215['optional'] = false;
$arguments215['default'] = NULL;
$arguments215['contentAs'] = NULL;
$arguments215['partial'] = 'Bezahlung';

$output214 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output214 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$array219 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array219);
};
$arguments217 = array();
$arguments217['value'] = NULL;

$output214 .= isset($arguments217['value']) ? $arguments217['value'] : $renderChildrenClosure218();

$output214 .= '
      ';
return $output214;
};
$arguments209 = array();
$arguments209['then'] = NULL;
$arguments209['else'] = NULL;
$arguments209['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array211 = array();
$array212 = array (
);$array211['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array212);
$array211['1'] = '==\'51\'';

$expression213 = function($context) {return (($context["node0"]) == '51');};
$arguments209['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression213(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array211)
					),
					$renderingContext
				);
$arguments209['__thenClosure'] = $renderChildrenClosure210;

$output206 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output206 .= '
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
$arguments226['partial'] = 'Detailansicht';

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
$array222['1'] = '==\'53\'';

$expression224 = function($context) {return (($context["node0"]) == '53');};
$arguments220['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression224(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array222)
					),
					$renderingContext
				);
$arguments220['__thenClosure'] = $renderChildrenClosure221;

$output206 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output206 .= '
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
$arguments237['partial'] = 'Shopsuche';

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
$array233['1'] = '==\'54\'';

$expression235 = function($context) {return (($context["node0"]) == '54');};
$arguments231['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression235(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array233)
					),
					$renderingContext
				);
$arguments231['__thenClosure'] = $renderChildrenClosure232;

$output206 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output206 .= '
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
$arguments248['partial'] = 'Shopen';

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
        <!--';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$array255 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array255);
};
$arguments253 = array();
$arguments253['value'] = NULL;

$output247 .= isset($arguments253['value']) ? $arguments253['value'] : $renderChildrenClosure254();

$output247 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$array258 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array258);
};
$arguments256 = array();
$arguments256['value'] = NULL;

$output247 .= isset($arguments256['value']) ? $arguments256['value'] : $renderChildrenClosure257();

$output247 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$array261 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array261);
};
$arguments259 = array();
$arguments259['value'] = NULL;

$output247 .= isset($arguments259['value']) ? $arguments259['value'] : $renderChildrenClosure260();

$output247 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
$array264 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array264);
};
$arguments262 = array();
$arguments262['value'] = NULL;

$output247 .= isset($arguments262['value']) ? $arguments262['value'] : $renderChildrenClosure263();

$output247 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$array267 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array267);
};
$arguments265 = array();
$arguments265['value'] = NULL;

$output247 .= isset($arguments265['value']) ? $arguments265['value'] : $renderChildrenClosure266();

$output247 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$array270 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array270);
};
$arguments268 = array();
$arguments268['value'] = NULL;

$output247 .= isset($arguments268['value']) ? $arguments268['value'] : $renderChildrenClosure269();

$output247 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$array273 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array273);
};
$arguments271 = array();
$arguments271['value'] = NULL;

$output247 .= isset($arguments271['value']) ? $arguments271['value'] : $renderChildrenClosure272();

$output247 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
$array276 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array276);
};
$arguments274 = array();
$arguments274['value'] = NULL;

$output247 .= isset($arguments274['value']) ? $arguments274['value'] : $renderChildrenClosure275();

$output247 .= '-->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
$array279 = array (
);return $renderingContext->getVariableProvider()->getByPath('product1', $array279);
};
$arguments277 = array();
$arguments277['value'] = NULL;

$output247 .= isset($arguments277['value']) ? $arguments277['value'] : $renderChildrenClosure278();

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
$array244['1'] = '==\'55\'';

$expression246 = function($context) {return (($context["node0"]) == '55');};
$arguments242['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression246(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array244)
					),
					$renderingContext
				);
$arguments242['__thenClosure'] = $renderChildrenClosure243;

$output206 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output206 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['section'] = NULL;
$arguments286['partial'] = NULL;
$arguments286['delegate'] = NULL;
$arguments286['arguments'] = array (
);
$arguments286['optional'] = false;
$arguments286['default'] = NULL;
$arguments286['contentAs'] = NULL;
$arguments286['partial'] = 'Abschliessen';

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output285 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$array290 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array290);
};
$arguments288 = array();
$arguments288['value'] = NULL;

$output285 .= isset($arguments288['value']) ? $arguments288['value'] : $renderChildrenClosure289();

$output285 .= '
      ';
return $output285;
};
$arguments280 = array();
$arguments280['then'] = NULL;
$arguments280['else'] = NULL;
$arguments280['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array282 = array();
$array283 = array (
);$array282['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array283);
$array282['1'] = '==\'56\'';

$expression284 = function($context) {return (($context["node0"]) == '56');};
$arguments280['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression284(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array282)
					),
					$renderingContext
				);
$arguments280['__thenClosure'] = $renderChildrenClosure281;

$output206 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output206 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['section'] = NULL;
$arguments297['partial'] = NULL;
$arguments297['delegate'] = NULL;
$arguments297['arguments'] = array (
);
$arguments297['optional'] = false;
$arguments297['default'] = NULL;
$arguments297['contentAs'] = NULL;
$arguments297['partial'] = 'Warenkorb';

$output296 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output296 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$array301 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array301);
};
$arguments299 = array();
$arguments299['value'] = NULL;

$output296 .= isset($arguments299['value']) ? $arguments299['value'] : $renderChildrenClosure300();

$output296 .= '
      ';
return $output296;
};
$arguments291 = array();
$arguments291['then'] = NULL;
$arguments291['else'] = NULL;
$arguments291['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array293 = array();
$array294 = array (
);$array293['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array294);
$array293['1'] = '==\'58\'';

$expression295 = function($context) {return (($context["node0"]) == '58');};
$arguments291['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression295(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array293)
					),
					$renderingContext
				);
$arguments291['__thenClosure'] = $renderChildrenClosure292;

$output206 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output206 .= '
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
$arguments308['partial'] = 'Shopsuche';

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
$array304['1'] = '==\'64\'';

$expression306 = function($context) {return (($context["node0"]) == '64');};
$arguments302['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression306(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array304)
					),
					$renderingContext
				);
$arguments302['__thenClosure'] = $renderChildrenClosure303;

$output206 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output206 .= '

    </div>
  </div>
  <!--TYPO3SEARCH_end-->
';
return $output206;
};
$arguments204 = array();
$arguments204['name'] = NULL;
$arguments204['name'] = '1spalte';

$output151 .= '';

$output151 .= '
';

return $output151;
}


}
#