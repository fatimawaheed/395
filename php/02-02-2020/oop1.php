<?php


function dd($arg)
{
    echo "<pre>";
    print_r($arg);
    die;
}

interface Sizes
{
    public function getName();
}


abstract class Colors{

    public function getColorName(){

    }

    abstract public function setColorName();

}

// $color = new Colors();
// $color->getColorName();

class Products extends Colors implements Sizes
{

    public function getName()
    {
    }
}


class Brands extends Colors implements Sizes
{
    public function getName()
    {
    }
}
