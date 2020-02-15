<?php


class DatabaseConnection
{

    protected $db;

    public function __construct()
    {
        $this->getConnection();
    }

    public function getConnection()
    {

        $mysql = mysqli_connect('localhost', 'root', '');

        if (!empty($mysql->connect_error)) {
            throw new Exception('Connection not created');
        }

        $mysql->select_db('evs395_php');
        if (!empty($mysql->error)) {
            throw new Exception('Unknown Database');
        }

        $this->db = $mysql;
    }
}

class User extends DatabaseConnection
{

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
        $methodName = $methodName . implode('', $map);
        if (!method_exists($this, $methodName)) {
            throw new Exception("Setter method not exists against this $name");
        }
        $this->$methodName($value);
    }

    public function __get($name)
    {
    }


    public function setFirstName($data)
    {
        if (empty($data)) {
            throw new Exception("First name is required");
        }

        if (strlen($data) < 3) {
            throw new Exception("Min 3 charc requried");
        }
        $this->first_name = $data;
    }

    public function setLastName($data)
    {
        if (empty($data)) {
            throw new Exception("Last name is required");
        }

        if (strlen($data) < 3) {
            throw new Exception("Min 3 charc requried");
        }
        $this->last_name = $data;
    }
    public function setEmail($data)
    {

        // Regax
        $this->email = $data;
    }
    public function setPassword($data)
    {


        if (empty($data)) {
            throw new Exception("Password is required");
        }

        // sha1 40 bit
        // md5 32 bit
        $this->password = sha1($data);
    }
    public function setDob($dateOfBirth)
    {
        extract($dateOfBirth);

        //Assignment:  Month convert in integer 
        if (!checkdate(2, $day, $year)) {
            throw new Exception("Select Correct Date");
        }

        $dob_timestamp = mktime(0, 0, 0, 2, $day, $year);
        $this->dob = $dob_timestamp;
    }

    public function setProfileImage($image)
    {
        if ($image['error'] == 4) {
            throw new Exception("Select Image");
        }


        if ($image['size']  > 2097152) {
            throw new Exception("Image size greater then 2mb");
        }

        // echo $image['type'];
        if ($image['type'] != 'image/jpeg') {
            throw new Exception("Only support JPG / JPEG format");
        }

        $image_size = getimagesize($image['tmp_name']);

        if ($image['type'] != $image_size['mime']) {
            throw new Exception("Select correct Image");
        }

        $getExt =  explode('.', $image['name']);
        $getExt = end($getExt);

        $image_name = strtolower($this->first_name) . ".$getExt";
        $this->profile_image = $image_name;
    }


    public function addToUser()
    {

        $query = "INSERT INTO `users` (`id`,`name`,`lastname`,`email`,`password`,`dob`,`profile_image`)VALUES (NULL, '$this->first_name', '$this->last_name', '$this->email', '$this->password', '1988-03-24', '$this->profile_image')";
        $response =  $this->db->query($query);
        return $response;
    }

    public function uploadImage($sourcefile){

        $baseurl_file  = __DIR__ .'/../';
        

        if(!is_dir($baseurl_file.'assets')){
            mkdir($baseurl_file.'assets');
        }
        if(!is_dir($baseurl_file.'assets/users')){
            mkdir($baseurl_file.'assets/users');
        }
        if(!is_dir($baseurl_file.'assets/users/'.strtolower($this->first_name))){
            mkdir($baseurl_file.'assets/users/'.strtolower($this->first_name));
        }
        
        $uploadPath = $baseurl_file.'assets/users/'.strtolower($this->first_name) .'/' .$this->profile_image;
// dd1($uploadPath);

        move_uploaded_file($sourcefile,$uploadPath);
        dd($sourcefile);
    }
}
