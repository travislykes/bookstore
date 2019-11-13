<?php

class partial_RecordHistory_History_de4cfb7f18e7c6ace39048babbfb676aac21b0c6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
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

<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:changes';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h2>
<div>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['languageKey'] = NULL;
$arguments7['alternativeLanguageKeys'] = NULL;
$arguments7['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:differenceMsg';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);
};
$arguments5 = array();
$arguments5['value'] = NULL;
return isset($arguments5['value']) ? $arguments5['value'] : $renderChildrenClosure6();
};
$arguments3 = array();
$arguments3['message'] = NULL;
$arguments3['title'] = NULL;
$arguments3['state'] = -2;
$arguments3['iconName'] = NULL;
$arguments3['disableIcon'] = false;
$arguments3['state'] = -1;
$renderChildrenClosure4 = ($arguments3['message'] !== null) ? function() use ($arguments3) { return $arguments3['message']; } : $renderChildrenClosure4;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
	<table class="table table-striped table-hover table-vertical-top" id="typo3-history">
		<thead>
		<tr>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:rollback';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '</th>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:time';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output0 .= '</th>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['languageKey'] = NULL;
$arguments13['alternativeLanguageKeys'] = NULL;
$arguments13['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:age';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output0 .= '</th>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['languageKey'] = NULL;
$arguments15['alternativeLanguageKeys'] = NULL;
$arguments15['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:user';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output0 .= '</th>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:tableUid';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output0 .= '</th>
			<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:differences';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output0 .= '</th>
		</tr>
		</thead>
		<tbody>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
			<tr>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
							<button class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['key'] = NULL;
$arguments45['id'] = NULL;
$arguments45['default'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['extensionName'] = NULL;
$arguments45['languageKey'] = NULL;
$arguments45['alternativeLanguageKeys'] = NULL;
$arguments45['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:editLockIsActive';

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output44 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['identifier'] = NULL;
$arguments47['size'] = 'small';
$arguments47['overlay'] = NULL;
$arguments47['state'] = 'default';
$arguments47['alternativeMarkupIdentifier'] = NULL;
$arguments47['identifier'] = 'actions-document-history-open';

$output44 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output44 .= '
							</button>
						';
return $output44;
};
$arguments42 = array();

$output41 .= '';

$output41 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
							<a class="btn btn-default" href="';
$array52 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('historyRow.diffUrl', $array52)]);

$output51 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['key'] = NULL;
$arguments53['id'] = NULL;
$arguments53['default'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['extensionName'] = NULL;
$arguments53['languageKey'] = NULL;
$arguments53['alternativeLanguageKeys'] = NULL;
$arguments53['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:sumUpChanges';

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output51 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['identifier'] = NULL;
$arguments55['size'] = 'small';
$arguments55['overlay'] = NULL;
$arguments55['state'] = 'default';
$arguments55['alternativeMarkupIdentifier'] = NULL;
$arguments55['identifier'] = 'actions-document-history-open';

$output51 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output51 .= '
							</a>
						';
return $output51;
};
$arguments49 = array();
$arguments49['if'] = NULL;

$output41 .= '';

$output41 .= '
					';
return $output41;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['0'] = $renderingContext->getVariableProvider()->getByPath('editLock', $array39);

$expression40 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
							<button class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['languageKey'] = NULL;
$arguments28['alternativeLanguageKeys'] = NULL;
$arguments28['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:editLockIsActive';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output27 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['identifier'] = NULL;
$arguments30['size'] = 'small';
$arguments30['overlay'] = NULL;
$arguments30['state'] = 'default';
$arguments30['alternativeMarkupIdentifier'] = NULL;
$arguments30['identifier'] = 'actions-document-history-open';

$output27 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output27 .= '
							</button>
						';
return $output27;
};
$arguments25['__elseClosures'][] = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
							<a class="btn btn-default" href="';
$array33 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('historyRow.diffUrl', $array33)]);

$output32 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['key'] = NULL;
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['languageKey'] = NULL;
$arguments34['alternativeLanguageKeys'] = NULL;
$arguments34['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:sumUpChanges';

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output32 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['identifier'] = NULL;
$arguments36['size'] = 'small';
$arguments36['overlay'] = NULL;
$arguments36['state'] = 'default';
$arguments36['alternativeMarkupIdentifier'] = NULL;
$arguments36['identifier'] = 'actions-document-history-open';

$output32 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output32 .= '
							</a>
						';
return $output32;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
				</td>
				<td>';
$array57 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('historyRow.time', $array57)]);

$output24 .= '</td>
				<td>';
$array58 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('historyRow.age', $array58)]);

$output24 .= '</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['backendUser'] = 0;
$arguments59['size'] = 32;
$arguments59['showIcon'] = false;
$array61 = array (
);$arguments59['backendUser'] = $renderingContext->getVariableProvider()->getByPath('historyRow.backendUserUid', $array61);

$output24 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output24 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
							';
$array76 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('historyRow.backendUserName', $array76)]);

$output75 .= '
						';
return $output75;
};
$arguments73 = array();

$output72 .= '';

$output72 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['key'] = NULL;
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$arguments80['languageKey'] = NULL;
$arguments80['alternativeLanguageKeys'] = NULL;
$arguments80['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:externalChange';

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext)]);

$output79 .= '
						';
return $output79;
};
$arguments77 = array();
$arguments77['if'] = NULL;

$output72 .= '';

$output72 .= '
					';
return $output72;
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('historyRow.backendUserUid', $array70);

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
							';
$array65 = array (
);
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('historyRow.backendUserName', $array65)]);

$output64 .= '
						';
return $output64;
};
$arguments62['__elseClosures'][] = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['key'] = NULL;
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['languageKey'] = NULL;
$arguments67['alternativeLanguageKeys'] = NULL;
$arguments67['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:externalChange';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output66 .= '
						';
return $output66;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output24 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['key'] = NULL;
$arguments88['id'] = NULL;
$arguments88['default'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['extensionName'] = NULL;
$arguments88['languageKey'] = NULL;
$arguments88['alternativeLanguageKeys'] = NULL;
$arguments88['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:viaUser';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext)]);

$output87 .= ' ';
$array90 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('historyRow.originalBackendUserName', $array90)]);

$output87 .= ')';
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
);$array84['0'] = $renderingContext->getVariableProvider()->getByPath('historyRow.originalBackendUserName', $array85);

$expression86 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$arguments82['__thenClosure'] = $renderChildrenClosure83;

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output24 .= '
				</td>
				<td>
					<a href="';
$array91 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('elementUrl', $array91)]);

$output24 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['key'] = NULL;
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$arguments92['languageKey'] = NULL;
$arguments92['alternativeLanguageKeys'] = NULL;
$arguments92['id'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:linkRecordHistory';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext)]);

$output24 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array96 = array (
);return $renderingContext->getVariableProvider()->getByPath('historyRow.title', $array96);
};
$arguments94 = array();
$arguments94['value'] = NULL;

$output24 .= isset($arguments94['value']) ? $arguments94['value'] : $renderChildrenClosure95();

$output24 .= '</a>
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
							<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['key'] = NULL;
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['languageKey'] = NULL;
$arguments128['alternativeLanguageKeys'] = NULL;
$arguments128['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:insert';

$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext)]);

$output127 .= '</strong>
						';
return $output127;
};
$arguments125 = array();
$arguments125['value'] = NULL;
$arguments125['value'] = 1;

$output124 .= '';

$output124 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
							<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['key'] = NULL;
$arguments133['id'] = NULL;
$arguments133['default'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['languageKey'] = NULL;
$arguments133['alternativeLanguageKeys'] = NULL;
$arguments133['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:delete';

$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);

$output132 .= '</strong>
						';
return $output132;
};
$arguments130 = array();
$arguments130['value'] = NULL;
$arguments130['value'] = 4;

$output124 .= '';

$output124 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
							<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['key'] = NULL;
$arguments138['id'] = NULL;
$arguments138['default'] = NULL;
$arguments138['arguments'] = NULL;
$arguments138['extensionName'] = NULL;
$arguments138['languageKey'] = NULL;
$arguments138['alternativeLanguageKeys'] = NULL;
$arguments138['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:insert';

$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext)]);

$output137 .= '</strong>
						';
return $output137;
};
$arguments135 = array();
$arguments135['value'] = NULL;
$arguments135['value'] = 5;

$output124 .= '';

$output124 .= '
					';
return $output124;
};
$arguments97 = array();
$arguments97['expression'] = NULL;
$array123 = array (
);$arguments97['expression'] = $renderingContext->getVariableProvider()->getByPath('historyRow.actiontype', $array123);

$output24 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 1;
}): return call_user_func(function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
							<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['key'] = NULL;
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['extensionName'] = NULL;
$arguments100['languageKey'] = NULL;
$arguments100['alternativeLanguageKeys'] = NULL;
$arguments100['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:insert';

$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext)]);

$output99 .= '</strong>
						';
return $output99;
});
case call_user_func(function() use ($renderingContext, $self) {

return 4;
}): return call_user_func(function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
							<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['key'] = NULL;
$arguments108['id'] = NULL;
$arguments108['default'] = NULL;
$arguments108['arguments'] = NULL;
$arguments108['extensionName'] = NULL;
$arguments108['languageKey'] = NULL;
$arguments108['alternativeLanguageKeys'] = NULL;
$arguments108['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:delete';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext)]);

$output107 .= '</strong>
						';
return $output107;
});
case call_user_func(function() use ($renderingContext, $self) {

return 5;
}): return call_user_func(function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
							<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['key'] = NULL;
$arguments116['id'] = NULL;
$arguments116['default'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['extensionName'] = NULL;
$arguments116['languageKey'] = NULL;
$arguments116['alternativeLanguageKeys'] = NULL;
$arguments116['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:insert';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output115 .= '</strong>
						';
return $output115;
});
}
}, array($arguments97));

$output24 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
						';
$array146 = array (
);
$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('historyRow.fieldNames', $array146)]);

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
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('historyRow.fieldNames', $array143);

$expression144 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments140['__thenClosure'] = $renderChildrenClosure141;

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output24 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['section'] = NULL;
$arguments153['partial'] = NULL;
$arguments153['delegate'] = NULL;
$arguments153['renderable'] = NULL;
$arguments153['arguments'] = array (
);
$arguments153['optional'] = false;
$arguments153['default'] = NULL;
$arguments153['contentAs'] = NULL;
$arguments153['debug'] = true;
$arguments153['partial'] = 'RecordHistory/Diff';
// Rendering Array
$array155 = array();
$array156 = array (
);$array155['differences'] = $renderingContext->getVariableProvider()->getByPath('historyRow.differences', $array156);
$arguments153['arguments'] = $array155;

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

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
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('historyRow.differences', $array150);

$expression151 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments147['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments147['__thenClosure'] = $renderChildrenClosure148;

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output24 .= '
				</td>
			</tr>
		';
return $output24;
};
$arguments21 = array();
$arguments21['each'] = NULL;
$arguments21['as'] = NULL;
$arguments21['key'] = NULL;
$arguments21['reverse'] = false;
$arguments21['iteration'] = NULL;
$array23 = array (
);$arguments21['each'] = $renderingContext->getVariableProvider()->getByPath('history', $array23);
$arguments21['as'] = 'historyRow';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '
		</tbody>
	</table>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '
		<br/>
		<a href="';
$array163 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fullViewUrl', $array163)]);

$output162 .= '" class="btn btn-default">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['key'] = NULL;
$arguments164['id'] = NULL;
$arguments164['default'] = NULL;
$arguments164['arguments'] = NULL;
$arguments164['extensionName'] = NULL;
$arguments164['languageKey'] = NULL;
$arguments164['alternativeLanguageKeys'] = NULL;
$arguments164['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf:fullView';

$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext)]);

$output162 .= '</a>
	';
return $output162;
};
$arguments157 = array();
$arguments157['then'] = NULL;
$arguments157['else'] = NULL;
$arguments157['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array159 = array();
$array160 = array (
);$array159['0'] = $renderingContext->getVariableProvider()->getByPath('fullViewUrl', $array160);

$expression161 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments157['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression161(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array159)
					),
					$renderingContext
				);
$arguments157['__thenClosure'] = $renderChildrenClosure158;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output0 .= '
	<br/>
	<br/>
</div>
';

return $output0;
}


}
#