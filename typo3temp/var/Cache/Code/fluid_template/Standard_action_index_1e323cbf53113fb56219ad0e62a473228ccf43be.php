<?php

class Standard_action_index_1e323cbf53113fb56219ad0e62a473228ccf43be extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    <h1 class="display-3">Kaba Lavichè!</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
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
    <div class="col-md-8">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$array30 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array30);
};
$arguments28 = array();
$arguments28['value'] = NULL;

$output25 .= isset($arguments28['value']) ? $arguments28['value'] : $renderChildrenClosure29();

$output25 .= '
    </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['typoscriptObjectPath'] = NULL;
$arguments31['data'] = NULL;
$arguments31['currentValueKey'] = NULL;
$arguments31['table'] = '';
$arguments31['typoscriptObjectPath'] = 'lib.subnavigation';

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output25 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['section'] = NULL;
$arguments39['partial'] = NULL;
$arguments39['delegate'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['optional'] = false;
$arguments39['default'] = NULL;
$arguments39['contentAs'] = NULL;
$arguments39['partial'] = 'Shopkategorien';

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$array43 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array43);
};
$arguments41 = array();
$arguments41['value'] = NULL;

$output38 .= isset($arguments41['value']) ? $arguments41['value'] : $renderChildrenClosure42();

$output38 .= '
      ';
return $output38;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array36);
$array35['1'] = '==\'52\'';

$expression37 = function($context) {return (($context["node0"]) == '52');};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = $renderChildrenClosure34;

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output25 .= '
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
$arguments78['partial'] = 'Shopangebote';

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
$array74['1'] = '==\'55\'';

$expression76 = function($context) {return (($context["node0"]) == '55');};
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
$arguments89['partial'] = 'Abschliessen';

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
$array85['1'] = '==\'56\'';

$expression87 = function($context) {return (($context["node0"]) == '56');};
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
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['section'] = NULL;
$arguments100['partial'] = NULL;
$arguments100['delegate'] = NULL;
$arguments100['arguments'] = array (
);
$arguments100['optional'] = false;
$arguments100['default'] = NULL;
$arguments100['contentAs'] = NULL;
$arguments100['partial'] = 'Warenkorb';

$output99 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$array104 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array104);
};
$arguments102 = array();
$arguments102['value'] = NULL;

$output99 .= isset($arguments102['value']) ? $arguments102['value'] : $renderChildrenClosure103();

$output99 .= '
      ';
return $output99;
};
$arguments94 = array();
$arguments94['then'] = NULL;
$arguments94['else'] = NULL;
$arguments94['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array96 = array();
$array97 = array (
);$array96['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array97);
$array96['1'] = '==\'58\'';

$expression98 = function($context) {return (($context["node0"]) == '58');};
$arguments94['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array96)
					),
					$renderingContext
				);
$arguments94['__thenClosure'] = $renderChildrenClosure95;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output47 .= '
    </div>
  </div>
';

return $output47;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output105 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['name'] = NULL;
$arguments106['name'] = 'Standard';

$output105 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext), ENT_QUOTES);

$output105 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return '
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Kaba Lavichè!</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
  </div>
</div>
';
};
$arguments108 = array();
$arguments108['name'] = NULL;
$arguments108['name'] = 'Jumbotron';

$output105 .= '';

$output105 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
<div class="container maincontent"><!-- Content Container -->
<!-- Content Bereich Product Kategorien -->
  <div class="row">
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$array115 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array115);
};
$arguments113 = array();
$arguments113['value'] = NULL;

$output112 .= isset($arguments113['value']) ? $arguments113['value'] : $renderChildrenClosure114();

$output112 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$array118 = array (
);return $renderingContext->getVariableProvider()->getByPath('content3', $array118);
};
$arguments116 = array();
$arguments116['value'] = NULL;

$output112 .= isset($arguments116['value']) ? $arguments116['value'] : $renderChildrenClosure117();

$output112 .= '
      </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$array121 = array (
);return $renderingContext->getVariableProvider()->getByPath('content2', $array121);
};
$arguments119 = array();
$arguments119['value'] = NULL;

$output112 .= isset($arguments119['value']) ? $arguments119['value'] : $renderChildrenClosure120();

$output112 .= '
    </div>
  </div>
  <!-- Content Bereich ueber ganze Breite -->
  <div class="row">
    <div class="col-md-12">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$array124 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array124);
};
$arguments122 = array();
$arguments122['value'] = NULL;

$output112 .= isset($arguments122['value']) ? $arguments122['value'] : $renderChildrenClosure123();

$output112 .= '
    </div>
  </div>
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$array127 = array (
);return $renderingContext->getVariableProvider()->getByPath('content5', $array127);
};
$arguments125 = array();
$arguments125['value'] = NULL;

$output112 .= isset($arguments125['value']) ? $arguments125['value'] : $renderChildrenClosure126();

$output112 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$array130 = array (
);return $renderingContext->getVariableProvider()->getByPath('content6', $array130);
};
$arguments128 = array();
$arguments128['value'] = NULL;

$output112 .= isset($arguments128['value']) ? $arguments128['value'] : $renderChildrenClosure129();

$output112 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$array133 = array (
);return $renderingContext->getVariableProvider()->getByPath('content7', $array133);
};
$arguments131 = array();
$arguments131['value'] = NULL;

$output112 .= isset($arguments131['value']) ? $arguments131['value'] : $renderChildrenClosure132();

$output112 .= '
    </div>
    <div class="col-md-3">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$array136 = array (
);return $renderingContext->getVariableProvider()->getByPath('content8', $array136);
};
$arguments134 = array();
$arguments134['value'] = NULL;

$output112 .= isset($arguments134['value']) ? $arguments134['value'] : $renderChildrenClosure135();

$output112 .= '
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
';
return $output112;
};
$arguments110 = array();
$arguments110['name'] = NULL;
$arguments110['name'] = 'Multicolumn';

$output105 .= '';

$output105 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['typoscriptObjectPath'] = NULL;
$arguments140['data'] = NULL;
$arguments140['currentValueKey'] = NULL;
$arguments140['table'] = '';
$arguments140['typoscriptObjectPath'] = 'lib.rootline';

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '

<div class="container maincontent"><!-- Content Container -->
  <div class="row">
    <div class="col-md-8">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$array144 = array (
);return $renderingContext->getVariableProvider()->getByPath('content1', $array144);
};
$arguments142 = array();
$arguments142['value'] = NULL;

$output139 .= isset($arguments142['value']) ? $arguments142['value'] : $renderChildrenClosure143();

$output139 .= '
    </div>
    <div class="col-md-4">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['typoscriptObjectPath'] = NULL;
$arguments145['data'] = NULL;
$arguments145['currentValueKey'] = NULL;
$arguments145['table'] = '';
$arguments145['typoscriptObjectPath'] = 'lib.subnavigation';

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output139 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['section'] = NULL;
$arguments153['partial'] = NULL;
$arguments153['delegate'] = NULL;
$arguments153['arguments'] = array (
);
$arguments153['optional'] = false;
$arguments153['default'] = NULL;
$arguments153['contentAs'] = NULL;
$arguments153['partial'] = 'Shopkategorien';

$output152 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$array157 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array157);
};
$arguments155 = array();
$arguments155['value'] = NULL;

$output152 .= isset($arguments155['value']) ? $arguments155['value'] : $renderChildrenClosure156();

$output152 .= '
      ';
return $output152;
};
$arguments147 = array();
$arguments147['then'] = NULL;
$arguments147['else'] = NULL;
$arguments147['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array150);
$array149['1'] = '==\'52\'';

$expression151 = function($context) {return (($context["node0"]) == '52');};
$arguments147['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments147['__thenClosure'] = $renderChildrenClosure148;

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output139 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$array160 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array160);
};
$arguments158 = array();
$arguments158['value'] = NULL;

$output139 .= isset($arguments158['value']) ? $arguments158['value'] : $renderChildrenClosure159();

$output139 .= '
   </div>
  </div>
';
return $output139;
};
$arguments137 = array();
$arguments137['name'] = NULL;
$arguments137['name'] = '2spalten';

$output105 .= '';

$output105 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
<!-- Rootline -->
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['typoscriptObjectPath'] = NULL;
$arguments164['data'] = NULL;
$arguments164['currentValueKey'] = NULL;
$arguments164['table'] = '';
$arguments164['typoscriptObjectPath'] = 'lib.rootline';

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
<div class="container maincontent"><!-- Content Container -->
  <div class="row">
    <div class="col-md-12">
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
$arguments172['partial'] = 'Bezahlung';

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
$array168['1'] = '==\'51\'';

$expression170 = function($context) {return (($context["node0"]) == '51');};
$arguments166['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array168)
					),
					$renderingContext
				);
$arguments166['__thenClosure'] = $renderChildrenClosure167;

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output163 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['section'] = NULL;
$arguments183['partial'] = NULL;
$arguments183['delegate'] = NULL;
$arguments183['arguments'] = array (
);
$arguments183['optional'] = false;
$arguments183['default'] = NULL;
$arguments183['contentAs'] = NULL;
$arguments183['partial'] = 'Detailansicht';

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output182 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$array187 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array187);
};
$arguments185 = array();
$arguments185['value'] = NULL;

$output182 .= isset($arguments185['value']) ? $arguments185['value'] : $renderChildrenClosure186();

$output182 .= '
      ';
return $output182;
};
$arguments177 = array();
$arguments177['then'] = NULL;
$arguments177['else'] = NULL;
$arguments177['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array179 = array();
$array180 = array (
);$array179['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array180);
$array179['1'] = '==\'53\'';

$expression181 = function($context) {return (($context["node0"]) == '53');};
$arguments177['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression181(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array179)
					),
					$renderingContext
				);
$arguments177['__thenClosure'] = $renderChildrenClosure178;

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output163 .= '
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
$arguments194['partial'] = 'Shopangebote';

$output193 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output193 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$array198 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array198);
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
$array190['1'] = '==\'55\'';

$expression192 = function($context) {return (($context["node0"]) == '55');};
$arguments188['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression192(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array190)
					),
					$renderingContext
				);
$arguments188['__thenClosure'] = $renderChildrenClosure189;

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output163 .= '
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
$arguments205['partial'] = 'Abschliessen';

$output204 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output204 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$array209 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array209);
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
$array201['1'] = '==\'56\'';

$expression203 = function($context) {return (($context["node0"]) == '56');};
$arguments199['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression203(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array201)
					),
					$renderingContext
				);
$arguments199['__thenClosure'] = $renderChildrenClosure200;

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output163 .= '
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['section'] = NULL;
$arguments216['partial'] = NULL;
$arguments216['delegate'] = NULL;
$arguments216['arguments'] = array (
);
$arguments216['optional'] = false;
$arguments216['default'] = NULL;
$arguments216['contentAs'] = NULL;
$arguments216['partial'] = 'Warenkorb';

$output215 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output215 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$array220 = array (
);return $renderingContext->getVariableProvider()->getByPath('content0', $array220);
};
$arguments218 = array();
$arguments218['value'] = NULL;

$output215 .= isset($arguments218['value']) ? $arguments218['value'] : $renderChildrenClosure219();

$output215 .= '
      ';
return $output215;
};
$arguments210 = array();
$arguments210['then'] = NULL;
$arguments210['else'] = NULL;
$arguments210['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array212 = array();
$array213 = array (
);$array212['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array213);
$array212['1'] = '==\'58\'';

$expression214 = function($context) {return (($context["node0"]) == '58');};
$arguments210['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression214(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)
					),
					$renderingContext
				);
$arguments210['__thenClosure'] = $renderChildrenClosure211;

$output163 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output163 .= '
    </div>
  </div>
';
return $output163;
};
$arguments161 = array();
$arguments161['name'] = NULL;
$arguments161['name'] = '1spalte';

$output105 .= '';

$output105 .= '
';

return $output105;
}


}
#