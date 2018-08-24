<?php

class Standard_action_index_d3e342fdc79795bbfdd7335ee511d4751446c707 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
);return $renderingContext->getVariableProvider()->getByPath('content1', $array38);
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
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array41 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array41);
};
$arguments39 = array();
$arguments39['value'] = NULL;

$output25 .= isset($arguments39['value']) ? $arguments39['value'] : $renderChildrenClosure40();

$output25 .= '
    </div>
    <!--TYPO3SEARCH_end-->
    <div class="col-md-4">

      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['typoscriptObjectPath'] = NULL;
$arguments42['data'] = NULL;
$arguments42['currentValueKey'] = NULL;
$arguments42['table'] = '';
$arguments42['typoscriptObjectPath'] = 'lib.subnavigation';

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output25 .= '
      <!--TYPO3SEARCH_begin-->
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$array46 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array46);
};
$arguments44 = array();
$arguments44['value'] = NULL;

$output25 .= isset($arguments44['value']) ? $arguments44['value'] : $renderChildrenClosure45();

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
$output47 = '';

$output47 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['typoscriptObjectPath'] = NULL;
$arguments48['data'] = NULL;
$arguments48['currentValueKey'] = NULL;
$arguments48['table'] = '';
$arguments48['typoscriptObjectPath'] = 'lib.rootline';

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
<div class="container maincontent"><!-- Content Container -->
  <!--TYPO3SEARCH_begin-->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['section'] = NULL;
$arguments56['partial'] = NULL;
$arguments56['delegate'] = NULL;
$arguments56['arguments'] = array (
);
$arguments56['optional'] = false;
$arguments56['default'] = NULL;
$arguments56['contentAs'] = NULL;
$arguments56['partial'] = 'Bezahlung';

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$array60 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array60);
};
$arguments58 = array();
$arguments58['value'] = NULL;

$output55 .= isset($arguments58['value']) ? $arguments58['value'] : $renderChildrenClosure59();

$output55 .= '
      ';
return $output55;
};
$arguments50 = array();
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array53);
$array52['1'] = '==\'51\'';

$expression54 = function($context) {return (($context["node0"]) == '51');};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments50['__thenClosure'] = $renderChildrenClosure51;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output47 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['section'] = NULL;
$arguments67['partial'] = NULL;
$arguments67['delegate'] = NULL;
$arguments67['arguments'] = array (
);
$arguments67['optional'] = false;
$arguments67['default'] = NULL;
$arguments67['contentAs'] = NULL;
$arguments67['partial'] = 'Detailansicht';

$output66 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$array71 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array71);
};
$arguments69 = array();
$arguments69['value'] = NULL;

$output66 .= isset($arguments69['value']) ? $arguments69['value'] : $renderChildrenClosure70();

$output66 .= '
      ';
return $output66;
};
$arguments61 = array();
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array64);
$array63['1'] = '==\'53\'';

$expression65 = function($context) {return (($context["node0"]) == '53');};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression65(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments61['__thenClosure'] = $renderChildrenClosure62;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output47 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['section'] = NULL;
$arguments78['partial'] = NULL;
$arguments78['delegate'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['optional'] = false;
$arguments78['default'] = NULL;
$arguments78['contentAs'] = NULL;
$arguments78['partial'] = 'Shopsuche';

$output77 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$array82 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array82);
};
$arguments80 = array();
$arguments80['value'] = NULL;

$output77 .= isset($arguments80['value']) ? $arguments80['value'] : $renderChildrenClosure81();

$output77 .= '
      ';
return $output77;
};
$arguments72 = array();
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$arguments72['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array75);
$array74['1'] = '==\'54\'';

$expression76 = function($context) {return (($context["node0"]) == '54');};
$arguments72['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression76(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)
					),
					$renderingContext
				);
$arguments72['__thenClosure'] = $renderChildrenClosure73;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output47 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['section'] = NULL;
$arguments89['partial'] = NULL;
$arguments89['delegate'] = NULL;
$arguments89['arguments'] = array (
);
$arguments89['optional'] = false;
$arguments89['default'] = NULL;
$arguments89['contentAs'] = NULL;
$arguments89['partial'] = 'Shopen';

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$array93 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array93);
};
$arguments91 = array();
$arguments91['value'] = NULL;

$output88 .= isset($arguments91['value']) ? $arguments91['value'] : $renderChildrenClosure92();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array96 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array96);
};
$arguments94 = array();
$arguments94['value'] = NULL;

$output88 .= isset($arguments94['value']) ? $arguments94['value'] : $renderChildrenClosure95();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$array99 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array99);
};
$arguments97 = array();
$arguments97['value'] = NULL;

$output88 .= isset($arguments97['value']) ? $arguments97['value'] : $renderChildrenClosure98();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$array102 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array102);
};
$arguments100 = array();
$arguments100['value'] = NULL;

$output88 .= isset($arguments100['value']) ? $arguments100['value'] : $renderChildrenClosure101();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$array105 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array105);
};
$arguments103 = array();
$arguments103['value'] = NULL;

$output88 .= isset($arguments103['value']) ? $arguments103['value'] : $renderChildrenClosure104();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$array108 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array108);
};
$arguments106 = array();
$arguments106['value'] = NULL;

$output88 .= isset($arguments106['value']) ? $arguments106['value'] : $renderChildrenClosure107();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$array111 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array111);
};
$arguments109 = array();
$arguments109['value'] = NULL;

$output88 .= isset($arguments109['value']) ? $arguments109['value'] : $renderChildrenClosure110();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$array114 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array114);
};
$arguments112 = array();
$arguments112['value'] = NULL;

$output88 .= isset($arguments112['value']) ? $arguments112['value'] : $renderChildrenClosure113();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$array117 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array117);
};
$arguments115 = array();
$arguments115['value'] = NULL;

$output88 .= isset($arguments115['value']) ? $arguments115['value'] : $renderChildrenClosure116();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$array120 = array (
);return $renderingContext->getVariableProvider()->getByPath('product1', $array120);
};
$arguments118 = array();
$arguments118['value'] = NULL;

$output88 .= isset($arguments118['value']) ? $arguments118['value'] : $renderChildrenClosure119();

$output88 .= '
      ';
return $output88;
};
$arguments83 = array();
$arguments83['then'] = NULL;
$arguments83['else'] = NULL;
$arguments83['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array86);
$array85['1'] = '==\'55\'';

$expression87 = function($context) {return (($context["node0"]) == '55');};
$arguments83['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression87(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array85)
					),
					$renderingContext
				);
$arguments83['__thenClosure'] = $renderChildrenClosure84;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output47 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['section'] = NULL;
$arguments127['partial'] = NULL;
$arguments127['delegate'] = NULL;
$arguments127['arguments'] = array (
);
$arguments127['optional'] = false;
$arguments127['default'] = NULL;
$arguments127['contentAs'] = NULL;
$arguments127['partial'] = 'Abschliessen';

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$array131 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array131);
};
$arguments129 = array();
$arguments129['value'] = NULL;

$output126 .= isset($arguments129['value']) ? $arguments129['value'] : $renderChildrenClosure130();

$output126 .= '
      ';
return $output126;
};
$arguments121 = array();
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$arguments121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array124);
$array123['1'] = '==\'56\'';

$expression125 = function($context) {return (($context["node0"]) == '56');};
$arguments121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$arguments121['__thenClosure'] = $renderChildrenClosure122;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output47 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['section'] = NULL;
$arguments138['partial'] = NULL;
$arguments138['delegate'] = NULL;
$arguments138['arguments'] = array (
);
$arguments138['optional'] = false;
$arguments138['default'] = NULL;
$arguments138['contentAs'] = NULL;
$arguments138['partial'] = 'Warenkorb';

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$array142 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array142);
};
$arguments140 = array();
$arguments140['value'] = NULL;

$output137 .= isset($arguments140['value']) ? $arguments140['value'] : $renderChildrenClosure141();

$output137 .= '
      ';
return $output137;
};
$arguments132 = array();
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$arguments132['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array134 = array();
$array135 = array (
);$array134['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array135);
$array134['1'] = '==\'58\'';

$expression136 = function($context) {return (($context["node0"]) == '58');};
$arguments132['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)
					),
					$renderingContext
				);
$arguments132['__thenClosure'] = $renderChildrenClosure133;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output47 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['section'] = NULL;
$arguments149['partial'] = NULL;
$arguments149['delegate'] = NULL;
$arguments149['arguments'] = array (
);
$arguments149['optional'] = false;
$arguments149['default'] = NULL;
$arguments149['contentAs'] = NULL;
$arguments149['partial'] = 'Shopsuche';

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$array153 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array153);
};
$arguments151 = array();
$arguments151['value'] = NULL;

$output148 .= isset($arguments151['value']) ? $arguments151['value'] : $renderChildrenClosure152();

$output148 .= '
      ';
return $output148;
};
$arguments143 = array();
$arguments143['then'] = NULL;
$arguments143['else'] = NULL;
$arguments143['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array145 = array();
$array146 = array (
);$array145['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array146);
$array145['1'] = '==\'64\'';

$expression147 = function($context) {return (($context["node0"]) == '64');};
$arguments143['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression147(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)
					),
					$renderingContext
				);
$arguments143['__thenClosure'] = $renderChildrenClosure144;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output47 .= '

    </div>
  </div>
  <!--TYPO3SEARCH_end-->
';

return $output47;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output154 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['name'] = NULL;
$arguments155['name'] = 'Standard';

$output154 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext), ENT_QUOTES);

$output154 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
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
$arguments157 = array();
$arguments157['name'] = NULL;
$arguments157['name'] = 'Jumbotron';

$output154 .= '';

$output154 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output161 = '';

$output161 .= '
<div class="container maincontent"><!-- Content Container -->
<!-- Content Bereich Product Kategorien -->
<!--TYPO3SEARCH_BEGIN-->
  <div class="row">
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$array164 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array164);
};
$arguments162 = array();
$arguments162['value'] = NULL;

$output161 .= isset($arguments162['value']) ? $arguments162['value'] : $renderChildrenClosure163();

$output161 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$array167 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array167);
};
$arguments165 = array();
$arguments165['value'] = NULL;

$output161 .= isset($arguments165['value']) ? $arguments165['value'] : $renderChildrenClosure166();

$output161 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$array170 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array170);
};
$arguments168 = array();
$arguments168['value'] = NULL;

$output161 .= isset($arguments168['value']) ? $arguments168['value'] : $renderChildrenClosure169();

$output161 .= '
    </div>
  </div>
  <!-- Content Bereich ueber ganze Breite -->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$array173 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array173);
};
$arguments171 = array();
$arguments171['value'] = NULL;

$output161 .= isset($arguments171['value']) ? $arguments171['value'] : $renderChildrenClosure172();

$output161 .= '
    </div>
  </div>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$array176 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array176);
};
$arguments174 = array();
$arguments174['value'] = NULL;

$output161 .= isset($arguments174['value']) ? $arguments174['value'] : $renderChildrenClosure175();

$output161 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$array179 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array179);
};
$arguments177 = array();
$arguments177['value'] = NULL;

$output161 .= isset($arguments177['value']) ? $arguments177['value'] : $renderChildrenClosure178();

$output161 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$array182 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array182);
};
$arguments180 = array();
$arguments180['value'] = NULL;

$output161 .= isset($arguments180['value']) ? $arguments180['value'] : $renderChildrenClosure181();

$output161 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$array185 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array185);
};
$arguments183 = array();
$arguments183['value'] = NULL;

$output161 .= isset($arguments183['value']) ? $arguments183['value'] : $renderChildrenClosure184();

$output161 .= '
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
return $output161;
};
$arguments159 = array();
$arguments159['name'] = NULL;
$arguments159['name'] = 'Multicolumn';

$output154 .= '';

$output154 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['typoscriptObjectPath'] = NULL;
$arguments189['data'] = NULL;
$arguments189['currentValueKey'] = NULL;
$arguments189['table'] = '';
$arguments189['typoscriptObjectPath'] = 'lib.rootline';

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '

<div class="container maincontent"><!-- Content Container -->

  <div class="row">
    <!--TYPO3SEARCH_BEGIN-->
    <div class="col-md-8">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['section'] = NULL;
$arguments197['partial'] = NULL;
$arguments197['delegate'] = NULL;
$arguments197['arguments'] = array (
);
$arguments197['optional'] = false;
$arguments197['default'] = NULL;
$arguments197['contentAs'] = NULL;
$arguments197['partial'] = 'Shopkategorien';

$output196 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output196 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$array201 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array201);
};
$arguments199 = array();
$arguments199['value'] = NULL;

$output196 .= isset($arguments199['value']) ? $arguments199['value'] : $renderChildrenClosure200();

$output196 .= '
      ';
return $output196;
};
$arguments191 = array();
$arguments191['then'] = NULL;
$arguments191['else'] = NULL;
$arguments191['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array193 = array();
$array194 = array (
);$array193['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array194);
$array193['1'] = '==\'52\'';

$expression195 = function($context) {return (($context["node0"]) == '52');};
$arguments191['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression195(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array193)
					),
					$renderingContext
				);
$arguments191['__thenClosure'] = $renderChildrenClosure192;

$output188 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output188 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$array204 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array204);
};
$arguments202 = array();
$arguments202['value'] = NULL;

$output188 .= isset($arguments202['value']) ? $arguments202['value'] : $renderChildrenClosure203();

$output188 .= '
    </div>
    <!--TYPO3SEARCH_end-->
    <div class="col-md-4">

      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['typoscriptObjectPath'] = NULL;
$arguments205['data'] = NULL;
$arguments205['currentValueKey'] = NULL;
$arguments205['table'] = '';
$arguments205['typoscriptObjectPath'] = 'lib.subnavigation';

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output188 .= '
      <!--TYPO3SEARCH_begin-->
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$array209 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array209);
};
$arguments207 = array();
$arguments207['value'] = NULL;

$output188 .= isset($arguments207['value']) ? $arguments207['value'] : $renderChildrenClosure208();

$output188 .= '
      <!--TYPO3SEARCH_end-->
   </div>
  </div>

';
return $output188;
};
$arguments186 = array();
$arguments186['name'] = NULL;
$arguments186['name'] = '2spalten';

$output154 .= '';

$output154 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['typoscriptObjectPath'] = NULL;
$arguments213['data'] = NULL;
$arguments213['currentValueKey'] = NULL;
$arguments213['table'] = '';
$arguments213['typoscriptObjectPath'] = 'lib.rootline';

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output212 .= '
<div class="container maincontent"><!-- Content Container -->
  <!--TYPO3SEARCH_begin-->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['section'] = NULL;
$arguments221['partial'] = NULL;
$arguments221['delegate'] = NULL;
$arguments221['arguments'] = array (
);
$arguments221['optional'] = false;
$arguments221['default'] = NULL;
$arguments221['contentAs'] = NULL;
$arguments221['partial'] = 'Bezahlung';

$output220 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output220 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$array225 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array225);
};
$arguments223 = array();
$arguments223['value'] = NULL;

$output220 .= isset($arguments223['value']) ? $arguments223['value'] : $renderChildrenClosure224();

$output220 .= '
      ';
return $output220;
};
$arguments215 = array();
$arguments215['then'] = NULL;
$arguments215['else'] = NULL;
$arguments215['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array217 = array();
$array218 = array (
);$array217['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array218);
$array217['1'] = '==\'51\'';

$expression219 = function($context) {return (($context["node0"]) == '51');};
$arguments215['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression219(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array217)
					),
					$renderingContext
				);
$arguments215['__thenClosure'] = $renderChildrenClosure216;

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output212 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['section'] = NULL;
$arguments232['partial'] = NULL;
$arguments232['delegate'] = NULL;
$arguments232['arguments'] = array (
);
$arguments232['optional'] = false;
$arguments232['default'] = NULL;
$arguments232['contentAs'] = NULL;
$arguments232['partial'] = 'Detailansicht';

$output231 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output231 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$array236 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array236);
};
$arguments234 = array();
$arguments234['value'] = NULL;

$output231 .= isset($arguments234['value']) ? $arguments234['value'] : $renderChildrenClosure235();

$output231 .= '
      ';
return $output231;
};
$arguments226 = array();
$arguments226['then'] = NULL;
$arguments226['else'] = NULL;
$arguments226['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array228 = array();
$array229 = array (
);$array228['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array229);
$array228['1'] = '==\'53\'';

$expression230 = function($context) {return (($context["node0"]) == '53');};
$arguments226['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression230(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array228)
					),
					$renderingContext
				);
$arguments226['__thenClosure'] = $renderChildrenClosure227;

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output212 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['section'] = NULL;
$arguments243['partial'] = NULL;
$arguments243['delegate'] = NULL;
$arguments243['arguments'] = array (
);
$arguments243['optional'] = false;
$arguments243['default'] = NULL;
$arguments243['contentAs'] = NULL;
$arguments243['partial'] = 'Shopsuche';

$output242 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output242 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$array247 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array247);
};
$arguments245 = array();
$arguments245['value'] = NULL;

$output242 .= isset($arguments245['value']) ? $arguments245['value'] : $renderChildrenClosure246();

$output242 .= '
      ';
return $output242;
};
$arguments237 = array();
$arguments237['then'] = NULL;
$arguments237['else'] = NULL;
$arguments237['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array239 = array();
$array240 = array (
);$array239['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array240);
$array239['1'] = '==\'54\'';

$expression241 = function($context) {return (($context["node0"]) == '54');};
$arguments237['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression241(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array239)
					),
					$renderingContext
				);
$arguments237['__thenClosure'] = $renderChildrenClosure238;

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output212 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
$output253 = '';

$output253 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments254 = array();
$arguments254['section'] = NULL;
$arguments254['partial'] = NULL;
$arguments254['delegate'] = NULL;
$arguments254['arguments'] = array (
);
$arguments254['optional'] = false;
$arguments254['default'] = NULL;
$arguments254['contentAs'] = NULL;
$arguments254['partial'] = 'Shopen';

$output253 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output253 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$array258 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array258);
};
$arguments256 = array();
$arguments256['value'] = NULL;

$output253 .= isset($arguments256['value']) ? $arguments256['value'] : $renderChildrenClosure257();

$output253 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$array261 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array261);
};
$arguments259 = array();
$arguments259['value'] = NULL;

$output253 .= isset($arguments259['value']) ? $arguments259['value'] : $renderChildrenClosure260();

$output253 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
$array264 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array264);
};
$arguments262 = array();
$arguments262['value'] = NULL;

$output253 .= isset($arguments262['value']) ? $arguments262['value'] : $renderChildrenClosure263();

$output253 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$array267 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array267);
};
$arguments265 = array();
$arguments265['value'] = NULL;

$output253 .= isset($arguments265['value']) ? $arguments265['value'] : $renderChildrenClosure266();

$output253 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$array270 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array270);
};
$arguments268 = array();
$arguments268['value'] = NULL;

$output253 .= isset($arguments268['value']) ? $arguments268['value'] : $renderChildrenClosure269();

$output253 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$array273 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array273);
};
$arguments271 = array();
$arguments271['value'] = NULL;

$output253 .= isset($arguments271['value']) ? $arguments271['value'] : $renderChildrenClosure272();

$output253 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
$array276 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array276);
};
$arguments274 = array();
$arguments274['value'] = NULL;

$output253 .= isset($arguments274['value']) ? $arguments274['value'] : $renderChildrenClosure275();

$output253 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
$array279 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array279);
};
$arguments277 = array();
$arguments277['value'] = NULL;

$output253 .= isset($arguments277['value']) ? $arguments277['value'] : $renderChildrenClosure278();

$output253 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$array282 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array282);
};
$arguments280 = array();
$arguments280['value'] = NULL;

$output253 .= isset($arguments280['value']) ? $arguments280['value'] : $renderChildrenClosure281();

$output253 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$array285 = array (
);return $renderingContext->getVariableProvider()->getByPath('product1', $array285);
};
$arguments283 = array();
$arguments283['value'] = NULL;

$output253 .= isset($arguments283['value']) ? $arguments283['value'] : $renderChildrenClosure284();

$output253 .= '
      ';
return $output253;
};
$arguments248 = array();
$arguments248['then'] = NULL;
$arguments248['else'] = NULL;
$arguments248['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array250 = array();
$array251 = array (
);$array250['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array251);
$array250['1'] = '==\'55\'';

$expression252 = function($context) {return (($context["node0"]) == '55');};
$arguments248['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression252(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array250)
					),
					$renderingContext
				);
$arguments248['__thenClosure'] = $renderChildrenClosure249;

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output212 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$output291 = '';

$output291 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments292 = array();
$arguments292['section'] = NULL;
$arguments292['partial'] = NULL;
$arguments292['delegate'] = NULL;
$arguments292['arguments'] = array (
);
$arguments292['optional'] = false;
$arguments292['default'] = NULL;
$arguments292['contentAs'] = NULL;
$arguments292['partial'] = 'Abschliessen';

$output291 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output291 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$array296 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array296);
};
$arguments294 = array();
$arguments294['value'] = NULL;

$output291 .= isset($arguments294['value']) ? $arguments294['value'] : $renderChildrenClosure295();

$output291 .= '
      ';
return $output291;
};
$arguments286 = array();
$arguments286['then'] = NULL;
$arguments286['else'] = NULL;
$arguments286['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array288 = array();
$array289 = array (
);$array288['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array289);
$array288['1'] = '==\'56\'';

$expression290 = function($context) {return (($context["node0"]) == '56');};
$arguments286['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression290(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array288)
					),
					$renderingContext
				);
$arguments286['__thenClosure'] = $renderChildrenClosure287;

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output212 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments303 = array();
$arguments303['section'] = NULL;
$arguments303['partial'] = NULL;
$arguments303['delegate'] = NULL;
$arguments303['arguments'] = array (
);
$arguments303['optional'] = false;
$arguments303['default'] = NULL;
$arguments303['contentAs'] = NULL;
$arguments303['partial'] = 'Warenkorb';

$output302 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output302 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$array307 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array307);
};
$arguments305 = array();
$arguments305['value'] = NULL;

$output302 .= isset($arguments305['value']) ? $arguments305['value'] : $renderChildrenClosure306();

$output302 .= '
      ';
return $output302;
};
$arguments297 = array();
$arguments297['then'] = NULL;
$arguments297['else'] = NULL;
$arguments297['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array299 = array();
$array300 = array (
);$array299['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array300);
$array299['1'] = '==\'58\'';

$expression301 = function($context) {return (($context["node0"]) == '58');};
$arguments297['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression301(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array299)
					),
					$renderingContext
				);
$arguments297['__thenClosure'] = $renderChildrenClosure298;

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output212 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$output313 = '';

$output313 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['section'] = NULL;
$arguments314['partial'] = NULL;
$arguments314['delegate'] = NULL;
$arguments314['arguments'] = array (
);
$arguments314['optional'] = false;
$arguments314['default'] = NULL;
$arguments314['contentAs'] = NULL;
$arguments314['partial'] = 'Shopsuche';

$output313 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output313 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$array318 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array318);
};
$arguments316 = array();
$arguments316['value'] = NULL;

$output313 .= isset($arguments316['value']) ? $arguments316['value'] : $renderChildrenClosure317();

$output313 .= '
      ';
return $output313;
};
$arguments308 = array();
$arguments308['then'] = NULL;
$arguments308['else'] = NULL;
$arguments308['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array310 = array();
$array311 = array (
);$array310['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array311);
$array310['1'] = '==\'64\'';

$expression312 = function($context) {return (($context["node0"]) == '64');};
$arguments308['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression312(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array310)
					),
					$renderingContext
				);
$arguments308['__thenClosure'] = $renderChildrenClosure309;

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output212 .= '

    </div>
  </div>
  <!--TYPO3SEARCH_end-->
';
return $output212;
};
$arguments210 = array();
$arguments210['name'] = NULL;
$arguments210['name'] = '1spalte';

$output154 .= '';

$output154 .= '
';

return $output154;
}


}
#