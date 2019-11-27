<?php

class Book_action_list_f5162f326a6d7f4198b54320e2a6d3f1da275500 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
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
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <h1>Listing for Book</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['queueIdentifier'] = NULL;
$arguments1['as'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

    <table  class="tx_bookstoreapp" >
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['languageKey'] = NULL;
$arguments3['alternativeLanguageKeys'] = NULL;
$arguments3['key'] = 'tx_bookstoreapp_domain_model_book.isbn';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['key'] = NULL;
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['languageKey'] = NULL;
$arguments5['alternativeLanguageKeys'] = NULL;
$arguments5['key'] = 'tx_bookstoreapp_domain_model_book.title';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '</th>
            <th>';
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
$arguments7['key'] = 'tx_bookstoreapp_domain_model_book.blurb';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '</th>
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
$arguments9['key'] = 'tx_bookstoreapp_domain_model_book.description';

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
$arguments11['key'] = 'tx_bookstoreapp_domain_model_book.price';

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
$arguments13['key'] = 'tx_bookstoreapp_domain_model_book.pages';

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
$arguments15['key'] = 'tx_bookstoreapp_domain_model_book.images';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output0 .= '</th>
            <th> </th>
            <th> </th>
        </tr>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$array25 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('book.isbn', $array25)]);
};
$arguments21 = array();
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['name'] = NULL;
$arguments21['rel'] = NULL;
$arguments21['rev'] = NULL;
$arguments21['target'] = NULL;
$arguments21['action'] = NULL;
$arguments21['controller'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['pluginName'] = NULL;
$arguments21['pageUid'] = NULL;
$arguments21['pageType'] = NULL;
$arguments21['noCache'] = NULL;
$arguments21['noCacheHash'] = NULL;
$arguments21['section'] = NULL;
$arguments21['format'] = NULL;
$arguments21['linkAccessRestrictedPages'] = NULL;
$arguments21['additionalParams'] = NULL;
$arguments21['absolute'] = NULL;
$arguments21['addQueryString'] = NULL;
$arguments21['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments21['addQueryStringMethod'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['action'] = 'show';
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array24);
$arguments21['arguments'] = $array23;

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$array30 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('book.title', $array30)]);
};
$arguments26 = array();
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['name'] = NULL;
$arguments26['rel'] = NULL;
$arguments26['rev'] = NULL;
$arguments26['target'] = NULL;
$arguments26['action'] = NULL;
$arguments26['controller'] = NULL;
$arguments26['extensionName'] = NULL;
$arguments26['pluginName'] = NULL;
$arguments26['pageUid'] = NULL;
$arguments26['pageType'] = NULL;
$arguments26['noCache'] = NULL;
$arguments26['noCacheHash'] = NULL;
$arguments26['section'] = NULL;
$arguments26['format'] = NULL;
$arguments26['linkAccessRestrictedPages'] = NULL;
$arguments26['additionalParams'] = NULL;
$arguments26['absolute'] = NULL;
$arguments26['addQueryString'] = NULL;
$arguments26['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments26['addQueryStringMethod'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['action'] = 'show';
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array29);
$arguments26['arguments'] = $array28;

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output20 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$array35 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('book.blurb', $array35)]);
};
$arguments31 = array();
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['name'] = NULL;
$arguments31['rel'] = NULL;
$arguments31['rev'] = NULL;
$arguments31['target'] = NULL;
$arguments31['action'] = NULL;
$arguments31['controller'] = NULL;
$arguments31['extensionName'] = NULL;
$arguments31['pluginName'] = NULL;
$arguments31['pageUid'] = NULL;
$arguments31['pageType'] = NULL;
$arguments31['noCache'] = NULL;
$arguments31['noCacheHash'] = NULL;
$arguments31['section'] = NULL;
$arguments31['format'] = NULL;
$arguments31['linkAccessRestrictedPages'] = NULL;
$arguments31['additionalParams'] = NULL;
$arguments31['absolute'] = NULL;
$arguments31['addQueryString'] = NULL;
$arguments31['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments31['addQueryStringMethod'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['action'] = 'show';
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array34);
$arguments31['arguments'] = $array33;

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output20 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$array40 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('book.description', $array40)]);
};
$arguments36 = array();
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$arguments36['name'] = NULL;
$arguments36['rel'] = NULL;
$arguments36['rev'] = NULL;
$arguments36['target'] = NULL;
$arguments36['action'] = NULL;
$arguments36['controller'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['pluginName'] = NULL;
$arguments36['pageUid'] = NULL;
$arguments36['pageType'] = NULL;
$arguments36['noCache'] = NULL;
$arguments36['noCacheHash'] = NULL;
$arguments36['section'] = NULL;
$arguments36['format'] = NULL;
$arguments36['linkAccessRestrictedPages'] = NULL;
$arguments36['additionalParams'] = NULL;
$arguments36['absolute'] = NULL;
$arguments36['addQueryString'] = NULL;
$arguments36['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments36['addQueryStringMethod'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['action'] = 'show';
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array39);
$arguments36['arguments'] = $array38;

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output20 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$array45 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('book.price', $array45)]);
};
$arguments41 = array();
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['class'] = NULL;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['title'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$arguments41['name'] = NULL;
$arguments41['rel'] = NULL;
$arguments41['rev'] = NULL;
$arguments41['target'] = NULL;
$arguments41['action'] = NULL;
$arguments41['controller'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['pluginName'] = NULL;
$arguments41['pageUid'] = NULL;
$arguments41['pageType'] = NULL;
$arguments41['noCache'] = NULL;
$arguments41['noCacheHash'] = NULL;
$arguments41['section'] = NULL;
$arguments41['format'] = NULL;
$arguments41['linkAccessRestrictedPages'] = NULL;
$arguments41['additionalParams'] = NULL;
$arguments41['absolute'] = NULL;
$arguments41['addQueryString'] = NULL;
$arguments41['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments41['addQueryStringMethod'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['action'] = 'show';
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array44);
$arguments41['arguments'] = $array43;

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output20 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$array50 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('book.pages', $array50)]);
};
$arguments46 = array();
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['name'] = NULL;
$arguments46['rel'] = NULL;
$arguments46['rev'] = NULL;
$arguments46['target'] = NULL;
$arguments46['action'] = NULL;
$arguments46['controller'] = NULL;
$arguments46['extensionName'] = NULL;
$arguments46['pluginName'] = NULL;
$arguments46['pageUid'] = NULL;
$arguments46['pageType'] = NULL;
$arguments46['noCache'] = NULL;
$arguments46['noCacheHash'] = NULL;
$arguments46['section'] = NULL;
$arguments46['format'] = NULL;
$arguments46['linkAccessRestrictedPages'] = NULL;
$arguments46['additionalParams'] = NULL;
$arguments46['absolute'] = NULL;
$arguments46['addQueryString'] = NULL;
$arguments46['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments46['addQueryStringMethod'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['action'] = 'show';
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array49);
$arguments46['arguments'] = $array48;

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output20 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output55 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$array58 = array (
);return $renderingContext->getVariableProvider()->getByPath('book.images', $array58);
};
$arguments56 = array();
$arguments56['subject'] = NULL;
$renderChildrenClosure57 = ($arguments56['subject'] !== null) ? function() use ($arguments56) { return $arguments56['subject']; } : $renderChildrenClosure57;
$output55 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= ' images';
return $output55;
};
$arguments51 = array();
$arguments51['additionalAttributes'] = NULL;
$arguments51['data'] = NULL;
$arguments51['class'] = NULL;
$arguments51['dir'] = NULL;
$arguments51['id'] = NULL;
$arguments51['lang'] = NULL;
$arguments51['style'] = NULL;
$arguments51['title'] = NULL;
$arguments51['accesskey'] = NULL;
$arguments51['tabindex'] = NULL;
$arguments51['onclick'] = NULL;
$arguments51['name'] = NULL;
$arguments51['rel'] = NULL;
$arguments51['rev'] = NULL;
$arguments51['target'] = NULL;
$arguments51['action'] = NULL;
$arguments51['controller'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['pluginName'] = NULL;
$arguments51['pageUid'] = NULL;
$arguments51['pageType'] = NULL;
$arguments51['noCache'] = NULL;
$arguments51['noCacheHash'] = NULL;
$arguments51['section'] = NULL;
$arguments51['format'] = NULL;
$arguments51['linkAccessRestrictedPages'] = NULL;
$arguments51['additionalParams'] = NULL;
$arguments51['absolute'] = NULL;
$arguments51['addQueryString'] = NULL;
$arguments51['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments51['addQueryStringMethod'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['action'] = 'show';
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array54);
$arguments51['arguments'] = $array53;

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output20 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments59 = array();
$arguments59['additionalAttributes'] = NULL;
$arguments59['data'] = NULL;
$arguments59['class'] = NULL;
$arguments59['dir'] = NULL;
$arguments59['id'] = NULL;
$arguments59['lang'] = NULL;
$arguments59['style'] = NULL;
$arguments59['title'] = NULL;
$arguments59['accesskey'] = NULL;
$arguments59['tabindex'] = NULL;
$arguments59['onclick'] = NULL;
$arguments59['name'] = NULL;
$arguments59['rel'] = NULL;
$arguments59['rev'] = NULL;
$arguments59['target'] = NULL;
$arguments59['action'] = NULL;
$arguments59['controller'] = NULL;
$arguments59['extensionName'] = NULL;
$arguments59['pluginName'] = NULL;
$arguments59['pageUid'] = NULL;
$arguments59['pageType'] = NULL;
$arguments59['noCache'] = NULL;
$arguments59['noCacheHash'] = NULL;
$arguments59['section'] = NULL;
$arguments59['format'] = NULL;
$arguments59['linkAccessRestrictedPages'] = NULL;
$arguments59['additionalParams'] = NULL;
$arguments59['absolute'] = NULL;
$arguments59['addQueryString'] = NULL;
$arguments59['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments59['addQueryStringMethod'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['action'] = 'edit';
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array62);
$arguments59['arguments'] = $array61;

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output20 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments63 = array();
$arguments63['additionalAttributes'] = NULL;
$arguments63['data'] = NULL;
$arguments63['class'] = NULL;
$arguments63['dir'] = NULL;
$arguments63['id'] = NULL;
$arguments63['lang'] = NULL;
$arguments63['style'] = NULL;
$arguments63['title'] = NULL;
$arguments63['accesskey'] = NULL;
$arguments63['tabindex'] = NULL;
$arguments63['onclick'] = NULL;
$arguments63['name'] = NULL;
$arguments63['rel'] = NULL;
$arguments63['rev'] = NULL;
$arguments63['target'] = NULL;
$arguments63['action'] = NULL;
$arguments63['controller'] = NULL;
$arguments63['extensionName'] = NULL;
$arguments63['pluginName'] = NULL;
$arguments63['pageUid'] = NULL;
$arguments63['pageType'] = NULL;
$arguments63['noCache'] = NULL;
$arguments63['noCacheHash'] = NULL;
$arguments63['section'] = NULL;
$arguments63['format'] = NULL;
$arguments63['linkAccessRestrictedPages'] = NULL;
$arguments63['additionalParams'] = NULL;
$arguments63['absolute'] = NULL;
$arguments63['addQueryString'] = NULL;
$arguments63['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments63['addQueryStringMethod'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['action'] = 'delete';
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array66);
$arguments63['arguments'] = $array65;

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output20 .= '</td>
            </tr>
        ';
return $output20;
};
$arguments17 = array();
$arguments17['each'] = NULL;
$arguments17['as'] = NULL;
$arguments17['key'] = NULL;
$arguments17['reverse'] = false;
$arguments17['iteration'] = NULL;
$array19 = array (
);$arguments17['each'] = $renderingContext->getVariableProvider()->getByPath('books', $array19);
$arguments17['as'] = 'book';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return 'New Book';
};
$arguments67 = array();
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['class'] = NULL;
$arguments67['dir'] = NULL;
$arguments67['id'] = NULL;
$arguments67['lang'] = NULL;
$arguments67['style'] = NULL;
$arguments67['title'] = NULL;
$arguments67['accesskey'] = NULL;
$arguments67['tabindex'] = NULL;
$arguments67['onclick'] = NULL;
$arguments67['name'] = NULL;
$arguments67['rel'] = NULL;
$arguments67['rev'] = NULL;
$arguments67['target'] = NULL;
$arguments67['action'] = NULL;
$arguments67['controller'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['pluginName'] = NULL;
$arguments67['pageUid'] = NULL;
$arguments67['pageType'] = NULL;
$arguments67['noCache'] = NULL;
$arguments67['noCacheHash'] = NULL;
$arguments67['section'] = NULL;
$arguments67['format'] = NULL;
$arguments67['linkAccessRestrictedPages'] = NULL;
$arguments67['additionalParams'] = NULL;
$arguments67['absolute'] = NULL;
$arguments67['addQueryString'] = NULL;
$arguments67['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments67['addQueryStringMethod'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output69 = '';

$output69 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['name'] = NULL;
$arguments70['name'] = 'Default';

$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output69 .= '

This Template is responsible for creating a table of domain objects.

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
  Resources:
    Private:
      Templates:
        List.html: keep

Otherwise your changes will be overwritten the next time you save the extension in the extension builder

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
    <h1>Listing for Book</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['queueIdentifier'] = NULL;
$arguments75['as'] = NULL;

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '

    <table  class="tx_bookstoreapp" >
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['key'] = NULL;
$arguments77['id'] = NULL;
$arguments77['default'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['extensionName'] = NULL;
$arguments77['languageKey'] = NULL;
$arguments77['alternativeLanguageKeys'] = NULL;
$arguments77['key'] = 'tx_bookstoreapp_domain_model_book.isbn';

$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output74 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['key'] = NULL;
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['languageKey'] = NULL;
$arguments79['alternativeLanguageKeys'] = NULL;
$arguments79['key'] = 'tx_bookstoreapp_domain_model_book.title';

$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext)]);

$output74 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['key'] = NULL;
$arguments81['id'] = NULL;
$arguments81['default'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['extensionName'] = NULL;
$arguments81['languageKey'] = NULL;
$arguments81['alternativeLanguageKeys'] = NULL;
$arguments81['key'] = 'tx_bookstoreapp_domain_model_book.blurb';

$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output74 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['key'] = NULL;
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$arguments83['languageKey'] = NULL;
$arguments83['alternativeLanguageKeys'] = NULL;
$arguments83['key'] = 'tx_bookstoreapp_domain_model_book.description';

$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext)]);

$output74 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['key'] = NULL;
$arguments85['id'] = NULL;
$arguments85['default'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['languageKey'] = NULL;
$arguments85['alternativeLanguageKeys'] = NULL;
$arguments85['key'] = 'tx_bookstoreapp_domain_model_book.price';

$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output74 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['key'] = NULL;
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['languageKey'] = NULL;
$arguments87['alternativeLanguageKeys'] = NULL;
$arguments87['key'] = 'tx_bookstoreapp_domain_model_book.pages';

$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output74 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['key'] = NULL;
$arguments89['id'] = NULL;
$arguments89['default'] = NULL;
$arguments89['arguments'] = NULL;
$arguments89['extensionName'] = NULL;
$arguments89['languageKey'] = NULL;
$arguments89['alternativeLanguageKeys'] = NULL;
$arguments89['key'] = 'tx_bookstoreapp_domain_model_book.images';

$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output74 .= '</th>
            <th> </th>
            <th> </th>
        </tr>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$array99 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('book.isbn', $array99)]);
};
$arguments95 = array();
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['name'] = NULL;
$arguments95['rel'] = NULL;
$arguments95['rev'] = NULL;
$arguments95['target'] = NULL;
$arguments95['action'] = NULL;
$arguments95['controller'] = NULL;
$arguments95['extensionName'] = NULL;
$arguments95['pluginName'] = NULL;
$arguments95['pageUid'] = NULL;
$arguments95['pageType'] = NULL;
$arguments95['noCache'] = NULL;
$arguments95['noCacheHash'] = NULL;
$arguments95['section'] = NULL;
$arguments95['format'] = NULL;
$arguments95['linkAccessRestrictedPages'] = NULL;
$arguments95['additionalParams'] = NULL;
$arguments95['absolute'] = NULL;
$arguments95['addQueryString'] = NULL;
$arguments95['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments95['addQueryStringMethod'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['action'] = 'show';
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array98);
$arguments95['arguments'] = $array97;

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$array104 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('book.title', $array104)]);
};
$arguments100 = array();
$arguments100['additionalAttributes'] = NULL;
$arguments100['data'] = NULL;
$arguments100['class'] = NULL;
$arguments100['dir'] = NULL;
$arguments100['id'] = NULL;
$arguments100['lang'] = NULL;
$arguments100['style'] = NULL;
$arguments100['title'] = NULL;
$arguments100['accesskey'] = NULL;
$arguments100['tabindex'] = NULL;
$arguments100['onclick'] = NULL;
$arguments100['name'] = NULL;
$arguments100['rel'] = NULL;
$arguments100['rev'] = NULL;
$arguments100['target'] = NULL;
$arguments100['action'] = NULL;
$arguments100['controller'] = NULL;
$arguments100['extensionName'] = NULL;
$arguments100['pluginName'] = NULL;
$arguments100['pageUid'] = NULL;
$arguments100['pageType'] = NULL;
$arguments100['noCache'] = NULL;
$arguments100['noCacheHash'] = NULL;
$arguments100['section'] = NULL;
$arguments100['format'] = NULL;
$arguments100['linkAccessRestrictedPages'] = NULL;
$arguments100['additionalParams'] = NULL;
$arguments100['absolute'] = NULL;
$arguments100['addQueryString'] = NULL;
$arguments100['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments100['addQueryStringMethod'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['action'] = 'show';
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array103);
$arguments100['arguments'] = $array102;

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output94 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$array109 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('book.blurb', $array109)]);
};
$arguments105 = array();
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['class'] = NULL;
$arguments105['dir'] = NULL;
$arguments105['id'] = NULL;
$arguments105['lang'] = NULL;
$arguments105['style'] = NULL;
$arguments105['title'] = NULL;
$arguments105['accesskey'] = NULL;
$arguments105['tabindex'] = NULL;
$arguments105['onclick'] = NULL;
$arguments105['name'] = NULL;
$arguments105['rel'] = NULL;
$arguments105['rev'] = NULL;
$arguments105['target'] = NULL;
$arguments105['action'] = NULL;
$arguments105['controller'] = NULL;
$arguments105['extensionName'] = NULL;
$arguments105['pluginName'] = NULL;
$arguments105['pageUid'] = NULL;
$arguments105['pageType'] = NULL;
$arguments105['noCache'] = NULL;
$arguments105['noCacheHash'] = NULL;
$arguments105['section'] = NULL;
$arguments105['format'] = NULL;
$arguments105['linkAccessRestrictedPages'] = NULL;
$arguments105['additionalParams'] = NULL;
$arguments105['absolute'] = NULL;
$arguments105['addQueryString'] = NULL;
$arguments105['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments105['addQueryStringMethod'] = NULL;
$arguments105['arguments'] = NULL;
$arguments105['action'] = 'show';
// Rendering Array
$array107 = array();
$array108 = array (
);$array107['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array108);
$arguments105['arguments'] = $array107;

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output94 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$array114 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('book.description', $array114)]);
};
$arguments110 = array();
$arguments110['additionalAttributes'] = NULL;
$arguments110['data'] = NULL;
$arguments110['class'] = NULL;
$arguments110['dir'] = NULL;
$arguments110['id'] = NULL;
$arguments110['lang'] = NULL;
$arguments110['style'] = NULL;
$arguments110['title'] = NULL;
$arguments110['accesskey'] = NULL;
$arguments110['tabindex'] = NULL;
$arguments110['onclick'] = NULL;
$arguments110['name'] = NULL;
$arguments110['rel'] = NULL;
$arguments110['rev'] = NULL;
$arguments110['target'] = NULL;
$arguments110['action'] = NULL;
$arguments110['controller'] = NULL;
$arguments110['extensionName'] = NULL;
$arguments110['pluginName'] = NULL;
$arguments110['pageUid'] = NULL;
$arguments110['pageType'] = NULL;
$arguments110['noCache'] = NULL;
$arguments110['noCacheHash'] = NULL;
$arguments110['section'] = NULL;
$arguments110['format'] = NULL;
$arguments110['linkAccessRestrictedPages'] = NULL;
$arguments110['additionalParams'] = NULL;
$arguments110['absolute'] = NULL;
$arguments110['addQueryString'] = NULL;
$arguments110['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments110['addQueryStringMethod'] = NULL;
$arguments110['arguments'] = NULL;
$arguments110['action'] = 'show';
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array113);
$arguments110['arguments'] = $array112;

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output94 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$array119 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('book.price', $array119)]);
};
$arguments115 = array();
$arguments115['additionalAttributes'] = NULL;
$arguments115['data'] = NULL;
$arguments115['class'] = NULL;
$arguments115['dir'] = NULL;
$arguments115['id'] = NULL;
$arguments115['lang'] = NULL;
$arguments115['style'] = NULL;
$arguments115['title'] = NULL;
$arguments115['accesskey'] = NULL;
$arguments115['tabindex'] = NULL;
$arguments115['onclick'] = NULL;
$arguments115['name'] = NULL;
$arguments115['rel'] = NULL;
$arguments115['rev'] = NULL;
$arguments115['target'] = NULL;
$arguments115['action'] = NULL;
$arguments115['controller'] = NULL;
$arguments115['extensionName'] = NULL;
$arguments115['pluginName'] = NULL;
$arguments115['pageUid'] = NULL;
$arguments115['pageType'] = NULL;
$arguments115['noCache'] = NULL;
$arguments115['noCacheHash'] = NULL;
$arguments115['section'] = NULL;
$arguments115['format'] = NULL;
$arguments115['linkAccessRestrictedPages'] = NULL;
$arguments115['additionalParams'] = NULL;
$arguments115['absolute'] = NULL;
$arguments115['addQueryString'] = NULL;
$arguments115['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments115['addQueryStringMethod'] = NULL;
$arguments115['arguments'] = NULL;
$arguments115['action'] = 'show';
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array118);
$arguments115['arguments'] = $array117;

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output94 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$array124 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('book.pages', $array124)]);
};
$arguments120 = array();
$arguments120['additionalAttributes'] = NULL;
$arguments120['data'] = NULL;
$arguments120['class'] = NULL;
$arguments120['dir'] = NULL;
$arguments120['id'] = NULL;
$arguments120['lang'] = NULL;
$arguments120['style'] = NULL;
$arguments120['title'] = NULL;
$arguments120['accesskey'] = NULL;
$arguments120['tabindex'] = NULL;
$arguments120['onclick'] = NULL;
$arguments120['name'] = NULL;
$arguments120['rel'] = NULL;
$arguments120['rev'] = NULL;
$arguments120['target'] = NULL;
$arguments120['action'] = NULL;
$arguments120['controller'] = NULL;
$arguments120['extensionName'] = NULL;
$arguments120['pluginName'] = NULL;
$arguments120['pageUid'] = NULL;
$arguments120['pageType'] = NULL;
$arguments120['noCache'] = NULL;
$arguments120['noCacheHash'] = NULL;
$arguments120['section'] = NULL;
$arguments120['format'] = NULL;
$arguments120['linkAccessRestrictedPages'] = NULL;
$arguments120['additionalParams'] = NULL;
$arguments120['absolute'] = NULL;
$arguments120['addQueryString'] = NULL;
$arguments120['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments120['addQueryStringMethod'] = NULL;
$arguments120['arguments'] = NULL;
$arguments120['action'] = 'show';
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array123);
$arguments120['arguments'] = $array122;

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output94 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output129 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$array132 = array (
);return $renderingContext->getVariableProvider()->getByPath('book.images', $array132);
};
$arguments130 = array();
$arguments130['subject'] = NULL;
$renderChildrenClosure131 = ($arguments130['subject'] !== null) ? function() use ($arguments130) { return $arguments130['subject']; } : $renderChildrenClosure131;
$output129 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= ' images';
return $output129;
};
$arguments125 = array();
$arguments125['additionalAttributes'] = NULL;
$arguments125['data'] = NULL;
$arguments125['class'] = NULL;
$arguments125['dir'] = NULL;
$arguments125['id'] = NULL;
$arguments125['lang'] = NULL;
$arguments125['style'] = NULL;
$arguments125['title'] = NULL;
$arguments125['accesskey'] = NULL;
$arguments125['tabindex'] = NULL;
$arguments125['onclick'] = NULL;
$arguments125['name'] = NULL;
$arguments125['rel'] = NULL;
$arguments125['rev'] = NULL;
$arguments125['target'] = NULL;
$arguments125['action'] = NULL;
$arguments125['controller'] = NULL;
$arguments125['extensionName'] = NULL;
$arguments125['pluginName'] = NULL;
$arguments125['pageUid'] = NULL;
$arguments125['pageType'] = NULL;
$arguments125['noCache'] = NULL;
$arguments125['noCacheHash'] = NULL;
$arguments125['section'] = NULL;
$arguments125['format'] = NULL;
$arguments125['linkAccessRestrictedPages'] = NULL;
$arguments125['additionalParams'] = NULL;
$arguments125['absolute'] = NULL;
$arguments125['addQueryString'] = NULL;
$arguments125['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments125['addQueryStringMethod'] = NULL;
$arguments125['arguments'] = NULL;
$arguments125['action'] = 'show';
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array128);
$arguments125['arguments'] = $array127;

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output94 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments133 = array();
$arguments133['additionalAttributes'] = NULL;
$arguments133['data'] = NULL;
$arguments133['class'] = NULL;
$arguments133['dir'] = NULL;
$arguments133['id'] = NULL;
$arguments133['lang'] = NULL;
$arguments133['style'] = NULL;
$arguments133['title'] = NULL;
$arguments133['accesskey'] = NULL;
$arguments133['tabindex'] = NULL;
$arguments133['onclick'] = NULL;
$arguments133['name'] = NULL;
$arguments133['rel'] = NULL;
$arguments133['rev'] = NULL;
$arguments133['target'] = NULL;
$arguments133['action'] = NULL;
$arguments133['controller'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['pluginName'] = NULL;
$arguments133['pageUid'] = NULL;
$arguments133['pageType'] = NULL;
$arguments133['noCache'] = NULL;
$arguments133['noCacheHash'] = NULL;
$arguments133['section'] = NULL;
$arguments133['format'] = NULL;
$arguments133['linkAccessRestrictedPages'] = NULL;
$arguments133['additionalParams'] = NULL;
$arguments133['absolute'] = NULL;
$arguments133['addQueryString'] = NULL;
$arguments133['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments133['addQueryStringMethod'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['action'] = 'edit';
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array136);
$arguments133['arguments'] = $array135;

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output94 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments137 = array();
$arguments137['additionalAttributes'] = NULL;
$arguments137['data'] = NULL;
$arguments137['class'] = NULL;
$arguments137['dir'] = NULL;
$arguments137['id'] = NULL;
$arguments137['lang'] = NULL;
$arguments137['style'] = NULL;
$arguments137['title'] = NULL;
$arguments137['accesskey'] = NULL;
$arguments137['tabindex'] = NULL;
$arguments137['onclick'] = NULL;
$arguments137['name'] = NULL;
$arguments137['rel'] = NULL;
$arguments137['rev'] = NULL;
$arguments137['target'] = NULL;
$arguments137['action'] = NULL;
$arguments137['controller'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['pluginName'] = NULL;
$arguments137['pageUid'] = NULL;
$arguments137['pageType'] = NULL;
$arguments137['noCache'] = NULL;
$arguments137['noCacheHash'] = NULL;
$arguments137['section'] = NULL;
$arguments137['format'] = NULL;
$arguments137['linkAccessRestrictedPages'] = NULL;
$arguments137['additionalParams'] = NULL;
$arguments137['absolute'] = NULL;
$arguments137['addQueryString'] = NULL;
$arguments137['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments137['addQueryStringMethod'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['action'] = 'delete';
// Rendering Array
$array139 = array();
$array140 = array (
);$array139['book'] = $renderingContext->getVariableProvider()->getByPath('book', $array140);
$arguments137['arguments'] = $array139;

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output94 .= '</td>
            </tr>
        ';
return $output94;
};
$arguments91 = array();
$arguments91['each'] = NULL;
$arguments91['as'] = NULL;
$arguments91['key'] = NULL;
$arguments91['reverse'] = false;
$arguments91['iteration'] = NULL;
$array93 = array (
);$arguments91['each'] = $renderingContext->getVariableProvider()->getByPath('books', $array93);
$arguments91['as'] = 'book';

$output74 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output74 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return 'New Book';
};
$arguments141 = array();
$arguments141['additionalAttributes'] = NULL;
$arguments141['data'] = NULL;
$arguments141['class'] = NULL;
$arguments141['dir'] = NULL;
$arguments141['id'] = NULL;
$arguments141['lang'] = NULL;
$arguments141['style'] = NULL;
$arguments141['title'] = NULL;
$arguments141['accesskey'] = NULL;
$arguments141['tabindex'] = NULL;
$arguments141['onclick'] = NULL;
$arguments141['name'] = NULL;
$arguments141['rel'] = NULL;
$arguments141['rev'] = NULL;
$arguments141['target'] = NULL;
$arguments141['action'] = NULL;
$arguments141['controller'] = NULL;
$arguments141['extensionName'] = NULL;
$arguments141['pluginName'] = NULL;
$arguments141['pageUid'] = NULL;
$arguments141['pageType'] = NULL;
$arguments141['noCache'] = NULL;
$arguments141['noCacheHash'] = NULL;
$arguments141['section'] = NULL;
$arguments141['format'] = NULL;
$arguments141['linkAccessRestrictedPages'] = NULL;
$arguments141['additionalParams'] = NULL;
$arguments141['absolute'] = NULL;
$arguments141['addQueryString'] = NULL;
$arguments141['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments141['addQueryStringMethod'] = NULL;
$arguments141['arguments'] = NULL;
$arguments141['action'] = 'new';

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output74 .= '
';
return $output74;
};
$arguments72 = array();
$arguments72['name'] = NULL;
$arguments72['name'] = 'content';

$output69 .= NULL;

$output69 .= '

';

return $output69;
}


}
#