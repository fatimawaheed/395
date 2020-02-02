<?php 


class User{

    private $first_name;


    public function __set($name, $value)
    {

        $methodName = "set";

        $explode = explode("_", $name);

        $map = array_map('ucfirst', $explode);
        $methodName = $methodName . implode('',$map );
        $this->$methodName($value);
    }

    public function __get($name)
    {
        
    }


    public function setFirstName($data){
        if(empty($data)){
            
        }
        $this->first_name = $data;
    }

    public function setEmail($data){
        $this->email = $data;
    }


}