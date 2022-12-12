<?php

class Product
{
    public $image;
    public $title;
    public $price;
    public $category;
    public $type;

    function __construct(string $image, string $title, $price, Category $category, Type $type)
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
    }
}
