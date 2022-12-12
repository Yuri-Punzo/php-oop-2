<?php

class Category
{
    public $category;

    function __construct(string $category)
    {
        $this->category = $category;
    }

    public function productCategoryIcon($category)
    {
        if ($category->category = "cani") {
            return "bau";
        } elseif ($category->category = "gatti") {
            return "miao";
        } else {
            die("solo cani o gatti");
        }
    }
}
