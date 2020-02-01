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

    // Magic Methods
    public function __construct($d)
    {
        dd($d);
    }

    // data function
    public function getName()
    {
        echo 'name';
    }
    public function sendEmailAllUser($data)
    {
        echo $data .' email sent';
    }
}

// new User('abc');

// $user = new User('abc');
// $user = new User;

// $user->name = 'Tariq';

// echo $user->sendEmailAllUser('16');

echo 'end';
// dd($user);
