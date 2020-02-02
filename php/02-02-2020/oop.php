<?php


function dd($arg){
    echo "<pre>";
    print_r($arg);
    die;
}


class Products extends Sizes
{

    public $name;
    public $quantity;

    public function __construct()
    {
        // $size = new Sizes();
        // $size->large;
        $this->large;
    }


    public function getSizes(){
        // $size = new Sizes();
        $sizes = array('small', 'medi', 'lar');
    }


}

class Sizes{

    public $small;
    protected $large;

}

$product = new Products();

$product->name = 'Dell Laptop';
$product->quantity = 15;
$product->small = 10;
// $product->large = 5;
dd($product);





