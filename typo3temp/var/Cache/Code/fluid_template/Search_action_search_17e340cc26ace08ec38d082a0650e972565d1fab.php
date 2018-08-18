<?php

class Search_action_search_17e340cc26ace08ec38d082a0650e972565d1fab extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'is' => 
  array (
    0 => 'TYPO3\\CMS\\IndexedSearch\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['section'] = NULL;
$arguments6['partial'] = NULL;
$arguments6['delegate'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['optional'] = false;
$arguments6['default'] = NULL;
$arguments6['contentAs'] = NULL;
$arguments6['partial'] = 'Form';
$arguments6['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
';
return $output5;
};
$arguments1 = array();
$arguments1['map'] = NULL;
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['sword'] = $renderingContext->getVariableProvider()->getByPath('searchParams.sword', $array4);
$arguments1['map'] = $array3;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
		<h1 class="tx-indexedsearch-category">';
$array19 = array (
);
$output18 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('result.categoryTitle', $array19), ENT_QUOTES);

$output18 .= '</h1>
	';
return $output18;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('result.categoryTitle', $array16);

$expression17 = function($context) {return ($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = $renderChildrenClosure14;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
	<!-- show the info what was searched for -->
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['key'] = NULL;
$arguments43['id'] = NULL;
$arguments43['default'] = NULL;
$arguments43['htmlEscape'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['extensionName'] = NULL;
$output45 = '';

$output45 .= 'searchFor.';
$array46 = array (
);
$output45 .= $renderingContext->getVariableProvider()->getByPath('searchWord.oper', $array46);
$arguments43['key'] = $output45;

$output42 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext), ENT_QUOTES);

$output42 .= '&nbsp;';
$array47 = array (
);
$output42 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('searchWord.sword', $array47), ENT_QUOTES);

$output42 .= '
			';
return $output42;
};
$arguments40 = array();

$output39 .= '';

$output39 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['key'] = NULL;
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['htmlEscape'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['key'] = 'searchFor';

$output50 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext), ENT_QUOTES);

$output50 .= '&nbsp;';
$array53 = array (
);
$output50 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('searchWord.sword', $array53), ENT_QUOTES);

$output50 .= '
			';
return $output50;
};
$arguments48 = array();
$arguments48['if'] = NULL;

$output39 .= '';

$output39 .= '
		';
return $output39;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = $renderingContext->getVariableProvider()->getByPath('key', $array37);
$array36['1'] = ' > 0';

$expression38 = function($context) {return (($context["node0"]) > 0);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$output29 = '';

$output29 .= 'searchFor.';
$array30 = array (
);
$output29 .= $renderingContext->getVariableProvider()->getByPath('searchWord.oper', $array30);
$arguments27['key'] = $output29;

$output26 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext), ENT_QUOTES);

$output26 .= '&nbsp;';
$array31 = array (
);
$output26 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('searchWord.sword', $array31), ENT_QUOTES);

$output26 .= '
			';
return $output26;
};
$arguments24['__elseClosures'][] = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['key'] = NULL;
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['htmlEscape'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$arguments33['key'] = 'searchFor';

$output32 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext), ENT_QUOTES);

$output32 .= '&nbsp;';
$array35 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('searchWord.sword', $array35), ENT_QUOTES);

$output32 .= '
			';
return $output32;
};

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
	';
return $output23;
};
$arguments20 = array();
$arguments20['each'] = NULL;
$arguments20['as'] = NULL;
$arguments20['key'] = NULL;
$arguments20['reverse'] = false;
$arguments20['iteration'] = NULL;
$array22 = array (
);$arguments20['each'] = $renderingContext->getVariableProvider()->getByPath('searchWords', $array22);
$arguments20['as'] = 'searchWord';
$arguments20['key'] = 'key';

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output12 .= '
	<!-- show the info in which section was searched for -->
	';
$array54 = array (
);
$output12 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('result.searchedInSectionInfo', $array54), ENT_QUOTES);

$output12 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
			<div class="tx-indexedsearch-browsebox">
				<p>
					';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingResultsViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['numberOfResults'] = NULL;
$arguments180['resultsPerPage'] = NULL;
$arguments180['currentPage'] = 1;
$array182 = array (
);$arguments180['numberOfResults'] = $renderingContext->getVariableProvider()->getByPath('result.count', $array182);
$array183 = array (
);$arguments180['currentPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.pointer', $array183);
$array184 = array (
);$arguments180['resultsPerPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.numberOfResults', $array184);

$output179 .= TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingResultsViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
					';
$array185 = array (
);
$output179 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('result.sectionText', $array185), ENT_QUOTES);

$output179 .= '
				</p>
				<!-- render the anchor-links to the sections inside the displayed result rows -->
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
					<div class="tx-indexedsearch-sectionlinks">
						<table cellpadding="0" cellspacing="0" border="0" summary="Result links">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output195 = '';

$output195 .= '
								<tr>
									<td width="100%">--&gt;&nbsp;
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$array217 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('sectionData.0', $array217), ENT_QUOTES);
};
$arguments215 = array();

$output214 .= '';

$output214 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['key'] = NULL;
$arguments220['id'] = NULL;
$arguments220['default'] = NULL;
$arguments220['htmlEscape'] = NULL;
$arguments220['arguments'] = NULL;
$arguments220['extensionName'] = NULL;
$arguments220['key'] = 'unnamedSection';
return htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext), ENT_QUOTES);
};
$arguments218 = array();
$arguments218['if'] = NULL;

$output214 .= '';

$output214 .= '
											';
return $output214;
};
$arguments206 = array();
$arguments206['then'] = NULL;
$arguments206['else'] = NULL;
$arguments206['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array211 = array();
$array212 = array (
);$array211['0'] = $renderingContext->getVariableProvider()->getByPath('sectionData.0', $array212);

$expression213 = function($context) {return ($context["node0"]);};
$arguments206['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression213(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array211)
					),
					$renderingContext
				);
$arguments206['__thenClosure'] = function() use ($renderingContext, $self) {
$array208 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('sectionData.0', $array208), ENT_QUOTES);
};
$arguments206['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['key'] = NULL;
$arguments209['id'] = NULL;
$arguments209['default'] = NULL;
$arguments209['htmlEscape'] = NULL;
$arguments209['arguments'] = NULL;
$arguments209['extensionName'] = NULL;
$arguments209['key'] = 'unnamedSection';
return htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext), ENT_QUOTES);
};

$output205 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '
											&nbsp;(';
$array222 = array (
);
$output205 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('sectionData.1', $array222), ENT_QUOTES);

$output205 .= '&nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['key'] = NULL;
$arguments223['id'] = NULL;
$arguments223['default'] = NULL;
$arguments223['htmlEscape'] = NULL;
$arguments223['arguments'] = NULL;
$arguments223['extensionName'] = NULL;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['then'] = NULL;
$arguments225['else'] = NULL;
$arguments225['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array227 = array();
$array228 = array (
);$array227['0'] = $renderingContext->getVariableProvider()->getByPath('sectionData.1', $array228);
$array227['1'] = ' > 1';

$expression229 = function($context) {return (($context["node0"]) > 1);};
$arguments225['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression229(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array227)
					),
					$renderingContext
				);
$arguments225['then'] = 'result.pages';
$arguments225['else'] = 'result.page';
$arguments223['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output205 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext), ENT_QUOTES);

$output205 .= ')
										';
return $output205;
};
$arguments196 = array();
$arguments196['pageUid'] = NULL;
$arguments196['additionalParams'] = array (
);
$arguments196['pageType'] = 0;
$arguments196['noCache'] = false;
$arguments196['noCacheHash'] = false;
$arguments196['section'] = '';
$arguments196['linkAccessRestrictedPages'] = false;
$arguments196['absolute'] = false;
$arguments196['addQueryString'] = false;
$arguments196['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments196['addQueryStringMethod'] = NULL;
$arguments196['additionalAttributes'] = NULL;
$arguments196['data'] = NULL;
$arguments196['class'] = NULL;
$arguments196['dir'] = NULL;
$arguments196['id'] = NULL;
$arguments196['lang'] = NULL;
$arguments196['style'] = NULL;
$arguments196['title'] = NULL;
$arguments196['accesskey'] = NULL;
$arguments196['tabindex'] = NULL;
$arguments196['onclick'] = NULL;
$arguments196['target'] = NULL;
$arguments196['rel'] = NULL;
$output198 = '';

$output198 .= 'anchor_';
$array199 = array (
);
$output198 .= $renderingContext->getVariableProvider()->getByPath('sectionId', $array199);
$arguments196['section'] = $output198;
// Rendering Boolean node
// Rendering Array
$array200 = array();
$array200['0'] = 1;

$expression201 = function($context) {return ($context["node0"]);};
$arguments196['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression201(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array200)
					),
					$renderingContext
				);
// Rendering Boolean node
// Rendering Array
$array202 = array();
$array202['0'] = 1;

$expression203 = function($context) {return ($context["node0"]);};
$arguments196['noCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression203(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array202)
					),
					$renderingContext
				);
// Rendering Array
$array204 = array();
$array204['0'] = 'id';
$arguments196['argumentsToBeExcludedFromQueryString'] = $array204;

$output195 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output195 .= '
									</td>
								</tr>
							';
return $output195;
};
$arguments192 = array();
$arguments192['each'] = NULL;
$arguments192['as'] = NULL;
$arguments192['key'] = NULL;
$arguments192['reverse'] = false;
$arguments192['iteration'] = NULL;
$array194 = array (
);$arguments192['each'] = $renderingContext->getVariableProvider()->getByPath('result.affectedSections', $array194);
$arguments192['as'] = 'sectionData';
$arguments192['key'] = 'sectionId';

$output191 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output191 .= '
						</table>
					</div>
				';
return $output191;
};
$arguments186 = array();
$arguments186['then'] = NULL;
$arguments186['else'] = NULL;
$arguments186['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array188 = array();
$array189 = array (
);$array188['0'] = $renderingContext->getVariableProvider()->getByPath('result.affectedSections', $array189);

$expression190 = function($context) {return ($context["node0"]);};
$arguments186['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression190(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array188)
					),
					$renderingContext
				);
$arguments186['__thenClosure'] = $renderChildrenClosure187;

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output179 .= '
				';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['maximumNumberOfResultPages'] = NULL;
$arguments230['numberOfResults'] = NULL;
$arguments230['resultsPerPage'] = NULL;
$arguments230['currentPage'] = 0;
$arguments230['freeIndexUid'] = NULL;
$array232 = array (
);$arguments230['maximumNumberOfResultPages'] = $renderingContext->getVariableProvider()->getByPath('settings.page_links', $array232);
$array233 = array (
);$arguments230['numberOfResults'] = $renderingContext->getVariableProvider()->getByPath('result.count', $array233);
$array234 = array (
);$arguments230['currentPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.pointer', $array234);
$array235 = array (
);$arguments230['resultsPerPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.numberOfResults', $array235);

$output179 .= TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output179 .= '
			</div>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
					<div id="anchor_';
$array267 = array (
);
$output266 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('row.sectionId', $array267), ENT_QUOTES);

$output266 .= '" class="tx-indexedsearch-sectionhead">
						<h2 class="tx-indexedsearch-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$array270 = array (
);return $renderingContext->getVariableProvider()->getByPath('row.sectionTitle', $array270);
};
$arguments268 = array();
$arguments268['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output266 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output266 .= ' <span class="tx-indexedsearch-result-count">';
$array271 = array (
);
$output266 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array271), ENT_QUOTES);

$output266 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['key'] = NULL;
$arguments272['id'] = NULL;
$arguments272['default'] = NULL;
$arguments272['htmlEscape'] = NULL;
$arguments272['arguments'] = NULL;
$arguments272['extensionName'] = NULL;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments274 = array();
$arguments274['then'] = NULL;
$arguments274['else'] = NULL;
$arguments274['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array276 = array();
$array277 = array (
);$array276['0'] = $renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array277);
$array276['1'] = ' > 1';

$expression278 = function($context) {return (($context["node0"]) > 1);};
$arguments274['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression278(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array276)
					),
					$renderingContext
				);
$arguments274['then'] = 'result.pages';
$arguments274['else'] = 'result.page';
$arguments272['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output266 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext), ENT_QUOTES);

$output266 .= '</span></h2>
					</div>
					';
return $output266;
};
$arguments264 = array();

$output263 .= '';

$output263 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$output281 = '';

$output281 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['section'] = NULL;
$arguments282['partial'] = NULL;
$arguments282['delegate'] = NULL;
$arguments282['arguments'] = array (
);
$arguments282['optional'] = false;
$arguments282['default'] = NULL;
$arguments282['contentAs'] = NULL;
$arguments282['partial'] = 'Searchresult';
// Rendering Array
$array284 = array();
$array285 = array (
);$array284['row'] = $renderingContext->getVariableProvider()->getByPath('row', $array285);
$arguments282['arguments'] = $array284;

$output281 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output281 .= '
					';
return $output281;
};
$arguments279 = array();
$arguments279['if'] = NULL;

$output263 .= '';

$output263 .= '
				';
return $output263;
};
$arguments240 = array();
$arguments240['then'] = NULL;
$arguments240['else'] = NULL;
$arguments240['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array260 = array();
$array261 = array (
);$array260['0'] = $renderingContext->getVariableProvider()->getByPath('row.isSectionHeader', $array261);

$expression262 = function($context) {return ($context["node0"]);};
$arguments240['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression262(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array260)
					),
					$renderingContext
				);
$arguments240['__thenClosure'] = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
					<div id="anchor_';
$array243 = array (
);
$output242 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('row.sectionId', $array243), ENT_QUOTES);

$output242 .= '" class="tx-indexedsearch-sectionhead">
						<h2 class="tx-indexedsearch-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$array246 = array (
);return $renderingContext->getVariableProvider()->getByPath('row.sectionTitle', $array246);
};
$arguments244 = array();
$arguments244['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output242 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output242 .= ' <span class="tx-indexedsearch-result-count">';
$array247 = array (
);
$output242 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array247), ENT_QUOTES);

$output242 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['key'] = NULL;
$arguments248['id'] = NULL;
$arguments248['default'] = NULL;
$arguments248['htmlEscape'] = NULL;
$arguments248['arguments'] = NULL;
$arguments248['extensionName'] = NULL;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments250 = array();
$arguments250['then'] = NULL;
$arguments250['else'] = NULL;
$arguments250['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array252 = array();
$array253 = array (
);$array252['0'] = $renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array253);
$array252['1'] = ' > 1';

$expression254 = function($context) {return (($context["node0"]) > 1);};
$arguments250['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression254(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array252)
					),
					$renderingContext
				);
$arguments250['then'] = 'result.pages';
$arguments250['else'] = 'result.page';
$arguments248['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output242 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext), ENT_QUOTES);

$output242 .= '</span></h2>
					</div>
					';
return $output242;
};
$arguments240['__elseClosures'][] = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['section'] = NULL;
$arguments256['partial'] = NULL;
$arguments256['delegate'] = NULL;
$arguments256['arguments'] = array (
);
$arguments256['optional'] = false;
$arguments256['default'] = NULL;
$arguments256['contentAs'] = NULL;
$arguments256['partial'] = 'Searchresult';
// Rendering Array
$array258 = array();
$array259 = array (
);$array258['row'] = $renderingContext->getVariableProvider()->getByPath('row', $array259);
$arguments256['arguments'] = $array258;

$output255 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output255 .= '
					';
return $output255;
};

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output239 .= '
			';
return $output239;
};
$arguments236 = array();
$arguments236['each'] = NULL;
$arguments236['as'] = NULL;
$arguments236['key'] = NULL;
$arguments236['reverse'] = false;
$arguments236['iteration'] = NULL;
$array238 = array (
);$arguments236['each'] = $renderingContext->getVariableProvider()->getByPath('result.rows', $array238);
$arguments236['as'] = 'row';

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output179 .= '
			<div class="tx-indexedsearch-browsebox">
				';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['maximumNumberOfResultPages'] = NULL;
$arguments286['numberOfResults'] = NULL;
$arguments286['resultsPerPage'] = NULL;
$arguments286['currentPage'] = 0;
$arguments286['freeIndexUid'] = NULL;
$array288 = array (
);$arguments286['numberOfResults'] = $renderingContext->getVariableProvider()->getByPath('result.count', $array288);
$array289 = array (
);$arguments286['maximumNumberOfResultPages'] = $renderingContext->getVariableProvider()->getByPath('settings.page_links', $array289);
$array290 = array (
);$arguments286['currentPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.pointer', $array290);
$array291 = array (
);$arguments286['resultsPerPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.numberOfResults', $array291);

$output179 .= TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output179 .= '
			</div>
		';
return $output179;
};
$arguments177 = array();

$output176 .= '';

$output176 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$output294 = '';

$output294 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments295 = array();
$arguments295['key'] = NULL;
$arguments295['id'] = NULL;
$arguments295['default'] = NULL;
$arguments295['htmlEscape'] = NULL;
$arguments295['arguments'] = NULL;
$arguments295['extensionName'] = NULL;
$arguments295['key'] = 'result.noResult';

$output294 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext), ENT_QUOTES);

$output294 .= '
		';
return $output294;
};
$arguments292 = array();
$arguments292['if'] = NULL;

$output176 .= '';

$output176 .= '
	';
return $output176;
};
$arguments55 = array();
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$arguments55['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array173 = array();
$array174 = array (
);$array173['0'] = $renderingContext->getVariableProvider()->getByPath('result.count', $array174);
$array173['1'] = ' > 0';

$expression175 = function($context) {return (($context["node0"]) > 0);};
$arguments55['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression175(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array173)
					),
					$renderingContext
				);
$arguments55['__thenClosure'] = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
			<div class="tx-indexedsearch-browsebox">
				<p>
					';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingResultsViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['numberOfResults'] = NULL;
$arguments58['resultsPerPage'] = NULL;
$arguments58['currentPage'] = 1;
$array60 = array (
);$arguments58['numberOfResults'] = $renderingContext->getVariableProvider()->getByPath('result.count', $array60);
$array61 = array (
);$arguments58['currentPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.pointer', $array61);
$array62 = array (
);$arguments58['resultsPerPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.numberOfResults', $array62);

$output57 .= TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingResultsViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
					';
$array63 = array (
);
$output57 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('result.sectionText', $array63), ENT_QUOTES);

$output57 .= '
				</p>
				<!-- render the anchor-links to the sections inside the displayed result rows -->
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
					<div class="tx-indexedsearch-sectionlinks">
						<table cellpadding="0" cellspacing="0" border="0" summary="Result links">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
								<tr>
									<td width="100%">--&gt;&nbsp;
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$array95 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('sectionData.0', $array95), ENT_QUOTES);
};
$arguments93 = array();

$output92 .= '';

$output92 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['key'] = NULL;
$arguments98['id'] = NULL;
$arguments98['default'] = NULL;
$arguments98['htmlEscape'] = NULL;
$arguments98['arguments'] = NULL;
$arguments98['extensionName'] = NULL;
$arguments98['key'] = 'unnamedSection';
return htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext), ENT_QUOTES);
};
$arguments96 = array();
$arguments96['if'] = NULL;

$output92 .= '';

$output92 .= '
											';
return $output92;
};
$arguments84 = array();
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$arguments84['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['0'] = $renderingContext->getVariableProvider()->getByPath('sectionData.0', $array90);

$expression91 = function($context) {return ($context["node0"]);};
$arguments84['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
$arguments84['__thenClosure'] = function() use ($renderingContext, $self) {
$array86 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('sectionData.0', $array86), ENT_QUOTES);
};
$arguments84['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['key'] = NULL;
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['htmlEscape'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['key'] = 'unnamedSection';
return htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext), ENT_QUOTES);
};

$output83 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
											&nbsp;(';
$array100 = array (
);
$output83 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('sectionData.1', $array100), ENT_QUOTES);

$output83 .= '&nbsp;';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['key'] = NULL;
$arguments101['id'] = NULL;
$arguments101['default'] = NULL;
$arguments101['htmlEscape'] = NULL;
$arguments101['arguments'] = NULL;
$arguments101['extensionName'] = NULL;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['0'] = $renderingContext->getVariableProvider()->getByPath('sectionData.1', $array106);
$array105['1'] = ' > 1';

$expression107 = function($context) {return (($context["node0"]) > 1);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)
					),
					$renderingContext
				);
$arguments103['then'] = 'result.pages';
$arguments103['else'] = 'result.page';
$arguments101['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output83 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext), ENT_QUOTES);

$output83 .= ')
										';
return $output83;
};
$arguments74 = array();
$arguments74['pageUid'] = NULL;
$arguments74['additionalParams'] = array (
);
$arguments74['pageType'] = 0;
$arguments74['noCache'] = false;
$arguments74['noCacheHash'] = false;
$arguments74['section'] = '';
$arguments74['linkAccessRestrictedPages'] = false;
$arguments74['absolute'] = false;
$arguments74['addQueryString'] = false;
$arguments74['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments74['addQueryStringMethod'] = NULL;
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['class'] = NULL;
$arguments74['dir'] = NULL;
$arguments74['id'] = NULL;
$arguments74['lang'] = NULL;
$arguments74['style'] = NULL;
$arguments74['title'] = NULL;
$arguments74['accesskey'] = NULL;
$arguments74['tabindex'] = NULL;
$arguments74['onclick'] = NULL;
$arguments74['target'] = NULL;
$arguments74['rel'] = NULL;
$output76 = '';

$output76 .= 'anchor_';
$array77 = array (
);
$output76 .= $renderingContext->getVariableProvider()->getByPath('sectionId', $array77);
$arguments74['section'] = $output76;
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array78['0'] = 1;

$expression79 = function($context) {return ($context["node0"]);};
$arguments74['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression79(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
// Rendering Boolean node
// Rendering Array
$array80 = array();
$array80['0'] = 1;

$expression81 = function($context) {return ($context["node0"]);};
$arguments74['noCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
// Rendering Array
$array82 = array();
$array82['0'] = 'id';
$arguments74['argumentsToBeExcludedFromQueryString'] = $array82;

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
									</td>
								</tr>
							';
return $output73;
};
$arguments70 = array();
$arguments70['each'] = NULL;
$arguments70['as'] = NULL;
$arguments70['key'] = NULL;
$arguments70['reverse'] = false;
$arguments70['iteration'] = NULL;
$array72 = array (
);$arguments70['each'] = $renderingContext->getVariableProvider()->getByPath('result.affectedSections', $array72);
$arguments70['as'] = 'sectionData';
$arguments70['key'] = 'sectionId';

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
						</table>
					</div>
				';
return $output69;
};
$arguments64 = array();
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$arguments64['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array66 = array();
$array67 = array (
);$array66['0'] = $renderingContext->getVariableProvider()->getByPath('result.affectedSections', $array67);

$expression68 = function($context) {return ($context["node0"]);};
$arguments64['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression68(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);
$arguments64['__thenClosure'] = $renderChildrenClosure65;

$output57 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output57 .= '
				';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['maximumNumberOfResultPages'] = NULL;
$arguments108['numberOfResults'] = NULL;
$arguments108['resultsPerPage'] = NULL;
$arguments108['currentPage'] = 0;
$arguments108['freeIndexUid'] = NULL;
$array110 = array (
);$arguments108['maximumNumberOfResultPages'] = $renderingContext->getVariableProvider()->getByPath('settings.page_links', $array110);
$array111 = array (
);$arguments108['numberOfResults'] = $renderingContext->getVariableProvider()->getByPath('result.count', $array111);
$array112 = array (
);$arguments108['currentPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.pointer', $array112);
$array113 = array (
);$arguments108['resultsPerPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.numberOfResults', $array113);

$output57 .= TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output57 .= '
			</div>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
					<div id="anchor_';
$array145 = array (
);
$output144 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('row.sectionId', $array145), ENT_QUOTES);

$output144 .= '" class="tx-indexedsearch-sectionhead">
						<h2 class="tx-indexedsearch-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$array148 = array (
);return $renderingContext->getVariableProvider()->getByPath('row.sectionTitle', $array148);
};
$arguments146 = array();
$arguments146['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output144 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output144 .= ' <span class="tx-indexedsearch-result-count">';
$array149 = array (
);
$output144 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array149), ENT_QUOTES);

$output144 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['key'] = NULL;
$arguments150['id'] = NULL;
$arguments150['default'] = NULL;
$arguments150['htmlEscape'] = NULL;
$arguments150['arguments'] = NULL;
$arguments150['extensionName'] = NULL;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['then'] = NULL;
$arguments152['else'] = NULL;
$arguments152['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array154 = array();
$array155 = array (
);$array154['0'] = $renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array155);
$array154['1'] = ' > 1';

$expression156 = function($context) {return (($context["node0"]) > 1);};
$arguments152['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)
					),
					$renderingContext
				);
$arguments152['then'] = 'result.pages';
$arguments152['else'] = 'result.page';
$arguments150['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output144 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext), ENT_QUOTES);

$output144 .= '</span></h2>
					</div>
					';
return $output144;
};
$arguments142 = array();

$output141 .= '';

$output141 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['section'] = NULL;
$arguments160['partial'] = NULL;
$arguments160['delegate'] = NULL;
$arguments160['arguments'] = array (
);
$arguments160['optional'] = false;
$arguments160['default'] = NULL;
$arguments160['contentAs'] = NULL;
$arguments160['partial'] = 'Searchresult';
// Rendering Array
$array162 = array();
$array163 = array (
);$array162['row'] = $renderingContext->getVariableProvider()->getByPath('row', $array163);
$arguments160['arguments'] = $array162;

$output159 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output159 .= '
					';
return $output159;
};
$arguments157 = array();
$arguments157['if'] = NULL;

$output141 .= '';

$output141 .= '
				';
return $output141;
};
$arguments118 = array();
$arguments118['then'] = NULL;
$arguments118['else'] = NULL;
$arguments118['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['0'] = $renderingContext->getVariableProvider()->getByPath('row.isSectionHeader', $array139);

$expression140 = function($context) {return ($context["node0"]);};
$arguments118['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression140(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array138)
					),
					$renderingContext
				);
$arguments118['__thenClosure'] = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
					<div id="anchor_';
$array121 = array (
);
$output120 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('row.sectionId', $array121), ENT_QUOTES);

$output120 .= '" class="tx-indexedsearch-sectionhead">
						<h2 class="tx-indexedsearch-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$array124 = array (
);return $renderingContext->getVariableProvider()->getByPath('row.sectionTitle', $array124);
};
$arguments122 = array();
$arguments122['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output120 .= ' <span class="tx-indexedsearch-result-count">';
$array125 = array (
);
$output120 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array125), ENT_QUOTES);

$output120 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['key'] = NULL;
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['htmlEscape'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['then'] = NULL;
$arguments128['else'] = NULL;
$arguments128['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array130 = array();
$array131 = array (
);$array130['0'] = $renderingContext->getVariableProvider()->getByPath('row.numResultRows', $array131);
$array130['1'] = ' > 1';

$expression132 = function($context) {return (($context["node0"]) > 1);};
$arguments128['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array130)
					),
					$renderingContext
				);
$arguments128['then'] = 'result.pages';
$arguments128['else'] = 'result.page';
$arguments126['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output120 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext), ENT_QUOTES);

$output120 .= '</span></h2>
					</div>
					';
return $output120;
};
$arguments118['__elseClosures'][] = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['section'] = NULL;
$arguments134['partial'] = NULL;
$arguments134['delegate'] = NULL;
$arguments134['arguments'] = array (
);
$arguments134['optional'] = false;
$arguments134['default'] = NULL;
$arguments134['contentAs'] = NULL;
$arguments134['partial'] = 'Searchresult';
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['row'] = $renderingContext->getVariableProvider()->getByPath('row', $array137);
$arguments134['arguments'] = $array136;

$output133 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
					';
return $output133;
};

$output117 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
			';
return $output117;
};
$arguments114 = array();
$arguments114['each'] = NULL;
$arguments114['as'] = NULL;
$arguments114['key'] = NULL;
$arguments114['reverse'] = false;
$arguments114['iteration'] = NULL;
$array116 = array (
);$arguments114['each'] = $renderingContext->getVariableProvider()->getByPath('result.rows', $array116);
$arguments114['as'] = 'row';

$output57 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output57 .= '
			<div class="tx-indexedsearch-browsebox">
				';
// Rendering ViewHelper TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['maximumNumberOfResultPages'] = NULL;
$arguments164['numberOfResults'] = NULL;
$arguments164['resultsPerPage'] = NULL;
$arguments164['currentPage'] = 0;
$arguments164['freeIndexUid'] = NULL;
$array166 = array (
);$arguments164['numberOfResults'] = $renderingContext->getVariableProvider()->getByPath('result.count', $array166);
$array167 = array (
);$arguments164['maximumNumberOfResultPages'] = $renderingContext->getVariableProvider()->getByPath('settings.page_links', $array167);
$array168 = array (
);$arguments164['currentPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.pointer', $array168);
$array169 = array (
);$arguments164['resultsPerPage'] = $renderingContext->getVariableProvider()->getByPath('searchParams.numberOfResults', $array169);

$output57 .= TYPO3\CMS\IndexedSearch\ViewHelpers\PageBrowsingViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output57 .= '
			</div>
		';
return $output57;
};
$arguments55['__elseClosures'][] = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['key'] = NULL;
$arguments171['id'] = NULL;
$arguments171['default'] = NULL;
$arguments171['htmlEscape'] = NULL;
$arguments171['arguments'] = NULL;
$arguments171['extensionName'] = NULL;
$arguments171['key'] = 'result.noResult';

$output170 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext), ENT_QUOTES);

$output170 .= '
		';
return $output170;
};

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output12 .= '
';
return $output12;
};
$arguments9 = array();
$arguments9['each'] = NULL;
$arguments9['as'] = NULL;
$arguments9['key'] = NULL;
$arguments9['reverse'] = false;
$arguments9['iteration'] = NULL;
$array11 = array (
);$arguments9['each'] = $renderingContext->getVariableProvider()->getByPath('resultsets', $array11);
$arguments9['as'] = 'result';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#