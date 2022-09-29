<?php


namespace Structural\Tests\Adapter\Example;


use Structural\Adapter\Example\Kindle;
use Structural\Adapter\Example\EBookAdapter;
use Structural\Adapter\Example\Book;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testClassicBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }

    public function testKindle()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }
}
