<?php 
    require_once "bootstrapping/load_files.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration</title>
</head>
<body>
    <form action="<?php echo BASE_URL .'process/user_registration.php' ?>" method="post">
        First Name:<input type="text" name="first_name"><br>
        Last Name:<input type="text" name="last_name"><br>
        Email:<input type="email" name="email"><br>
        Password:<input type="password" name="password"><br>
        Retype Password:<input type="password" name="retype_password"><br>
        Profile Image:<input type="file" name="profile_image"><br>
        <input type="submit" value="Registration"><br>
    </form>
</body>
</html>