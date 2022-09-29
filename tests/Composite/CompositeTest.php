<?php declare(strict_types=1);

namespace Structural\Tests\Composite;

use PHPUnit\Framework\TestCase;
use Structural\Composite\Fieldset;
use Structural\Composite\Form;
use Structural\Composite\InputElement;
use Structural\Composite\TextElement;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        $fieldset = new Fieldset();
        $fieldset->addElement(new TextElement('Password:'));
        $fieldset->addElement(new InputElement());
        $form->addElement($fieldset);
        $this->assertSame(
            '<form>Email:<input type="text" /><fieldset>Password:<input type="text" /></fieldset></form>',
            $form->render()
        );
    }
}
