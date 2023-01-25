<?php

declare(strict_types=1);

namespace HDNET\FormFootnote\ViewHelpers;

use HDNET\FormFootnote\FootnoteStorage;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

class GetViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    /**
     * @var bool
     */
    protected $escapeOutput = false;

    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        $templateVariableContainer = $renderingContext->getVariableProvider();
        $templateVariableContainer->add('footnotes', FootnoteStorage::getAllNotes());
        $output = $renderChildrenClosure();
        $templateVariableContainer->remove('footnotes');
        return $output;
    }
}
