<?php

class Standard_action_index_4960e8fc3b44451a750864d7abba1475a9e08864 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
    <h3>';
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
$output9 = '';
$array10 = array (
);
$output9 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array10);

$output9 .= 'currentTemplate';
$arguments7['key'] = $output9;

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '</h3>
    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['table'] = NULL;
$arguments11['row'] = NULL;
$arguments11['size'] = 'small';
$arguments11['alternativeMarkupIdentifier'] = NULL;
$arguments11['table'] = 'sys_template';
$array13 = array (
);$arguments11['row'] = $renderingContext->getVariableProvider()->getByPath('templateRecord', $array13);

$output6 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output6 .= '
    <strong>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$array16 = array (
);return $renderingContext->getVariableProvider()->getByPath('linkWrappedTemplateTitle', $array16);
};
$arguments14 = array();
$arguments14['value'] = NULL;

$output6 .= isset($arguments14['value']) ? $arguments14['value'] : $renderChildrenClosure15();

$output6 .= '</strong>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '(';
$array23 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array23)]);

$output22 .= ')';
return $output22;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('siteTitle', $array20);

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = $renderChildrenClosure18;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output6 .= '
';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('existTemplate', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
    <div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
            ';
$array33 = array (
);
$output32 .= $renderingContext->getVariableProvider()->getByPath('manyTemplatesMenu', $array33);

$output32 .= '
        ';
return $output32;
};
$arguments30 = array();
$arguments30['value'] = NULL;

$output29 .= isset($arguments30['value']) ? $arguments30['value'] : $renderChildrenClosure31();

$output29 .= '
    </div>
';
return $output29;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('existTemplate', $array27);

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = $renderChildrenClosure25;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output0 .= '
<div style="padding-top: 5px;"></div>
<h2>';
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
$output36 = '';
$array37 = array (
);
$output36 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array37);

$output36 .= 'templateHierarchy';
$arguments34['key'] = $output36;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output0 .= '</h2>
<div>
    <div class="table-fit"><table class="table table-striped table-hover" id="ts-analyzer">
        <thead>
            <tr>
               <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['key'] = NULL;
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['languageKey'] = NULL;
$arguments38['alternativeLanguageKeys'] = NULL;
$output40 = '';
$array41 = array (
);
$output40 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array41);

$output40 .= 'title';
$arguments38['key'] = $output40;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output0 .= '</th>
               <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['key'] = NULL;
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['languageKey'] = NULL;
$arguments42['alternativeLanguageKeys'] = NULL;
$output44 = '';
$array45 = array (
);
$output44 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array45);

$output44 .= 'rootlevel';
$arguments42['key'] = $output44;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output0 .= '</th>
               <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['key'] = NULL;
$arguments46['id'] = NULL;
$arguments46['default'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['extensionName'] = NULL;
$arguments46['languageKey'] = NULL;
$arguments46['alternativeLanguageKeys'] = NULL;
$output48 = '';
$array49 = array (
);
$output48 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array49);

$output48 .= 'clearSetup';
$arguments46['key'] = $output48;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);

$output0 .= '</th>
               <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['languageKey'] = NULL;
$arguments50['alternativeLanguageKeys'] = NULL;
$output52 = '';
$array53 = array (
);
$output52 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array53);

$output52 .= 'clearConstants';
$arguments50['key'] = $output52;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output0 .= '</th>
               <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['key'] = NULL;
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['languageKey'] = NULL;
$arguments54['alternativeLanguageKeys'] = NULL;
$output56 = '';
$array57 = array (
);
$output56 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array57);

$output56 .= 'pid';
$arguments54['key'] = $output56;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output0 .= '</th>
               <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['languageKey'] = NULL;
$arguments58['alternativeLanguageKeys'] = NULL;
$output60 = '';
$array61 = array (
);
$output60 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array61);

$output60 .= 'rootline';
$arguments58['key'] = $output60;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output0 .= '</th>
               <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['key'] = NULL;
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['languageKey'] = NULL;
$arguments62['alternativeLanguageKeys'] = NULL;
$output64 = '';
$array65 = array (
);
$output64 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array65);

$output64 .= 'nextLevel';
$arguments62['key'] = $output64;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output0 .= '</th>
            </tr>
        </thead>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$array68 = array (
);return $renderingContext->getVariableProvider()->getByPath('hierarchy', $array68);
};
$arguments66 = array();
$arguments66['value'] = NULL;

$output0 .= isset($arguments66['value']) ? $arguments66['value'] : $renderChildrenClosure67();

$output0 .= '
    </table>
    </div>
</div>
<div style="padding-top: 5px;"></div>
<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['key'] = NULL;
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['languageKey'] = NULL;
$arguments69['alternativeLanguageKeys'] = NULL;
$output71 = '';
$array72 = array (
);
$output71 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array72);

$output71 .= 'completeTS';
$arguments69['key'] = $output71;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output0 .= '</h2>
<div>
    <p><a href="';
$array73 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleLink', $array73)]);

$output0 .= '" class="btn btn-default">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['key'] = NULL;
$arguments74['id'] = NULL;
$arguments74['default'] = NULL;
$arguments74['arguments'] = NULL;
$arguments74['extensionName'] = NULL;
$arguments74['languageKey'] = NULL;
$arguments74['alternativeLanguageKeys'] = NULL;
$output76 = '';
$array77 = array (
);
$output76 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array77);

$output76 .= 'viewCompleteTS';
$arguments74['key'] = $output76;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext)]);

$output0 .= '
    </a></p>
</div>
<div style="padding-top: 15px;"></div>
<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['key'] = NULL;
$arguments78['id'] = NULL;
$arguments78['default'] = NULL;
$arguments78['arguments'] = NULL;
$arguments78['extensionName'] = NULL;
$arguments78['languageKey'] = NULL;
$arguments78['alternativeLanguageKeys'] = NULL;
$output80 = '';
$array81 = array (
);
$output80 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array81);

$output80 .= 'displayOptions';
$arguments78['key'] = $output80;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output0 .= '</h2>
<div class="tst-analyzer-options">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
        <div class="checkbox">
            <label for="';
$array86 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('checkbox.id', $array86)]);

$output85 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$array89 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkbox.label', $array89);
};
$arguments87 = array();
$arguments87['value'] = NULL;

$output85 .= isset($arguments87['value']) ? $arguments87['value'] : $renderChildrenClosure88();

$output85 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['key'] = NULL;
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['languageKey'] = NULL;
$arguments90['alternativeLanguageKeys'] = NULL;
$output92 = '';
$array93 = array (
);
$output92 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array93);
$array94 = array (
);
$output92 .= $renderingContext->getVariableProvider()->getByPath('checkbox.ll', $array94);
$arguments90['key'] = $output92;

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output85 .= '
            </label>
        </div>
    ';
return $output85;
};
$arguments82 = array();
$arguments82['each'] = NULL;
$arguments82['as'] = NULL;
$arguments82['key'] = NULL;
$arguments82['reverse'] = false;
$arguments82['iteration'] = NULL;
$array84 = array (
);$arguments82['each'] = $renderingContext->getVariableProvider()->getByPath('checkboxes', $array84);
$arguments82['as'] = 'checkbox';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output0 .= '
</div>
<div style="padding-top: 25px;"></div>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
    <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['key'] = NULL;
$arguments101['id'] = NULL;
$arguments101['default'] = NULL;
$arguments101['arguments'] = NULL;
$arguments101['extensionName'] = NULL;
$arguments101['languageKey'] = NULL;
$arguments101['alternativeLanguageKeys'] = NULL;
$output103 = '';
$array104 = array (
);
$output103 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array104);

$output103 .= 'constants';
$arguments101['key'] = $output103;

$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output100 .= '</h2>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
        <h3>';
$array109 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constant.title', $array109)]);

$output108 .= '</h3>
        <div class="nowrap">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$array112 = array (
);return $renderingContext->getVariableProvider()->getByPath('constant.content', $array112);
};
$arguments110 = array();
$arguments110['value'] = NULL;

$output108 .= isset($arguments110['value']) ? $arguments110['value'] : $renderChildrenClosure111();

$output108 .= '
        </div>
    ';
return $output108;
};
$arguments105 = array();
$arguments105['each'] = NULL;
$arguments105['as'] = NULL;
$arguments105['key'] = NULL;
$arguments105['reverse'] = false;
$arguments105['iteration'] = NULL;
$array107 = array (
);$arguments105['each'] = $renderingContext->getVariableProvider()->getByPath('constants', $array107);
$arguments105['as'] = 'constant';

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output100 .= '
    <div style="padding-top: 15px;"></div>
    <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['key'] = NULL;
$arguments113['id'] = NULL;
$arguments113['default'] = NULL;
$arguments113['arguments'] = NULL;
$arguments113['extensionName'] = NULL;
$arguments113['languageKey'] = NULL;
$arguments113['alternativeLanguageKeys'] = NULL;
$output115 = '';
$array116 = array (
);
$output115 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array116);

$output115 .= 'setups';
$arguments113['key'] = $output115;

$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext)]);

$output100 .= '</h2>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
        <h3>';
$array121 = array (
);
$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('setup.title', $array121)]);

$output120 .= '</h3>
        <div class="nowrap">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$array124 = array (
);return $renderingContext->getVariableProvider()->getByPath('setup.content', $array124);
};
$arguments122 = array();
$arguments122['value'] = NULL;

$output120 .= isset($arguments122['value']) ? $arguments122['value'] : $renderChildrenClosure123();

$output120 .= '
        </div>
    ';
return $output120;
};
$arguments117 = array();
$arguments117['each'] = NULL;
$arguments117['as'] = NULL;
$arguments117['key'] = NULL;
$arguments117['reverse'] = false;
$arguments117['iteration'] = NULL;
$array119 = array (
);$arguments117['each'] = $renderingContext->getVariableProvider()->getByPath('setups', $array119);
$arguments117['as'] = 'setup';

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

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
);$array97['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array98);

$expression99 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = $renderChildrenClosure96;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#