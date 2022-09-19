<?php
    # to avoid undefined errors from the post method
    error_reporting(0);

    # used post method to get the data's form private
    $username = $_POST['username'];
    $password = $_POST['password'];

    #cookie variables
    $cookie_auth = "auth";
    $cookie_value = "OK";
    $cookie_user = "username";
    $cookie_pass = "password";

    #cookie set with time limit of 20 seconds
    #the loggedin.php will read this
    if(!empty($username) && !empty($password)){
        setcookie($cookie_user, $username, time()+20);
        setcookie($cookie_pass, $password, time()+20);
        setcookie($cookie_auth, $cookie_value, time()+20);
        header("location: loggedin.php");
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" value="Log Me In">
    </form>
</body>
</html>