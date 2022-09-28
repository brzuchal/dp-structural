<?php


namespace Structural\Adapter\Example;


class Book implements BookInterface
{
    private $page;

    public function open() : void
    {
        $this->page = 1;
    }

    public function turnPage(): void
    {
        $this->page++;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}
