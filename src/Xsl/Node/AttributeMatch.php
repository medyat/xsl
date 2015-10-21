<?php
namespace Genkgo\Xsl\Xsl\Node;

use DOMDocument;
use DOMElement;
use Genkgo\Xsl\TransformationContext;
use Genkgo\Xsl\Util\FetchNamespacesFromDocument;
use Genkgo\Xsl\Xpath\Compiler;
use Genkgo\Xsl\Xsl\ElementTransformerInterface;

/**
 * Class AttributeMatch
 * @package Genkgo\Xsl\Xsl\Element
 */
class AttributeMatch implements ElementTransformerInterface
{
    /**
     * @var Compiler
     */
    private $xpathCompiler;

    /**
     * @param Compiler $compiler
     */
    public function __construct(Compiler $compiler)
    {
        $this->xpathCompiler = $compiler;
    }

    /**
     * @param DOMElement $element
     * @return bool
     */
    public function supports(DOMElement $element)
    {
        return $element->hasAttribute('match');
    }

    /**
     * @param DOMElement $element
     */
    public function transform(DOMElement $element)
    {
        $element->setAttribute(
            'match',
            $this->xpathCompiler->compile(
                $element->getAttribute('match'),
                FetchNamespacesFromDocument::fetch($element->ownerDocument)
            )
        );
    }
}
