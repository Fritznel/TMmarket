<?php

class Standard_action_index_c2dcaba8c170dfda3919ad631e60f2bd7566e83d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments34['partial'] = 'Shopen';

$output33 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['section'] = NULL;
$arguments36['partial'] = NULL;
$arguments36['delegate'] = NULL;
$arguments36['arguments'] = array (
);
$arguments36['optional'] = false;
$arguments36['default'] = NULL;
$arguments36['contentAs'] = NULL;
$arguments36['partial'] = 'Shopkategorien';

$output33 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output33 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$array40 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array40);
};
$arguments38 = array();
$arguments38['value'] = NULL;

$output33 .= isset($arguments38['value']) ? $arguments38['value'] : $renderChildrenClosure39();

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
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$array43 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array43);
};
$arguments41 = array();
$arguments41['value'] = NULL;

$output25 .= isset($arguments41['value']) ? $arguments41['value'] : $renderChildrenClosure42();

$output25 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$array46 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array46);
};
$arguments44 = array();
$arguments44['value'] = NULL;

$output25 .= isset($arguments44['value']) ? $arguments44['value'] : $renderChildrenClosure45();

$output25 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$array49 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array49);
};
$arguments47 = array();
$arguments47['value'] = NULL;

$output25 .= isset($arguments47['value']) ? $arguments47['value'] : $renderChildrenClosure48();

$output25 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$array52 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array52);
};
$arguments50 = array();
$arguments50['value'] = NULL;

$output25 .= isset($arguments50['value']) ? $arguments50['value'] : $renderChildrenClosure51();

$output25 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$array55 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array55);
};
$arguments53 = array();
$arguments53['value'] = NULL;

$output25 .= isset($arguments53['value']) ? $arguments53['value'] : $renderChildrenClosure54();

$output25 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$array58 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array58);
};
$arguments56 = array();
$arguments56['value'] = NULL;

$output25 .= isset($arguments56['value']) ? $arguments56['value'] : $renderChildrenClosure57();

$output25 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$array61 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array61);
};
$arguments59 = array();
$arguments59['value'] = NULL;

$output25 .= isset($arguments59['value']) ? $arguments59['value'] : $renderChildrenClosure60();

$output25 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$array64 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array64);
};
$arguments62 = array();
$arguments62['value'] = NULL;

$output25 .= isset($arguments62['value']) ? $arguments62['value'] : $renderChildrenClosure63();

$output25 .= '
    </div>
    <!--TYPO3SEARCH_end-->
    <div class="col-md-4">

      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['typoscriptObjectPath'] = NULL;
$arguments65['data'] = NULL;
$arguments65['currentValueKey'] = NULL;
$arguments65['table'] = '';
$arguments65['typoscriptObjectPath'] = 'lib.subnavigation';

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output25 .= '
      <!--TYPO3SEARCH_begin-->
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$array69 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array69);
};
$arguments67 = array();
$arguments67['value'] = NULL;

$output25 .= isset($arguments67['value']) ? $arguments67['value'] : $renderChildrenClosure68();

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
$output70 = '';

$output70 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['typoscriptObjectPath'] = NULL;
$arguments71['data'] = NULL;
$arguments71['currentValueKey'] = NULL;
$arguments71['table'] = '';
$arguments71['typoscriptObjectPath'] = 'lib.rootline';

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
<div class="container maincontent"><!-- Content Container -->
  <!--TYPO3SEARCH_begin-->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['section'] = NULL;
$arguments79['partial'] = NULL;
$arguments79['delegate'] = NULL;
$arguments79['arguments'] = array (
);
$arguments79['optional'] = false;
$arguments79['default'] = NULL;
$arguments79['contentAs'] = NULL;
$arguments79['partial'] = 'Bezahlung';

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$array83 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array83);
};
$arguments81 = array();
$arguments81['value'] = NULL;

$output78 .= isset($arguments81['value']) ? $arguments81['value'] : $renderChildrenClosure82();

$output78 .= '
      ';
return $output78;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array76);
$array75['1'] = '==\'51\'';

$expression77 = function($context) {return (($context["node0"]) == '51');};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = $renderChildrenClosure74;

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output70 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['section'] = NULL;
$arguments90['partial'] = NULL;
$arguments90['delegate'] = NULL;
$arguments90['arguments'] = array (
);
$arguments90['optional'] = false;
$arguments90['default'] = NULL;
$arguments90['contentAs'] = NULL;
$arguments90['partial'] = 'Detailansicht';

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$array94 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array94);
};
$arguments92 = array();
$arguments92['value'] = NULL;

$output89 .= isset($arguments92['value']) ? $arguments92['value'] : $renderChildrenClosure93();

$output89 .= '
      ';
return $output89;
};
$arguments84 = array();
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$arguments84['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array86 = array();
$array87 = array (
);$array86['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array87);
$array86['1'] = '==\'53\'';

$expression88 = function($context) {return (($context["node0"]) == '53');};
$arguments84['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);
$arguments84['__thenClosure'] = $renderChildrenClosure85;

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output70 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['section'] = NULL;
$arguments101['partial'] = NULL;
$arguments101['delegate'] = NULL;
$arguments101['arguments'] = array (
);
$arguments101['optional'] = false;
$arguments101['default'] = NULL;
$arguments101['contentAs'] = NULL;
$arguments101['partial'] = 'Shopsuche';

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$array105 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array105);
};
$arguments103 = array();
$arguments103['value'] = NULL;

$output100 .= isset($arguments103['value']) ? $arguments103['value'] : $renderChildrenClosure104();

$output100 .= '
      ';
return $output100;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array98);
$array97['1'] = '==\'54\'';

$expression99 = function($context) {return (($context["node0"]) == '54');};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = $renderChildrenClosure96;

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output70 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['section'] = NULL;
$arguments112['partial'] = NULL;
$arguments112['delegate'] = NULL;
$arguments112['arguments'] = array (
);
$arguments112['optional'] = false;
$arguments112['default'] = NULL;
$arguments112['contentAs'] = NULL;
$arguments112['partial'] = 'Shopen';

$output111 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$array116 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array116);
};
$arguments114 = array();
$arguments114['value'] = NULL;

$output111 .= isset($arguments114['value']) ? $arguments114['value'] : $renderChildrenClosure115();

$output111 .= '
        <!--';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$array119 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array119);
};
$arguments117 = array();
$arguments117['value'] = NULL;

$output111 .= isset($arguments117['value']) ? $arguments117['value'] : $renderChildrenClosure118();

$output111 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$array122 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array122);
};
$arguments120 = array();
$arguments120['value'] = NULL;

$output111 .= isset($arguments120['value']) ? $arguments120['value'] : $renderChildrenClosure121();

$output111 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$array125 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array125);
};
$arguments123 = array();
$arguments123['value'] = NULL;

$output111 .= isset($arguments123['value']) ? $arguments123['value'] : $renderChildrenClosure124();

$output111 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$array128 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array128);
};
$arguments126 = array();
$arguments126['value'] = NULL;

$output111 .= isset($arguments126['value']) ? $arguments126['value'] : $renderChildrenClosure127();

$output111 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$array131 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array131);
};
$arguments129 = array();
$arguments129['value'] = NULL;

$output111 .= isset($arguments129['value']) ? $arguments129['value'] : $renderChildrenClosure130();

$output111 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$array134 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array134);
};
$arguments132 = array();
$arguments132['value'] = NULL;

$output111 .= isset($arguments132['value']) ? $arguments132['value'] : $renderChildrenClosure133();

$output111 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$array137 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array137);
};
$arguments135 = array();
$arguments135['value'] = NULL;

$output111 .= isset($arguments135['value']) ? $arguments135['value'] : $renderChildrenClosure136();

$output111 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$array140 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array140);
};
$arguments138 = array();
$arguments138['value'] = NULL;

$output111 .= isset($arguments138['value']) ? $arguments138['value'] : $renderChildrenClosure139();

$output111 .= '-->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$array143 = array (
);return $renderingContext->getVariableProvider()->getByPath('product1', $array143);
};
$arguments141 = array();
$arguments141['value'] = NULL;

$output111 .= isset($arguments141['value']) ? $arguments141['value'] : $renderChildrenClosure142();

$output111 .= '
      ';
return $output111;
};
$arguments106 = array();
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$arguments106['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array109);
$array108['1'] = '==\'55\'';

$expression110 = function($context) {return (($context["node0"]) == '55');};
$arguments106['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);
$arguments106['__thenClosure'] = $renderChildrenClosure107;

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output70 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['section'] = NULL;
$arguments150['partial'] = NULL;
$arguments150['delegate'] = NULL;
$arguments150['arguments'] = array (
);
$arguments150['optional'] = false;
$arguments150['default'] = NULL;
$arguments150['contentAs'] = NULL;
$arguments150['partial'] = 'Abschliessen';

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$array154 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array154);
};
$arguments152 = array();
$arguments152['value'] = NULL;

$output149 .= isset($arguments152['value']) ? $arguments152['value'] : $renderChildrenClosure153();

$output149 .= '
      ';
return $output149;
};
$arguments144 = array();
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$arguments144['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array147);
$array146['1'] = '==\'56\'';

$expression148 = function($context) {return (($context["node0"]) == '56');};
$arguments144['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments144['__thenClosure'] = $renderChildrenClosure145;

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output70 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['section'] = NULL;
$arguments161['partial'] = NULL;
$arguments161['delegate'] = NULL;
$arguments161['arguments'] = array (
);
$arguments161['optional'] = false;
$arguments161['default'] = NULL;
$arguments161['contentAs'] = NULL;
$arguments161['partial'] = 'Warenkorb';

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$array165 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array165);
};
$arguments163 = array();
$arguments163['value'] = NULL;

$output160 .= isset($arguments163['value']) ? $arguments163['value'] : $renderChildrenClosure164();

$output160 .= '
      ';
return $output160;
};
$arguments155 = array();
$arguments155['then'] = NULL;
$arguments155['else'] = NULL;
$arguments155['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array157 = array();
$array158 = array (
);$array157['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array158);
$array157['1'] = '==\'58\'';

$expression159 = function($context) {return (($context["node0"]) == '58');};
$arguments155['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression159(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array157)
					),
					$renderingContext
				);
$arguments155['__thenClosure'] = $renderChildrenClosure156;

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output70 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['section'] = NULL;
$arguments172['partial'] = NULL;
$arguments172['delegate'] = NULL;
$arguments172['arguments'] = array (
);
$arguments172['optional'] = false;
$arguments172['default'] = NULL;
$arguments172['contentAs'] = NULL;
$arguments172['partial'] = 'Shopsuche';

$output171 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$array176 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array176);
};
$arguments174 = array();
$arguments174['value'] = NULL;

$output171 .= isset($arguments174['value']) ? $arguments174['value'] : $renderChildrenClosure175();

$output171 .= '
      ';
return $output171;
};
$arguments166 = array();
$arguments166['then'] = NULL;
$arguments166['else'] = NULL;
$arguments166['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array168 = array();
$array169 = array (
);$array168['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array169);
$array168['1'] = '==\'64\'';

$expression170 = function($context) {return (($context["node0"]) == '64');};
$arguments166['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array168)
					),
					$renderingContext
				);
$arguments166['__thenClosure'] = $renderChildrenClosure167;

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output70 .= '

    </div>
  </div>
  <!--TYPO3SEARCH_end-->
';

return $output70;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output177 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['name'] = NULL;
$arguments178['name'] = 'Standard';

$output177 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext), ENT_QUOTES);

$output177 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
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
$arguments180 = array();
$arguments180['name'] = NULL;
$arguments180['name'] = 'Jumbotron';

$output177 .= '';

$output177 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
<div class="container maincontent"><!-- Content Container -->
<!-- Content Bereich Product Kategorien -->
<!--TYPO3SEARCH_BEGIN-->
  <div class="row">
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$array187 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array187);
};
$arguments185 = array();
$arguments185['value'] = NULL;

$output184 .= isset($arguments185['value']) ? $arguments185['value'] : $renderChildrenClosure186();

$output184 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$array190 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array190);
};
$arguments188 = array();
$arguments188['value'] = NULL;

$output184 .= isset($arguments188['value']) ? $arguments188['value'] : $renderChildrenClosure189();

$output184 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$array193 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array193);
};
$arguments191 = array();
$arguments191['value'] = NULL;

$output184 .= isset($arguments191['value']) ? $arguments191['value'] : $renderChildrenClosure192();

$output184 .= '
    </div>
  </div>
  <!-- Content Bereich ueber ganze Breite -->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$array196 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array196);
};
$arguments194 = array();
$arguments194['value'] = NULL;

$output184 .= isset($arguments194['value']) ? $arguments194['value'] : $renderChildrenClosure195();

$output184 .= '
    </div>
  </div>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$array199 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array199);
};
$arguments197 = array();
$arguments197['value'] = NULL;

$output184 .= isset($arguments197['value']) ? $arguments197['value'] : $renderChildrenClosure198();

$output184 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$array202 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array202);
};
$arguments200 = array();
$arguments200['value'] = NULL;

$output184 .= isset($arguments200['value']) ? $arguments200['value'] : $renderChildrenClosure201();

$output184 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$array205 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array205);
};
$arguments203 = array();
$arguments203['value'] = NULL;

$output184 .= isset($arguments203['value']) ? $arguments203['value'] : $renderChildrenClosure204();

$output184 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$array208 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array208);
};
$arguments206 = array();
$arguments206['value'] = NULL;

$output184 .= isset($arguments206['value']) ? $arguments206['value'] : $renderChildrenClosure207();

$output184 .= '
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
return $output184;
};
$arguments182 = array();
$arguments182['name'] = NULL;
$arguments182['name'] = 'Multicolumn';

$output177 .= '';

$output177 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['typoscriptObjectPath'] = NULL;
$arguments212['data'] = NULL;
$arguments212['currentValueKey'] = NULL;
$arguments212['table'] = '';
$arguments212['typoscriptObjectPath'] = 'lib.rootline';

$output211 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output211 .= '

<div class="container maincontent"><!-- Content Container -->

  <div class="row">
    <!--TYPO3SEARCH_BEGIN-->
    <div class="col-md-8">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['section'] = NULL;
$arguments220['partial'] = NULL;
$arguments220['delegate'] = NULL;
$arguments220['arguments'] = array (
);
$arguments220['optional'] = false;
$arguments220['default'] = NULL;
$arguments220['contentAs'] = NULL;
$arguments220['partial'] = 'Shopen';

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['section'] = NULL;
$arguments222['partial'] = NULL;
$arguments222['delegate'] = NULL;
$arguments222['arguments'] = array (
);
$arguments222['optional'] = false;
$arguments222['default'] = NULL;
$arguments222['contentAs'] = NULL;
$arguments222['partial'] = 'Shopkategorien';

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output219 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$array226 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array226);
};
$arguments224 = array();
$arguments224['value'] = NULL;

$output219 .= isset($arguments224['value']) ? $arguments224['value'] : $renderChildrenClosure225();

$output219 .= '
      ';
return $output219;
};
$arguments214 = array();
$arguments214['then'] = NULL;
$arguments214['else'] = NULL;
$arguments214['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array216 = array();
$array217 = array (
);$array216['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array217);
$array216['1'] = '==\'52\'';

$expression218 = function($context) {return (($context["node0"]) == '52');};
$arguments214['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression218(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array216)
					),
					$renderingContext
				);
$arguments214['__thenClosure'] = $renderChildrenClosure215;

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output211 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$array229 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array229);
};
$arguments227 = array();
$arguments227['value'] = NULL;

$output211 .= isset($arguments227['value']) ? $arguments227['value'] : $renderChildrenClosure228();

$output211 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$array232 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array232);
};
$arguments230 = array();
$arguments230['value'] = NULL;

$output211 .= isset($arguments230['value']) ? $arguments230['value'] : $renderChildrenClosure231();

$output211 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$array235 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array235);
};
$arguments233 = array();
$arguments233['value'] = NULL;

$output211 .= isset($arguments233['value']) ? $arguments233['value'] : $renderChildrenClosure234();

$output211 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$array238 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array238);
};
$arguments236 = array();
$arguments236['value'] = NULL;

$output211 .= isset($arguments236['value']) ? $arguments236['value'] : $renderChildrenClosure237();

$output211 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$array241 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array241);
};
$arguments239 = array();
$arguments239['value'] = NULL;

$output211 .= isset($arguments239['value']) ? $arguments239['value'] : $renderChildrenClosure240();

$output211 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$array244 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array244);
};
$arguments242 = array();
$arguments242['value'] = NULL;

$output211 .= isset($arguments242['value']) ? $arguments242['value'] : $renderChildrenClosure243();

$output211 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$array247 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array247);
};
$arguments245 = array();
$arguments245['value'] = NULL;

$output211 .= isset($arguments245['value']) ? $arguments245['value'] : $renderChildrenClosure246();

$output211 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
$array250 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array250);
};
$arguments248 = array();
$arguments248['value'] = NULL;

$output211 .= isset($arguments248['value']) ? $arguments248['value'] : $renderChildrenClosure249();

$output211 .= '
    </div>
    <!--TYPO3SEARCH_end-->
    <div class="col-md-4">

      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['typoscriptObjectPath'] = NULL;
$arguments251['data'] = NULL;
$arguments251['currentValueKey'] = NULL;
$arguments251['table'] = '';
$arguments251['typoscriptObjectPath'] = 'lib.subnavigation';

$output211 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output211 .= '
      <!--TYPO3SEARCH_begin-->
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$array255 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array255);
};
$arguments253 = array();
$arguments253['value'] = NULL;

$output211 .= isset($arguments253['value']) ? $arguments253['value'] : $renderChildrenClosure254();

$output211 .= '
      <!--TYPO3SEARCH_end-->
   </div>
  </div>

';
return $output211;
};
$arguments209 = array();
$arguments209['name'] = NULL;
$arguments209['name'] = '2spalten';

$output177 .= '';

$output177 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments259 = array();
$arguments259['typoscriptObjectPath'] = NULL;
$arguments259['data'] = NULL;
$arguments259['currentValueKey'] = NULL;
$arguments259['table'] = '';
$arguments259['typoscriptObjectPath'] = 'lib.rootline';

$output258 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output258 .= '
<div class="container maincontent"><!-- Content Container -->
  <!--TYPO3SEARCH_begin-->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['section'] = NULL;
$arguments267['partial'] = NULL;
$arguments267['delegate'] = NULL;
$arguments267['arguments'] = array (
);
$arguments267['optional'] = false;
$arguments267['default'] = NULL;
$arguments267['contentAs'] = NULL;
$arguments267['partial'] = 'Bezahlung';

$output266 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output266 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$array271 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array271);
};
$arguments269 = array();
$arguments269['value'] = NULL;

$output266 .= isset($arguments269['value']) ? $arguments269['value'] : $renderChildrenClosure270();

$output266 .= '
      ';
return $output266;
};
$arguments261 = array();
$arguments261['then'] = NULL;
$arguments261['else'] = NULL;
$arguments261['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array263 = array();
$array264 = array (
);$array263['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array264);
$array263['1'] = '==\'51\'';

$expression265 = function($context) {return (($context["node0"]) == '51');};
$arguments261['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression265(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array263)
					),
					$renderingContext
				);
$arguments261['__thenClosure'] = $renderChildrenClosure262;

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output258 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$output277 = '';

$output277 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['section'] = NULL;
$arguments278['partial'] = NULL;
$arguments278['delegate'] = NULL;
$arguments278['arguments'] = array (
);
$arguments278['optional'] = false;
$arguments278['default'] = NULL;
$arguments278['contentAs'] = NULL;
$arguments278['partial'] = 'Detailansicht';

$output277 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output277 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$array282 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array282);
};
$arguments280 = array();
$arguments280['value'] = NULL;

$output277 .= isset($arguments280['value']) ? $arguments280['value'] : $renderChildrenClosure281();

$output277 .= '
      ';
return $output277;
};
$arguments272 = array();
$arguments272['then'] = NULL;
$arguments272['else'] = NULL;
$arguments272['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array274 = array();
$array275 = array (
);$array274['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array275);
$array274['1'] = '==\'53\'';

$expression276 = function($context) {return (($context["node0"]) == '53');};
$arguments272['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression276(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array274)
					),
					$renderingContext
				);
$arguments272['__thenClosure'] = $renderChildrenClosure273;

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output258 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments289 = array();
$arguments289['section'] = NULL;
$arguments289['partial'] = NULL;
$arguments289['delegate'] = NULL;
$arguments289['arguments'] = array (
);
$arguments289['optional'] = false;
$arguments289['default'] = NULL;
$arguments289['contentAs'] = NULL;
$arguments289['partial'] = 'Shopsuche';

$output288 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output288 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$array293 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array293);
};
$arguments291 = array();
$arguments291['value'] = NULL;

$output288 .= isset($arguments291['value']) ? $arguments291['value'] : $renderChildrenClosure292();

$output288 .= '
      ';
return $output288;
};
$arguments283 = array();
$arguments283['then'] = NULL;
$arguments283['else'] = NULL;
$arguments283['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array285 = array();
$array286 = array (
);$array285['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array286);
$array285['1'] = '==\'54\'';

$expression287 = function($context) {return (($context["node0"]) == '54');};
$arguments283['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression287(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array285)
					),
					$renderingContext
				);
$arguments283['__thenClosure'] = $renderChildrenClosure284;

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output258 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$output299 = '';

$output299 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments300 = array();
$arguments300['section'] = NULL;
$arguments300['partial'] = NULL;
$arguments300['delegate'] = NULL;
$arguments300['arguments'] = array (
);
$arguments300['optional'] = false;
$arguments300['default'] = NULL;
$arguments300['contentAs'] = NULL;
$arguments300['partial'] = 'Shopen';

$output299 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output299 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$array304 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array304);
};
$arguments302 = array();
$arguments302['value'] = NULL;

$output299 .= isset($arguments302['value']) ? $arguments302['value'] : $renderChildrenClosure303();

$output299 .= '
        <!--';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$array307 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array307);
};
$arguments305 = array();
$arguments305['value'] = NULL;

$output299 .= isset($arguments305['value']) ? $arguments305['value'] : $renderChildrenClosure306();

$output299 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$array310 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array310);
};
$arguments308 = array();
$arguments308['value'] = NULL;

$output299 .= isset($arguments308['value']) ? $arguments308['value'] : $renderChildrenClosure309();

$output299 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
$array313 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array313);
};
$arguments311 = array();
$arguments311['value'] = NULL;

$output299 .= isset($arguments311['value']) ? $arguments311['value'] : $renderChildrenClosure312();

$output299 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$array316 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array316);
};
$arguments314 = array();
$arguments314['value'] = NULL;

$output299 .= isset($arguments314['value']) ? $arguments314['value'] : $renderChildrenClosure315();

$output299 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
$array319 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array319);
};
$arguments317 = array();
$arguments317['value'] = NULL;

$output299 .= isset($arguments317['value']) ? $arguments317['value'] : $renderChildrenClosure318();

$output299 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$array322 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array322);
};
$arguments320 = array();
$arguments320['value'] = NULL;

$output299 .= isset($arguments320['value']) ? $arguments320['value'] : $renderChildrenClosure321();

$output299 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
$array325 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array325);
};
$arguments323 = array();
$arguments323['value'] = NULL;

$output299 .= isset($arguments323['value']) ? $arguments323['value'] : $renderChildrenClosure324();

$output299 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
$array328 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array328);
};
$arguments326 = array();
$arguments326['value'] = NULL;

$output299 .= isset($arguments326['value']) ? $arguments326['value'] : $renderChildrenClosure327();

$output299 .= '-->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
$array331 = array (
);return $renderingContext->getVariableProvider()->getByPath('product1', $array331);
};
$arguments329 = array();
$arguments329['value'] = NULL;

$output299 .= isset($arguments329['value']) ? $arguments329['value'] : $renderChildrenClosure330();

$output299 .= '
      ';
return $output299;
};
$arguments294 = array();
$arguments294['then'] = NULL;
$arguments294['else'] = NULL;
$arguments294['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array296 = array();
$array297 = array (
);$array296['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array297);
$array296['1'] = '==\'55\'';

$expression298 = function($context) {return (($context["node0"]) == '55');};
$arguments294['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression298(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array296)
					),
					$renderingContext
				);
$arguments294['__thenClosure'] = $renderChildrenClosure295;

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output258 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$output337 = '';

$output337 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments338 = array();
$arguments338['section'] = NULL;
$arguments338['partial'] = NULL;
$arguments338['delegate'] = NULL;
$arguments338['arguments'] = array (
);
$arguments338['optional'] = false;
$arguments338['default'] = NULL;
$arguments338['contentAs'] = NULL;
$arguments338['partial'] = 'Abschliessen';

$output337 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output337 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
$array342 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array342);
};
$arguments340 = array();
$arguments340['value'] = NULL;

$output337 .= isset($arguments340['value']) ? $arguments340['value'] : $renderChildrenClosure341();

$output337 .= '
      ';
return $output337;
};
$arguments332 = array();
$arguments332['then'] = NULL;
$arguments332['else'] = NULL;
$arguments332['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array334 = array();
$array335 = array (
);$array334['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array335);
$array334['1'] = '==\'56\'';

$expression336 = function($context) {return (($context["node0"]) == '56');};
$arguments332['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression336(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array334)
					),
					$renderingContext
				);
$arguments332['__thenClosure'] = $renderChildrenClosure333;

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output258 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments349 = array();
$arguments349['section'] = NULL;
$arguments349['partial'] = NULL;
$arguments349['delegate'] = NULL;
$arguments349['arguments'] = array (
);
$arguments349['optional'] = false;
$arguments349['default'] = NULL;
$arguments349['contentAs'] = NULL;
$arguments349['partial'] = 'Warenkorb';

$output348 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output348 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
$array353 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array353);
};
$arguments351 = array();
$arguments351['value'] = NULL;

$output348 .= isset($arguments351['value']) ? $arguments351['value'] : $renderChildrenClosure352();

$output348 .= '
      ';
return $output348;
};
$arguments343 = array();
$arguments343['then'] = NULL;
$arguments343['else'] = NULL;
$arguments343['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array345 = array();
$array346 = array (
);$array345['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array346);
$array345['1'] = '==\'58\'';

$expression347 = function($context) {return (($context["node0"]) == '58');};
$arguments343['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression347(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array345)
					),
					$renderingContext
				);
$arguments343['__thenClosure'] = $renderChildrenClosure344;

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext);

$output258 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
$output359 = '';

$output359 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments360 = array();
$arguments360['section'] = NULL;
$arguments360['partial'] = NULL;
$arguments360['delegate'] = NULL;
$arguments360['arguments'] = array (
);
$arguments360['optional'] = false;
$arguments360['default'] = NULL;
$arguments360['contentAs'] = NULL;
$arguments360['partial'] = 'Shopsuche';

$output359 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output359 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$array364 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array364);
};
$arguments362 = array();
$arguments362['value'] = NULL;

$output359 .= isset($arguments362['value']) ? $arguments362['value'] : $renderChildrenClosure363();

$output359 .= '
      ';
return $output359;
};
$arguments354 = array();
$arguments354['then'] = NULL;
$arguments354['else'] = NULL;
$arguments354['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array356 = array();
$array357 = array (
);$array356['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array357);
$array356['1'] = '==\'64\'';

$expression358 = function($context) {return (($context["node0"]) == '64');};
$arguments354['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression358(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array356)
					),
					$renderingContext
				);
$arguments354['__thenClosure'] = $renderChildrenClosure355;

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);

$output258 .= '

    </div>
  </div>
  <!--TYPO3SEARCH_end-->
';
return $output258;
};
$arguments256 = array();
$arguments256['name'] = NULL;
$arguments256['name'] = '1spalte';

$output177 .= '';

$output177 .= '
';

return $output177;
}


}
#