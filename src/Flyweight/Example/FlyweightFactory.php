<?php


namespace Structural\Flyweight\Example;


    /**
    * Client shouldn't create avatars
     */
class FlyweightFactory implements \Countable
{
    private $avatarStore = [];

    public function get(string $name): AvatarFlyweight
    {
        if (!isset($this->avatarStore[$name])) {
            $this->avatarStore[$name] = new AvatarFlyweight($name);
        }

        return $this->avatarStore[$name];
    }

    public function count(): int
    {
        return count($this->avatarStore);
    }
}
