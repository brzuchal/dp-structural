<?php


namespace Structural\Flyweight\Example;


class AvatarFlyweight implements FlyweightInterface {

    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render(string $background): string
    {
        return sprintf('Avatar %s with background %s', $this->name, $background);
    }
}
