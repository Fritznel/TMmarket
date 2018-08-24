<?php

class Standard_action_index_9abb81259a1f361d55b0d3d2bb9e5dc3a935102b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$array91 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array91);
};
$arguments89 = array();
$arguments89['value'] = NULL;

$output88 .= isset($arguments89['value']) ? $arguments89['value'] : $renderChildrenClosure90();

$output88 .= '
        <!--';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$array94 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array94);
};
$arguments92 = array();
$arguments92['value'] = NULL;

$output88 .= isset($arguments92['value']) ? $arguments92['value'] : $renderChildrenClosure93();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$array97 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array97);
};
$arguments95 = array();
$arguments95['value'] = NULL;

$output88 .= isset($arguments95['value']) ? $arguments95['value'] : $renderChildrenClosure96();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$array100 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array100);
};
$arguments98 = array();
$arguments98['value'] = NULL;

$output88 .= isset($arguments98['value']) ? $arguments98['value'] : $renderChildrenClosure99();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$array103 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array103);
};
$arguments101 = array();
$arguments101['value'] = NULL;

$output88 .= isset($arguments101['value']) ? $arguments101['value'] : $renderChildrenClosure102();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$array106 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array106);
};
$arguments104 = array();
$arguments104['value'] = NULL;

$output88 .= isset($arguments104['value']) ? $arguments104['value'] : $renderChildrenClosure105();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$array109 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array109);
};
$arguments107 = array();
$arguments107['value'] = NULL;

$output88 .= isset($arguments107['value']) ? $arguments107['value'] : $renderChildrenClosure108();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$array112 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array112);
};
$arguments110 = array();
$arguments110['value'] = NULL;

$output88 .= isset($arguments110['value']) ? $arguments110['value'] : $renderChildrenClosure111();

$output88 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$array115 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array115);
};
$arguments113 = array();
$arguments113['value'] = NULL;

$output88 .= isset($arguments113['value']) ? $arguments113['value'] : $renderChildrenClosure114();

$output88 .= '-->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$array118 = array (
);return $renderingContext->getVariableProvider()->getByPath('product1', $array118);
};
$arguments116 = array();
$arguments116['value'] = NULL;

$output88 .= isset($arguments116['value']) ? $arguments116['value'] : $renderChildrenClosure117();

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
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['section'] = NULL;
$arguments125['partial'] = NULL;
$arguments125['delegate'] = NULL;
$arguments125['arguments'] = array (
);
$arguments125['optional'] = false;
$arguments125['default'] = NULL;
$arguments125['contentAs'] = NULL;
$arguments125['partial'] = 'Abschliessen';

$output124 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output124 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$array129 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array129);
};
$arguments127 = array();
$arguments127['value'] = NULL;

$output124 .= isset($arguments127['value']) ? $arguments127['value'] : $renderChildrenClosure128();

$output124 .= '
      ';
return $output124;
};
$arguments119 = array();
$arguments119['then'] = NULL;
$arguments119['else'] = NULL;
$arguments119['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array121 = array();
$array122 = array (
);$array121['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array122);
$array121['1'] = '==\'56\'';

$expression123 = function($context) {return (($context["node0"]) == '56');};
$arguments119['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression123(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);
$arguments119['__thenClosure'] = $renderChildrenClosure120;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output47 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['section'] = NULL;
$arguments136['partial'] = NULL;
$arguments136['delegate'] = NULL;
$arguments136['arguments'] = array (
);
$arguments136['optional'] = false;
$arguments136['default'] = NULL;
$arguments136['contentAs'] = NULL;
$arguments136['partial'] = 'Warenkorb';

$output135 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$array140 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array140);
};
$arguments138 = array();
$arguments138['value'] = NULL;

$output135 .= isset($arguments138['value']) ? $arguments138['value'] : $renderChildrenClosure139();

$output135 .= '
      ';
return $output135;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array133);
$array132['1'] = '==\'58\'';

$expression134 = function($context) {return (($context["node0"]) == '58');};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array132)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = $renderChildrenClosure131;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output47 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['section'] = NULL;
$arguments147['partial'] = NULL;
$arguments147['delegate'] = NULL;
$arguments147['arguments'] = array (
);
$arguments147['optional'] = false;
$arguments147['default'] = NULL;
$arguments147['contentAs'] = NULL;
$arguments147['partial'] = 'Shopsuche';

$output146 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output146 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$array151 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array151);
};
$arguments149 = array();
$arguments149['value'] = NULL;

$output146 .= isset($arguments149['value']) ? $arguments149['value'] : $renderChildrenClosure150();

$output146 .= '
      ';
return $output146;
};
$arguments141 = array();
$arguments141['then'] = NULL;
$arguments141['else'] = NULL;
$arguments141['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array143 = array();
$array144 = array (
);$array143['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array144);
$array143['1'] = '==\'64\'';

$expression145 = function($context) {return (($context["node0"]) == '64');};
$arguments141['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression145(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);
$arguments141['__thenClosure'] = $renderChildrenClosure142;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

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
$output152 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['name'] = NULL;
$arguments153['name'] = 'Standard';

$output152 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext), ENT_QUOTES);

$output152 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
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
$arguments155 = array();
$arguments155['name'] = NULL;
$arguments155['name'] = 'Jumbotron';

$output152 .= '';

$output152 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
<div class="container maincontent"><!-- Content Container -->
<!-- Content Bereich Product Kategorien -->
<!--TYPO3SEARCH_BEGIN-->
  <div class="row">
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$array162 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array162);
};
$arguments160 = array();
$arguments160['value'] = NULL;

$output159 .= isset($arguments160['value']) ? $arguments160['value'] : $renderChildrenClosure161();

$output159 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$array165 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array165);
};
$arguments163 = array();
$arguments163['value'] = NULL;

$output159 .= isset($arguments163['value']) ? $arguments163['value'] : $renderChildrenClosure164();

$output159 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$array168 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array168);
};
$arguments166 = array();
$arguments166['value'] = NULL;

$output159 .= isset($arguments166['value']) ? $arguments166['value'] : $renderChildrenClosure167();

$output159 .= '
    </div>
  </div>
  <!-- Content Bereich ueber ganze Breite -->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$array171 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array171);
};
$arguments169 = array();
$arguments169['value'] = NULL;

$output159 .= isset($arguments169['value']) ? $arguments169['value'] : $renderChildrenClosure170();

$output159 .= '
    </div>
  </div>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$array174 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array174);
};
$arguments172 = array();
$arguments172['value'] = NULL;

$output159 .= isset($arguments172['value']) ? $arguments172['value'] : $renderChildrenClosure173();

$output159 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$array177 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array177);
};
$arguments175 = array();
$arguments175['value'] = NULL;

$output159 .= isset($arguments175['value']) ? $arguments175['value'] : $renderChildrenClosure176();

$output159 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$array180 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array180);
};
$arguments178 = array();
$arguments178['value'] = NULL;

$output159 .= isset($arguments178['value']) ? $arguments178['value'] : $renderChildrenClosure179();

$output159 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$array183 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array183);
};
$arguments181 = array();
$arguments181['value'] = NULL;

$output159 .= isset($arguments181['value']) ? $arguments181['value'] : $renderChildrenClosure182();

$output159 .= '
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
return $output159;
};
$arguments157 = array();
$arguments157['name'] = NULL;
$arguments157['name'] = 'Multicolumn';

$output152 .= '';

$output152 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['typoscriptObjectPath'] = NULL;
$arguments187['data'] = NULL;
$arguments187['currentValueKey'] = NULL;
$arguments187['table'] = '';
$arguments187['typoscriptObjectPath'] = 'lib.rootline';

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output186 .= '

<div class="container maincontent"><!-- Content Container -->

  <div class="row">
    <!--TYPO3SEARCH_BEGIN-->
    <div class="col-md-8">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['section'] = NULL;
$arguments195['partial'] = NULL;
$arguments195['delegate'] = NULL;
$arguments195['arguments'] = array (
);
$arguments195['optional'] = false;
$arguments195['default'] = NULL;
$arguments195['contentAs'] = NULL;
$arguments195['partial'] = 'Shopkategorien';

$output194 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output194 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$array199 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array199);
};
$arguments197 = array();
$arguments197['value'] = NULL;

$output194 .= isset($arguments197['value']) ? $arguments197['value'] : $renderChildrenClosure198();

$output194 .= '
      ';
return $output194;
};
$arguments189 = array();
$arguments189['then'] = NULL;
$arguments189['else'] = NULL;
$arguments189['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array191 = array();
$array192 = array (
);$array191['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array192);
$array191['1'] = '==\'52\'';

$expression193 = function($context) {return (($context["node0"]) == '52');};
$arguments189['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array191)
					),
					$renderingContext
				);
$arguments189['__thenClosure'] = $renderChildrenClosure190;

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output186 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$array202 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array202);
};
$arguments200 = array();
$arguments200['value'] = NULL;

$output186 .= isset($arguments200['value']) ? $arguments200['value'] : $renderChildrenClosure201();

$output186 .= '
    </div>
    <!--TYPO3SEARCH_end-->
    <div class="col-md-4">

      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['typoscriptObjectPath'] = NULL;
$arguments203['data'] = NULL;
$arguments203['currentValueKey'] = NULL;
$arguments203['table'] = '';
$arguments203['typoscriptObjectPath'] = 'lib.subnavigation';

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output186 .= '
      <!--TYPO3SEARCH_begin-->
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$array207 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array207);
};
$arguments205 = array();
$arguments205['value'] = NULL;

$output186 .= isset($arguments205['value']) ? $arguments205['value'] : $renderChildrenClosure206();

$output186 .= '
      <!--TYPO3SEARCH_end-->
   </div>
  </div>

';
return $output186;
};
$arguments184 = array();
$arguments184['name'] = NULL;
$arguments184['name'] = '2spalten';

$output152 .= '';

$output152 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$arguments211['typoscriptObjectPath'] = NULL;
$arguments211['data'] = NULL;
$arguments211['currentValueKey'] = NULL;
$arguments211['table'] = '';
$arguments211['typoscriptObjectPath'] = 'lib.rootline';

$output210 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '
<div class="container maincontent"><!-- Content Container -->
  <!--TYPO3SEARCH_begin-->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['section'] = NULL;
$arguments219['partial'] = NULL;
$arguments219['delegate'] = NULL;
$arguments219['arguments'] = array (
);
$arguments219['optional'] = false;
$arguments219['default'] = NULL;
$arguments219['contentAs'] = NULL;
$arguments219['partial'] = 'Bezahlung';

$output218 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output218 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$array223 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array223);
};
$arguments221 = array();
$arguments221['value'] = NULL;

$output218 .= isset($arguments221['value']) ? $arguments221['value'] : $renderChildrenClosure222();

$output218 .= '
      ';
return $output218;
};
$arguments213 = array();
$arguments213['then'] = NULL;
$arguments213['else'] = NULL;
$arguments213['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array215 = array();
$array216 = array (
);$array215['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array216);
$array215['1'] = '==\'51\'';

$expression217 = function($context) {return (($context["node0"]) == '51');};
$arguments213['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression217(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array215)
					),
					$renderingContext
				);
$arguments213['__thenClosure'] = $renderChildrenClosure214;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output210 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$output229 = '';

$output229 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['section'] = NULL;
$arguments230['partial'] = NULL;
$arguments230['delegate'] = NULL;
$arguments230['arguments'] = array (
);
$arguments230['optional'] = false;
$arguments230['default'] = NULL;
$arguments230['contentAs'] = NULL;
$arguments230['partial'] = 'Detailansicht';

$output229 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output229 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
$array234 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array234);
};
$arguments232 = array();
$arguments232['value'] = NULL;

$output229 .= isset($arguments232['value']) ? $arguments232['value'] : $renderChildrenClosure233();

$output229 .= '
      ';
return $output229;
};
$arguments224 = array();
$arguments224['then'] = NULL;
$arguments224['else'] = NULL;
$arguments224['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array226 = array();
$array227 = array (
);$array226['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array227);
$array226['1'] = '==\'53\'';

$expression228 = function($context) {return (($context["node0"]) == '53');};
$arguments224['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression228(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array226)
					),
					$renderingContext
				);
$arguments224['__thenClosure'] = $renderChildrenClosure225;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output210 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['section'] = NULL;
$arguments241['partial'] = NULL;
$arguments241['delegate'] = NULL;
$arguments241['arguments'] = array (
);
$arguments241['optional'] = false;
$arguments241['default'] = NULL;
$arguments241['contentAs'] = NULL;
$arguments241['partial'] = 'Shopsuche';

$output240 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$array245 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array245);
};
$arguments243 = array();
$arguments243['value'] = NULL;

$output240 .= isset($arguments243['value']) ? $arguments243['value'] : $renderChildrenClosure244();

$output240 .= '
      ';
return $output240;
};
$arguments235 = array();
$arguments235['then'] = NULL;
$arguments235['else'] = NULL;
$arguments235['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array237 = array();
$array238 = array (
);$array237['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array238);
$array237['1'] = '==\'54\'';

$expression239 = function($context) {return (($context["node0"]) == '54');};
$arguments235['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression239(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array237)
					),
					$renderingContext
				);
$arguments235['__thenClosure'] = $renderChildrenClosure236;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output210 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
        
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$array254 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array254);
};
$arguments252 = array();
$arguments252['value'] = NULL;

$output251 .= isset($arguments252['value']) ? $arguments252['value'] : $renderChildrenClosure253();

$output251 .= '
        <!--';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$array257 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array257);
};
$arguments255 = array();
$arguments255['value'] = NULL;

$output251 .= isset($arguments255['value']) ? $arguments255['value'] : $renderChildrenClosure256();

$output251 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$array260 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array260);
};
$arguments258 = array();
$arguments258['value'] = NULL;

$output251 .= isset($arguments258['value']) ? $arguments258['value'] : $renderChildrenClosure259();

$output251 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
$array263 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array263);
};
$arguments261 = array();
$arguments261['value'] = NULL;

$output251 .= isset($arguments261['value']) ? $arguments261['value'] : $renderChildrenClosure262();

$output251 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$array266 = array (
);return $renderingContext->getVariableProvider()->getByPath('content4', $array266);
};
$arguments264 = array();
$arguments264['value'] = NULL;

$output251 .= isset($arguments264['value']) ? $arguments264['value'] : $renderChildrenClosure265();

$output251 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$array269 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array269);
};
$arguments267 = array();
$arguments267['value'] = NULL;

$output251 .= isset($arguments267['value']) ? $arguments267['value'] : $renderChildrenClosure268();

$output251 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$array272 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array272);
};
$arguments270 = array();
$arguments270['value'] = NULL;

$output251 .= isset($arguments270['value']) ? $arguments270['value'] : $renderChildrenClosure271();

$output251 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$array275 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array275);
};
$arguments273 = array();
$arguments273['value'] = NULL;

$output251 .= isset($arguments273['value']) ? $arguments273['value'] : $renderChildrenClosure274();

$output251 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$array278 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array278);
};
$arguments276 = array();
$arguments276['value'] = NULL;

$output251 .= isset($arguments276['value']) ? $arguments276['value'] : $renderChildrenClosure277();

$output251 .= '-->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$array281 = array (
);return $renderingContext->getVariableProvider()->getByPath('product1', $array281);
};
$arguments279 = array();
$arguments279['value'] = NULL;

$output251 .= isset($arguments279['value']) ? $arguments279['value'] : $renderChildrenClosure280();

$output251 .= '
      ';
return $output251;
};
$arguments246 = array();
$arguments246['then'] = NULL;
$arguments246['else'] = NULL;
$arguments246['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array248 = array();
$array249 = array (
);$array248['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array249);
$array248['1'] = '==\'55\'';

$expression250 = function($context) {return (($context["node0"]) == '55');};
$arguments246['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression250(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array248)
					),
					$renderingContext
				);
$arguments246['__thenClosure'] = $renderChildrenClosure247;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output210 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments288 = array();
$arguments288['section'] = NULL;
$arguments288['partial'] = NULL;
$arguments288['delegate'] = NULL;
$arguments288['arguments'] = array (
);
$arguments288['optional'] = false;
$arguments288['default'] = NULL;
$arguments288['contentAs'] = NULL;
$arguments288['partial'] = 'Abschliessen';

$output287 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output287 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$array292 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array292);
};
$arguments290 = array();
$arguments290['value'] = NULL;

$output287 .= isset($arguments290['value']) ? $arguments290['value'] : $renderChildrenClosure291();

$output287 .= '
      ';
return $output287;
};
$arguments282 = array();
$arguments282['then'] = NULL;
$arguments282['else'] = NULL;
$arguments282['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array284 = array();
$array285 = array (
);$array284['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array285);
$array284['1'] = '==\'56\'';

$expression286 = function($context) {return (($context["node0"]) == '56');};
$arguments282['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression286(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array284)
					),
					$renderingContext
				);
$arguments282['__thenClosure'] = $renderChildrenClosure283;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output210 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output298 = '';

$output298 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['section'] = NULL;
$arguments299['partial'] = NULL;
$arguments299['delegate'] = NULL;
$arguments299['arguments'] = array (
);
$arguments299['optional'] = false;
$arguments299['default'] = NULL;
$arguments299['contentAs'] = NULL;
$arguments299['partial'] = 'Warenkorb';

$output298 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
$array303 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array303);
};
$arguments301 = array();
$arguments301['value'] = NULL;

$output298 .= isset($arguments301['value']) ? $arguments301['value'] : $renderChildrenClosure302();

$output298 .= '
      ';
return $output298;
};
$arguments293 = array();
$arguments293['then'] = NULL;
$arguments293['else'] = NULL;
$arguments293['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array295 = array();
$array296 = array (
);$array295['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array296);
$array295['1'] = '==\'58\'';

$expression297 = function($context) {return (($context["node0"]) == '58');};
$arguments293['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression297(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array295)
					),
					$renderingContext
				);
$arguments293['__thenClosure'] = $renderChildrenClosure294;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output210 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
$output309 = '';

$output309 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments310 = array();
$arguments310['section'] = NULL;
$arguments310['partial'] = NULL;
$arguments310['delegate'] = NULL;
$arguments310['arguments'] = array (
);
$arguments310['optional'] = false;
$arguments310['default'] = NULL;
$arguments310['contentAs'] = NULL;
$arguments310['partial'] = 'Shopsuche';

$output309 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output309 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
$array314 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array314);
};
$arguments312 = array();
$arguments312['value'] = NULL;

$output309 .= isset($arguments312['value']) ? $arguments312['value'] : $renderChildrenClosure313();

$output309 .= '
      ';
return $output309;
};
$arguments304 = array();
$arguments304['then'] = NULL;
$arguments304['else'] = NULL;
$arguments304['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array306 = array();
$array307 = array (
);$array306['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array307);
$array306['1'] = '==\'64\'';

$expression308 = function($context) {return (($context["node0"]) == '64');};
$arguments304['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression308(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array306)
					),
					$renderingContext
				);
$arguments304['__thenClosure'] = $renderChildrenClosure305;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output210 .= '

    </div>
  </div>
  <!--TYPO3SEARCH_end-->
';
return $output210;
};
$arguments208 = array();
$arguments208['name'] = NULL;
$arguments208['name'] = '1spalte';

$output152 .= '';

$output152 .= '
';

return $output152;
}


}
#