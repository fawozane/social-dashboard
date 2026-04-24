<?php

namespace Fawozane\SocialDashboard\Dashboard\Widgets;

use TYPO3\CMS\Dashboard\Widgets\WidgetInterface;
use TYPO3\CMS\Dashboard\Widgets\RequestAwareWidgetInterface;
use TYPO3\CMS\Dashboard\Widgets\WidgetConfigurationInterface;
use TYPO3\CMS\Dashboard\Widgets\JavaScriptInterface;
use TYPO3\CMS\Core\Page\JavaScriptModuleInstruction;
use TYPO3\CMS\Backend\View\BackendViewFactory;
use Psr\Http\Message\ServerRequestInterface;
use Fawozane\SocialDashboard\Dashboard\Provider\SocialDataProvider;

class SocialWidget implements
    WidgetInterface,
    RequestAwareWidgetInterface,
    JavaScriptInterface
{
    private ServerRequestInterface $request;

    public function __construct(
        private readonly WidgetConfigurationInterface $configuration,
        private readonly BackendViewFactory $backendViewFactory,
        private readonly SocialDataProvider $provider
    ) {}

    public function setRequest(ServerRequestInterface $request): void
    {
        $this->request = $request;
    }

    public function getJavaScriptModuleInstructions(): array
    {
        return [
            JavaScriptModuleInstruction::create(
                '@fawozane/social-dashboard/widget.js'
            )->invoke('initialize'),
        ];
    }

    public function renderWidgetContent(): string
    {
        $view = $this->backendViewFactory->create($this->request);

        $templatePaths = $view->getRenderingContext()->getTemplatePaths();

        $templatePaths->setTemplateRootPaths([
            'EXT:social_dashboard/Resources/Private/Templates/',
        ]);

        $templatePaths->setLayoutRootPaths([
            'EXT:social_dashboard/Resources/Private/Layouts/',
        ]);

        $templatePaths->setPartialRootPaths([
            'EXT:social_dashboard/Resources/Private/Partials/',
        ]);

        $data = $this->provider->getData();

        $view->assign('data', $data);

        return $view->render('Widget/SocialWidget');
    }

    public function getOptions(): array
    {
        return [];
    }
}