<?php
class template_Index_html_ef4bc0b0d1d4837c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/fawozane/social-dashboard/Resources/Private/Templates/Dashboard/Index.html';
    }
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        
return 'Module';
    }
    public function hasLayout(): bool {
        return true;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
));
    }
    
    
    /**
 * section Content
 */
public function section_26298499e77d870c(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'disabled' => NULL,
'csp' => NULL,
'useNonce' => NULL,
'priority' => false,
'inline' => false,
'identifier' => 'socialDashboardCss',
'href' => 'EXT:social_dashboard/Resources/Public/Css/backend.css',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'async' => NULL,
'defer' => NULL,
'nomodule' => NULL,
'csp' => NULL,
'useNonce' => NULL,
'priority' => false,
'inline' => false,
'identifier' => 'socialDashboardJs',
'src' => 'EXT:social_dashboard/Resources/Public/Build/dashboard.js',
'type' => 'module',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4);

$output0 .= '

    <script type="application/json" id="social-dashboard-config">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$array9 = [
'ajaxUrl' => $renderingContext->getVariableProvider()->getByPath('ajaxUrl'),
'initialData' => $renderingContext->getVariableProvider()->getByPath('initialData'),
];

$arguments7 = [
'forceObject' => false,
'value' => $array9,
];
$renderChildrenClosure8 = ($arguments7['value'] !== null) ? function() use ($arguments7) { return $arguments7['value']; } : $renderChildrenClosure8;return $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\JsonViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8);
};

$arguments5 = [
'value' => NULL,
];

$output0 .= isset($arguments5['value']) ? $arguments5['value'] : $renderChildrenClosure6();

$output0 .= '
    </script>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array10 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('isConnected'),
];

$expression11 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments13 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression11(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output12 = '';

$output12 .= '
        <a href="';

$output12 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginUrl')]);

$output12 .= '" target="_blank" class="instagram-btn btn btn-primary">
            Instagram verbinden
        </a>
    ';
return $output12;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments13, $renderingContext)
;

$output0 .= '
    <div class="dashboard">

        <div class="filter-bar">
            <select id="platform">
                <option value="instagram">Instagram</option>
                <option value="tiktok">TikTok</option>
            </select>

            <select id="range">
                <option value="7">7 Tage</option>
                <option value="30">30 Tage</option>
            </select>

            <button id="applyFilter" class="btn btn-default">Apply</button>
        </div>

        <div class="kpis" style="display: flex; gap: 20px; margin: 20px 0;">
            <div class="kpi card">
                <div class="card-header">Likes</div>
                <div class="card-body">
                    <h2 id="likesTotal">0</h2>
                    <div id="likesDelta" class="delta"></div>
                </div>
            </div>

            <div class="kpi card">
                <div class="card-header">Comments</div>
                <div class="card-body">
                    <h2 id="commentsTotal">0</h2>
                    <div id="commentsDelta" class="delta"></div>
                </div>
            </div>
        </div>

        <div class="chart-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="card">
                <div id="barChart" style="width: 100%; height:300px;"></div>
            </div>
            <div class="card">
                <div id="lineChart" style="width: 100%; height:300px;"></div>
            </div>
        </div>

    </div>

    <div class="kpis" style="display:flex; gap:20px; margin-top:20px;">

        <div class="kpi card">
            <div class="card-header">Score</div>
            <div class="card-body">
                <h2 id="dashboardScore">0</h2>
            </div>
        </div>

        <div class="kpi card">
            <div class="card-header">Engagement</div>
            <div class="card-body">
                <h2 id="dashboardEngagement">0%</h2>
            </div>
        </div>

    </div>

    <div class="card" style="margin-top:20px;">
        <div class="card-header">Empfehlungen</div>
        <div class="card-body">
            <ul id="dashboardTips"></ul>
        </div>
    </div>


';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output14 = '';

$output14 .= '';

$output14 .= '

';

$output14 .= '';

    return $output14;
}

}

#