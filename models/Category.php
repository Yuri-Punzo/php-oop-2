<?php
trait construct1
{
    public function __construct(string $category)
    {
        if ($category == "cani") {
            $this->category = "https://p.kindpng.com/picc/s/169-1693411_cats-dogs-cats-and-dogs-heart-shaped-svg.png";
        } elseif ($category == "gatti") {
            $this->category = "https://www.shutterstock.com/shutterstock/photos/1530020042/display_1500/stock-vector-cat-icon-flat-vector-isolated-on-transparent-background-1530020042.jpg";
        } else {
            throw new Exception('Si può scegliere solo fra "cani" e "gatti"');
        }
    }
}
class Category
{
    public $category;

    use construct1;
}
