<?php
class User
{
    public $name;
    public $surname;

    function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}
