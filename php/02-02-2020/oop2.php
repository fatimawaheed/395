<?php


function dd($arg)
{
    echo "<pre>";
    print_r($arg);
    die;
}

final Class User{

}

// $user = new User;

class Product{


    public function __construct()
    {
        die('here');
    }

    public static function getName(){
        echo 'Get Name';
    }


}

// $product = new Product;
Product::getName();