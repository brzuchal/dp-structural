<?php declare(strict_types=1);

namespace Structural\Composite;

/**
 * The composite node MUST extend the component contract. This is mandatory for building
 * a tree of components.
 */
class Fieldset implements Renderable
{
    /**
     * @var Renderable[]
     */
    private array $elements;

    /**
     * runs through all elements and calls render() on them, then returns the complete representation
     * of the form.
     *
     * from the outside, one will not see this and the form will act like a single object instance
     */
    public function render(): string
    {
        $formCode = '<fieldset>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        return $formCode . '</fieldset>';
    }

    public function addElement(Renderable $element)
    {
        $this->elements[] = $element;
    }
}
