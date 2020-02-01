<?php


function dd($arg){
    echo "<pre>";
    print_r($arg);
    die;
}
// encap
// inherit
//poly
//abstra


// encap
class User
{

    // data  members / properties

    // access modifiers  public , private, protected

    public $name;



    // data function
    public function getName()
    {
    }
}



// $user = new User();
$user = new User;

$user->name = 'Tariq';

echo $user->name;

// dd($user);
