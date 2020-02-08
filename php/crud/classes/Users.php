<?php 


class User{

    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $dob;
    private $profile_image;


    public function __set($name, $value)
    {
        
        $methodName = "set";
        $explode = explode("_", $name);
        $map = array_map('ucfirst', $explode);
        $methodName = $methodName . implode('',$map );
        if(!method_exists($this, $methodName)){
            throw new Exception("Setter method not exists against this $name");
        }
        $this->$methodName($value);
        
    }

    public function __get($name)
    {
        
    }


    public function setFirstName($data){
        if(empty($data)){
            throw new Exception("First name is required");
        }

        if(strlen($data) < 3){
            throw new Exception("Min 3 charc requried");
        }
        $this->first_name = $data;
    }

    public function setLastName($data){
        if(empty($data)){
            throw new Exception("Last name is required");
        }

        if(strlen($data) < 3){
            throw new Exception("Min 3 charc requried");
        }
        $this->last_name = $data;
    }
    public function setEmail($data){

        // Regax
        $this->email = $data;
    }
    public function setPassword($data){


        if(empty($data)){
            throw new Exception("Password is required");
        }

        // sha1 40 bit
        // md5 32 bit
        $this->password = sha1($data);
    }
    public function setDob($data){

        $this->dob = $data;
    }

    public function setProfileImage($data){
        $this->email = $data;
    }


}