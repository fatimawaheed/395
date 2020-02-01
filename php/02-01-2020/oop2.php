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

    private $first_name;

    // Magic Methods
    public function __construct()
    {
        // $this->name;
    }

    public function __set($name, $value)
    {
        if(!empty($value)){
            $this->first_name = $value;
        }else{
            die('Name is requried');
        }
        
        // dd($value);
    }

    public function __get($name)
    {
        return $this->first_name;
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



$user = new User();

$user->name = 'Saqib';

echo $user->name;
// new User(18,'asdsd');



