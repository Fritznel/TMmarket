<?php

class Standard_action_index_56257893d4498f9f891e74ddf1ae5b7e8090588a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$array44 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array44);
};
$arguments42 = array();
$arguments42['value'] = NULL;

$output25 .= isset($arguments42['value']) ? $arguments42['value'] : $renderChildrenClosure43();

$output25 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array47 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array47);
};
$arguments45 = array();
$arguments45['value'] = NULL;

$output25 .= isset($arguments45['value']) ? $arguments45['value'] : $renderChildrenClosure46();

$output25 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$array50 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array50);
};
$arguments48 = array();
$arguments48['value'] = NULL;

$output25 .= isset($arguments48['value']) ? $arguments48['value'] : $renderChildrenClosure49();

$output25 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$array53 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array53);
};
$arguments51 = array();
$arguments51['value'] = NULL;

$output25 .= isset($arguments51['value']) ? $arguments51['value'] : $renderChildrenClosure52();

$output25 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$array56 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array56);
};
$arguments54 = array();
$arguments54['value'] = NULL;

$output25 .= isset($arguments54['value']) ? $arguments54['value'] : $renderChildrenClosure55();

$output25 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$array59 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array59);
};
$arguments57 = array();
$arguments57['value'] = NULL;

$output25 .= isset($arguments57['value']) ? $arguments57['value'] : $renderChildrenClosure58();

$output25 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$array62 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array62);
};
$arguments60 = array();
$arguments60['value'] = NULL;

$output25 .= isset($arguments60['value']) ? $arguments60['value'] : $renderChildrenClosure61();

$output25 .= '
    </div>
    <!--TYPO3SEARCH_end-->
    <div class="col-md-4">

      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['typoscriptObjectPath'] = NULL;
$arguments63['data'] = NULL;
$arguments63['currentValueKey'] = NULL;
$arguments63['table'] = '';
$arguments63['typoscriptObjectPath'] = 'lib.subnavigation';

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output25 .= '
      <!--TYPO3SEARCH_begin-->
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$array67 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array67);
};
$arguments65 = array();
$arguments65['value'] = NULL;

$output25 .= isset($arguments65['value']) ? $arguments65['value'] : $renderChildrenClosure66();

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
$output68 = '';

$output68 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['typoscriptObjectPath'] = NULL;
$arguments69['data'] = NULL;
$arguments69['currentValueKey'] = NULL;
$arguments69['table'] = '';
$arguments69['typoscriptObjectPath'] = 'lib.rootline';

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output68 .= '
<div class="container maincontent"><!-- Content Container -->
  <!--TYPO3SEARCH_begin-->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['section'] = NULL;
$arguments77['partial'] = NULL;
$arguments77['delegate'] = NULL;
$arguments77['arguments'] = array (
);
$arguments77['optional'] = false;
$arguments77['default'] = NULL;
$arguments77['contentAs'] = NULL;
$arguments77['partial'] = 'Bezahlung';

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$array81 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array81);
};
$arguments79 = array();
$arguments79['value'] = NULL;

$output76 .= isset($arguments79['value']) ? $arguments79['value'] : $renderChildrenClosure80();

$output76 .= '
      ';
return $output76;
};
$arguments71 = array();
$arguments71['then'] = NULL;
$arguments71['else'] = NULL;
$arguments71['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array74);
$array73['1'] = '==\'51\'';

$expression75 = function($context) {return (($context["node0"]) == '51');};
$arguments71['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments71['__thenClosure'] = $renderChildrenClosure72;

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output68 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['section'] = NULL;
$arguments88['partial'] = NULL;
$arguments88['delegate'] = NULL;
$arguments88['arguments'] = array (
);
$arguments88['optional'] = false;
$arguments88['default'] = NULL;
$arguments88['contentAs'] = NULL;
$arguments88['partial'] = 'Detailansicht';

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$array92 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array92);
};
$arguments90 = array();
$arguments90['value'] = NULL;

$output87 .= isset($arguments90['value']) ? $arguments90['value'] : $renderChildrenClosure91();

$output87 .= '
      ';
return $output87;
};
$arguments82 = array();
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array85 = array (
);$array84['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array85);
$array84['1'] = '==\'53\'';

$expression86 = function($context) {return (($context["node0"]) == '53');};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$arguments82['__thenClosure'] = $renderChildrenClosure83;

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output68 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['section'] = NULL;
$arguments99['partial'] = NULL;
$arguments99['delegate'] = NULL;
$arguments99['arguments'] = array (
);
$arguments99['optional'] = false;
$arguments99['default'] = NULL;
$arguments99['contentAs'] = NULL;
$arguments99['partial'] = 'Shopsuche';

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$array103 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array103);
};
$arguments101 = array();
$arguments101['value'] = NULL;

$output98 .= isset($arguments101['value']) ? $arguments101['value'] : $renderChildrenClosure102();

$output98 .= '
      ';
return $output98;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array96);
$array95['1'] = '==\'54\'';

$expression97 = function($context) {return (($context["node0"]) == '54');};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['__thenClosure'] = $renderChildrenClosure94;

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output68 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['section'] = NULL;
$arguments110['partial'] = NULL;
$arguments110['delegate'] = NULL;
$arguments110['arguments'] = array (
);
$arguments110['optional'] = false;
$arguments110['default'] = NULL;
$arguments110['contentAs'] = NULL;
$arguments110['partial'] = 'Shopen';

$output109 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$array114 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array114);
};
$arguments112 = array();
$arguments112['value'] = NULL;

$output109 .= isset($arguments112['value']) ? $arguments112['value'] : $renderChildrenClosure113();

$output109 .= '
        <!--';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$array117 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array117);
};
$arguments115 = array();
$arguments115['value'] = NULL;

$output109 .= isset($arguments115['value']) ? $arguments115['value'] : $renderChildrenClosure116();

$output109 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$array120 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array120);
};
$arguments118 = array();
$arguments118['value'] = NULL;

$output109 .= isset($arguments118['value']) ? $arguments118['value'] : $renderChildrenClosure119();

$output109 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$array123 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array123);
};
$arguments121 = array();
$arguments121['value'] = NULL;

$output109 .= isset($arguments121['value']) ? $arguments121['value'] : $renderChildrenClosure122();

$output109 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$array126 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array126);
};
$arguments124 = array();
$arguments124['value'] = NULL;

$output109 .= isset($arguments124['value']) ? $arguments124['value'] : $renderChildrenClosure125();

$output109 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$array129 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array129);
};
$arguments127 = array();
$arguments127['value'] = NULL;

$output109 .= isset($arguments127['value']) ? $arguments127['value'] : $renderChildrenClosure128();

$output109 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$array132 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array132);
};
$arguments130 = array();
$arguments130['value'] = NULL;

$output109 .= isset($arguments130['value']) ? $arguments130['value'] : $renderChildrenClosure131();

$output109 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$array135 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array135);
};
$arguments133 = array();
$arguments133['value'] = NULL;

$output109 .= isset($arguments133['value']) ? $arguments133['value'] : $renderChildrenClosure134();

$output109 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$array138 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array138);
};
$arguments136 = array();
$arguments136['value'] = NULL;

$output109 .= isset($arguments136['value']) ? $arguments136['value'] : $renderChildrenClosure137();

$output109 .= '-->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$array141 = array (
);return $renderingContext->getVariableProvider()->getByPath('product1', $array141);
};
$arguments139 = array();
$arguments139['value'] = NULL;

$output109 .= isset($arguments139['value']) ? $arguments139['value'] : $renderChildrenClosure140();

$output109 .= '
      ';
return $output109;
};
$arguments104 = array();
$arguments104['then'] = NULL;
$arguments104['else'] = NULL;
$arguments104['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array106 = array();
$array107 = array (
);$array106['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array107);
$array106['1'] = '==\'55\'';

$expression108 = function($context) {return (($context["node0"]) == '55');};
$arguments104['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression108(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array106)
					),
					$renderingContext
				);
$arguments104['__thenClosure'] = $renderChildrenClosure105;

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output68 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['section'] = NULL;
$arguments148['partial'] = NULL;
$arguments148['delegate'] = NULL;
$arguments148['arguments'] = array (
);
$arguments148['optional'] = false;
$arguments148['default'] = NULL;
$arguments148['contentAs'] = NULL;
$arguments148['partial'] = 'Abschliessen';

$output147 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$array152 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array152);
};
$arguments150 = array();
$arguments150['value'] = NULL;

$output147 .= isset($arguments150['value']) ? $arguments150['value'] : $renderChildrenClosure151();

$output147 .= '
      ';
return $output147;
};
$arguments142 = array();
$arguments142['then'] = NULL;
$arguments142['else'] = NULL;
$arguments142['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array144 = array();
$array145 = array (
);$array144['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array145);
$array144['1'] = '==\'56\'';

$expression146 = function($context) {return (($context["node0"]) == '56');};
$arguments142['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array144)
					),
					$renderingContext
				);
$arguments142['__thenClosure'] = $renderChildrenClosure143;

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output68 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['section'] = NULL;
$arguments159['partial'] = NULL;
$arguments159['delegate'] = NULL;
$arguments159['arguments'] = array (
);
$arguments159['optional'] = false;
$arguments159['default'] = NULL;
$arguments159['contentAs'] = NULL;
$arguments159['partial'] = 'Warenkorb';

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$array163 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array163);
};
$arguments161 = array();
$arguments161['value'] = NULL;

$output158 .= isset($arguments161['value']) ? $arguments161['value'] : $renderChildrenClosure162();

$output158 .= '
      ';
return $output158;
};
$arguments153 = array();
$arguments153['then'] = NULL;
$arguments153['else'] = NULL;
$arguments153['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array155 = array();
$array156 = array (
);$array155['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array156);
$array155['1'] = '==\'58\'';

$expression157 = function($context) {return (($context["node0"]) == '58');};
$arguments153['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression157(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);
$arguments153['__thenClosure'] = $renderChildrenClosure154;

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output68 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output169 = '';

$output169 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['section'] = NULL;
$arguments170['partial'] = NULL;
$arguments170['delegate'] = NULL;
$arguments170['arguments'] = array (
);
$arguments170['optional'] = false;
$arguments170['default'] = NULL;
$arguments170['contentAs'] = NULL;
$arguments170['partial'] = 'Shopsuche';

$output169 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output169 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$array174 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array174);
};
$arguments172 = array();
$arguments172['value'] = NULL;

$output169 .= isset($arguments172['value']) ? $arguments172['value'] : $renderChildrenClosure173();

$output169 .= '
      ';
return $output169;
};
$arguments164 = array();
$arguments164['then'] = NULL;
$arguments164['else'] = NULL;
$arguments164['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array166 = array();
$array167 = array (
);$array166['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array167);
$array166['1'] = '==\'64\'';

$expression168 = function($context) {return (($context["node0"]) == '64');};
$arguments164['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression168(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array166)
					),
					$renderingContext
				);
$arguments164['__thenClosure'] = $renderChildrenClosure165;

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output68 .= '

    </div>
  </div>
  <!--TYPO3SEARCH_end-->
';

return $output68;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output175 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['name'] = NULL;
$arguments176['name'] = 'Standard';

$output175 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext), ENT_QUOTES);

$output175 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
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
$arguments178 = array();
$arguments178['name'] = NULL;
$arguments178['name'] = 'Jumbotron';

$output175 .= '';

$output175 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
<div class="container maincontent"><!-- Content Container -->
<!-- Content Bereich Product Kategorien -->
<!--TYPO3SEARCH_BEGIN-->
  <div class="row">
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$array185 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array185);
};
$arguments183 = array();
$arguments183['value'] = NULL;

$output182 .= isset($arguments183['value']) ? $arguments183['value'] : $renderChildrenClosure184();

$output182 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$array188 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array188);
};
$arguments186 = array();
$arguments186['value'] = NULL;

$output182 .= isset($arguments186['value']) ? $arguments186['value'] : $renderChildrenClosure187();

$output182 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$array191 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array191);
};
$arguments189 = array();
$arguments189['value'] = NULL;

$output182 .= isset($arguments189['value']) ? $arguments189['value'] : $renderChildrenClosure190();

$output182 .= '
    </div>
  </div>
  <!-- Content Bereich ueber ganze Breite -->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$array194 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array194);
};
$arguments192 = array();
$arguments192['value'] = NULL;

$output182 .= isset($arguments192['value']) ? $arguments192['value'] : $renderChildrenClosure193();

$output182 .= '
    </div>
  </div>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$array197 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array197);
};
$arguments195 = array();
$arguments195['value'] = NULL;

$output182 .= isset($arguments195['value']) ? $arguments195['value'] : $renderChildrenClosure196();

$output182 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$array200 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array200);
};
$arguments198 = array();
$arguments198['value'] = NULL;

$output182 .= isset($arguments198['value']) ? $arguments198['value'] : $renderChildrenClosure199();

$output182 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$array203 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array203);
};
$arguments201 = array();
$arguments201['value'] = NULL;

$output182 .= isset($arguments201['value']) ? $arguments201['value'] : $renderChildrenClosure202();

$output182 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$array206 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array206);
};
$arguments204 = array();
$arguments204['value'] = NULL;

$output182 .= isset($arguments204['value']) ? $arguments204['value'] : $renderChildrenClosure205();

$output182 .= '
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
return $output182;
};
$arguments180 = array();
$arguments180['name'] = NULL;
$arguments180['name'] = 'Multicolumn';

$output175 .= '';

$output175 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
<!-- Rootline -->
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
$arguments210['typoscriptObjectPath'] = 'lib.rootline';

$output209 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output209 .= '

<div class="container maincontent"><!-- Content Container -->

  <div class="row">
    <!--TYPO3SEARCH_BEGIN-->
    <div class="col-md-8">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$output217 = '';

$output217 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['section'] = NULL;
$arguments218['partial'] = NULL;
$arguments218['delegate'] = NULL;
$arguments218['arguments'] = array (
);
$arguments218['optional'] = false;
$arguments218['default'] = NULL;
$arguments218['contentAs'] = NULL;
$arguments218['partial'] = 'Shopkategorien';

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output217 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$array222 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array222);
};
$arguments220 = array();
$arguments220['value'] = NULL;

$output217 .= isset($arguments220['value']) ? $arguments220['value'] : $renderChildrenClosure221();

$output217 .= '
      ';
return $output217;
};
$arguments212 = array();
$arguments212['then'] = NULL;
$arguments212['else'] = NULL;
$arguments212['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array214 = array();
$array215 = array (
);$array214['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array215);
$array214['1'] = '==\'52\'';

$expression216 = function($context) {return (($context["node0"]) == '52');};
$arguments212['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression216(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array214)
					),
					$renderingContext
				);
$arguments212['__thenClosure'] = $renderChildrenClosure213;

$output209 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output209 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$array225 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array225);
};
$arguments223 = array();
$arguments223['value'] = NULL;

$output209 .= isset($arguments223['value']) ? $arguments223['value'] : $renderChildrenClosure224();

$output209 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$array228 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array228);
};
$arguments226 = array();
$arguments226['value'] = NULL;

$output209 .= isset($arguments226['value']) ? $arguments226['value'] : $renderChildrenClosure227();

$output209 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$array231 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array231);
};
$arguments229 = array();
$arguments229['value'] = NULL;

$output209 .= isset($arguments229['value']) ? $arguments229['value'] : $renderChildrenClosure230();

$output209 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
$array234 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array234);
};
$arguments232 = array();
$arguments232['value'] = NULL;

$output209 .= isset($arguments232['value']) ? $arguments232['value'] : $renderChildrenClosure233();

$output209 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$array237 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array237);
};
$arguments235 = array();
$arguments235['value'] = NULL;

$output209 .= isset($arguments235['value']) ? $arguments235['value'] : $renderChildrenClosure236();

$output209 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$array240 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array240);
};
$arguments238 = array();
$arguments238['value'] = NULL;

$output209 .= isset($arguments238['value']) ? $arguments238['value'] : $renderChildrenClosure239();

$output209 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$array243 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array243);
};
$arguments241 = array();
$arguments241['value'] = NULL;

$output209 .= isset($arguments241['value']) ? $arguments241['value'] : $renderChildrenClosure242();

$output209 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$array246 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array246);
};
$arguments244 = array();
$arguments244['value'] = NULL;

$output209 .= isset($arguments244['value']) ? $arguments244['value'] : $renderChildrenClosure245();

$output209 .= '
    </div>
    <!--TYPO3SEARCH_end-->
    <div class="col-md-4">

      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();
$arguments247['typoscriptObjectPath'] = NULL;
$arguments247['data'] = NULL;
$arguments247['currentValueKey'] = NULL;
$arguments247['table'] = '';
$arguments247['typoscriptObjectPath'] = 'lib.subnavigation';

$output209 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output209 .= '
      <!--TYPO3SEARCH_begin-->
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$array251 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array251);
};
$arguments249 = array();
$arguments249['value'] = NULL;

$output209 .= isset($arguments249['value']) ? $arguments249['value'] : $renderChildrenClosure250();

$output209 .= '
      <!--TYPO3SEARCH_end-->
   </div>
  </div>

';
return $output209;
};
$arguments207 = array();
$arguments207['name'] = NULL;
$arguments207['name'] = '2spalten';

$output175 .= '';

$output175 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$output254 = '';

$output254 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments255 = array();
$arguments255['typoscriptObjectPath'] = NULL;
$arguments255['data'] = NULL;
$arguments255['currentValueKey'] = NULL;
$arguments255['table'] = '';
$arguments255['typoscriptObjectPath'] = 'lib.rootline';

$output254 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output254 .= '
<div class="container maincontent"><!-- Content Container -->
  <!--TYPO3SEARCH_begin-->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments263 = array();
$arguments263['section'] = NULL;
$arguments263['partial'] = NULL;
$arguments263['delegate'] = NULL;
$arguments263['arguments'] = array (
);
$arguments263['optional'] = false;
$arguments263['default'] = NULL;
$arguments263['contentAs'] = NULL;
$arguments263['partial'] = 'Bezahlung';

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output262 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$array267 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array267);
};
$arguments265 = array();
$arguments265['value'] = NULL;

$output262 .= isset($arguments265['value']) ? $arguments265['value'] : $renderChildrenClosure266();

$output262 .= '
      ';
return $output262;
};
$arguments257 = array();
$arguments257['then'] = NULL;
$arguments257['else'] = NULL;
$arguments257['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array259 = array();
$array260 = array (
);$array259['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array260);
$array259['1'] = '==\'51\'';

$expression261 = function($context) {return (($context["node0"]) == '51');};
$arguments257['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression261(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array259)
					),
					$renderingContext
				);
$arguments257['__thenClosure'] = $renderChildrenClosure258;

$output254 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output254 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$output273 = '';

$output273 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments274 = array();
$arguments274['section'] = NULL;
$arguments274['partial'] = NULL;
$arguments274['delegate'] = NULL;
$arguments274['arguments'] = array (
);
$arguments274['optional'] = false;
$arguments274['default'] = NULL;
$arguments274['contentAs'] = NULL;
$arguments274['partial'] = 'Detailansicht';

$output273 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output273 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$array278 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array278);
};
$arguments276 = array();
$arguments276['value'] = NULL;

$output273 .= isset($arguments276['value']) ? $arguments276['value'] : $renderChildrenClosure277();

$output273 .= '
      ';
return $output273;
};
$arguments268 = array();
$arguments268['then'] = NULL;
$arguments268['else'] = NULL;
$arguments268['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array270 = array();
$array271 = array (
);$array270['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array271);
$array270['1'] = '==\'53\'';

$expression272 = function($context) {return (($context["node0"]) == '53');};
$arguments268['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression272(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array270)
					),
					$renderingContext
				);
$arguments268['__thenClosure'] = $renderChildrenClosure269;

$output254 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output254 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$output284 = '';

$output284 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments285 = array();
$arguments285['section'] = NULL;
$arguments285['partial'] = NULL;
$arguments285['delegate'] = NULL;
$arguments285['arguments'] = array (
);
$arguments285['optional'] = false;
$arguments285['default'] = NULL;
$arguments285['contentAs'] = NULL;
$arguments285['partial'] = 'Shopsuche';

$output284 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output284 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$array289 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array289);
};
$arguments287 = array();
$arguments287['value'] = NULL;

$output284 .= isset($arguments287['value']) ? $arguments287['value'] : $renderChildrenClosure288();

$output284 .= '
      ';
return $output284;
};
$arguments279 = array();
$arguments279['then'] = NULL;
$arguments279['else'] = NULL;
$arguments279['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array281 = array();
$array282 = array (
);$array281['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array282);
$array281['1'] = '==\'54\'';

$expression283 = function($context) {return (($context["node0"]) == '54');};
$arguments279['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression283(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array281)
					),
					$renderingContext
				);
$arguments279['__thenClosure'] = $renderChildrenClosure280;

$output254 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output254 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$output295 = '';

$output295 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments296 = array();
$arguments296['section'] = NULL;
$arguments296['partial'] = NULL;
$arguments296['delegate'] = NULL;
$arguments296['arguments'] = array (
);
$arguments296['optional'] = false;
$arguments296['default'] = NULL;
$arguments296['contentAs'] = NULL;
$arguments296['partial'] = 'Shopen';

$output295 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output295 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$array300 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array300);
};
$arguments298 = array();
$arguments298['value'] = NULL;

$output295 .= isset($arguments298['value']) ? $arguments298['value'] : $renderChildrenClosure299();

$output295 .= '
        <!--';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
$array303 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array303);
};
$arguments301 = array();
$arguments301['value'] = NULL;

$output295 .= isset($arguments301['value']) ? $arguments301['value'] : $renderChildrenClosure302();

$output295 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
$array306 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array306);
};
$arguments304 = array();
$arguments304['value'] = NULL;

$output295 .= isset($arguments304['value']) ? $arguments304['value'] : $renderChildrenClosure305();

$output295 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$array309 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array309);
};
$arguments307 = array();
$arguments307['value'] = NULL;

$output295 .= isset($arguments307['value']) ? $arguments307['value'] : $renderChildrenClosure308();

$output295 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$array312 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array312);
};
$arguments310 = array();
$arguments310['value'] = NULL;

$output295 .= isset($arguments310['value']) ? $arguments310['value'] : $renderChildrenClosure311();

$output295 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$array315 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array315);
};
$arguments313 = array();
$arguments313['value'] = NULL;

$output295 .= isset($arguments313['value']) ? $arguments313['value'] : $renderChildrenClosure314();

$output295 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$array318 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array318);
};
$arguments316 = array();
$arguments316['value'] = NULL;

$output295 .= isset($arguments316['value']) ? $arguments316['value'] : $renderChildrenClosure317();

$output295 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
$array321 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array321);
};
$arguments319 = array();
$arguments319['value'] = NULL;

$output295 .= isset($arguments319['value']) ? $arguments319['value'] : $renderChildrenClosure320();

$output295 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$array324 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array324);
};
$arguments322 = array();
$arguments322['value'] = NULL;

$output295 .= isset($arguments322['value']) ? $arguments322['value'] : $renderChildrenClosure323();

$output295 .= '-->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$array327 = array (
);return $renderingContext->getVariableProvider()->getByPath('product1', $array327);
};
$arguments325 = array();
$arguments325['value'] = NULL;

$output295 .= isset($arguments325['value']) ? $arguments325['value'] : $renderChildrenClosure326();

$output295 .= '
      ';
return $output295;
};
$arguments290 = array();
$arguments290['then'] = NULL;
$arguments290['else'] = NULL;
$arguments290['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array292 = array();
$array293 = array (
);$array292['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array293);
$array292['1'] = '==\'55\'';

$expression294 = function($context) {return (($context["node0"]) == '55');};
$arguments290['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression294(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array292)
					),
					$renderingContext
				);
$arguments290['__thenClosure'] = $renderChildrenClosure291;

$output254 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output254 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['section'] = NULL;
$arguments334['partial'] = NULL;
$arguments334['delegate'] = NULL;
$arguments334['arguments'] = array (
);
$arguments334['optional'] = false;
$arguments334['default'] = NULL;
$arguments334['contentAs'] = NULL;
$arguments334['partial'] = 'Abschliessen';

$output333 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);

$output333 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
$array338 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array338);
};
$arguments336 = array();
$arguments336['value'] = NULL;

$output333 .= isset($arguments336['value']) ? $arguments336['value'] : $renderChildrenClosure337();

$output333 .= '
      ';
return $output333;
};
$arguments328 = array();
$arguments328['then'] = NULL;
$arguments328['else'] = NULL;
$arguments328['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array330 = array();
$array331 = array (
);$array330['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array331);
$array330['1'] = '==\'56\'';

$expression332 = function($context) {return (($context["node0"]) == '56');};
$arguments328['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression332(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array330)
					),
					$renderingContext
				);
$arguments328['__thenClosure'] = $renderChildrenClosure329;

$output254 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output254 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$output344 = '';

$output344 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments345 = array();
$arguments345['section'] = NULL;
$arguments345['partial'] = NULL;
$arguments345['delegate'] = NULL;
$arguments345['arguments'] = array (
);
$arguments345['optional'] = false;
$arguments345['default'] = NULL;
$arguments345['contentAs'] = NULL;
$arguments345['partial'] = 'Warenkorb';

$output344 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output344 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$array349 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array349);
};
$arguments347 = array();
$arguments347['value'] = NULL;

$output344 .= isset($arguments347['value']) ? $arguments347['value'] : $renderChildrenClosure348();

$output344 .= '
      ';
return $output344;
};
$arguments339 = array();
$arguments339['then'] = NULL;
$arguments339['else'] = NULL;
$arguments339['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array341 = array();
$array342 = array (
);$array341['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array342);
$array341['1'] = '==\'58\'';

$expression343 = function($context) {return (($context["node0"]) == '58');};
$arguments339['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression343(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array341)
					),
					$renderingContext
				);
$arguments339['__thenClosure'] = $renderChildrenClosure340;

$output254 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output254 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
$output355 = '';

$output355 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments356 = array();
$arguments356['section'] = NULL;
$arguments356['partial'] = NULL;
$arguments356['delegate'] = NULL;
$arguments356['arguments'] = array (
);
$arguments356['optional'] = false;
$arguments356['default'] = NULL;
$arguments356['contentAs'] = NULL;
$arguments356['partial'] = 'Shopsuche';

$output355 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output355 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$array360 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array360);
};
$arguments358 = array();
$arguments358['value'] = NULL;

$output355 .= isset($arguments358['value']) ? $arguments358['value'] : $renderChildrenClosure359();

$output355 .= '
      ';
return $output355;
};
$arguments350 = array();
$arguments350['then'] = NULL;
$arguments350['else'] = NULL;
$arguments350['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array352 = array();
$array353 = array (
);$array352['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array353);
$array352['1'] = '==\'64\'';

$expression354 = function($context) {return (($context["node0"]) == '64');};
$arguments350['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression354(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array352)
					),
					$renderingContext
				);
$arguments350['__thenClosure'] = $renderChildrenClosure351;

$output254 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output254 .= '

    </div>
  </div>
  <!--TYPO3SEARCH_end-->
';
return $output254;
};
$arguments252 = array();
$arguments252['name'] = NULL;
$arguments252['name'] = '1spalte';

$output175 .= '';

$output175 .= '
';

return $output175;
}


}
#