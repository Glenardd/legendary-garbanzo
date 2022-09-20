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
<?php 
session_start();
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
    <?php
    echo "What function do we use to start a session?";
    echo "<br>";
    $_SESSION['func']="--We use the function session_start(); to start a session.";
    echo $_SESSION['func'];
    echo "<br>";
    echo "Where are these session variables stored?"; 
    echo "<br>";
<<<<<<< HEAD
    $_SESSION['stor']=" --Session variables that are only stored on the server.";
=======
    $_SESSION['stor']="--Session variables stored and that are only saved on the server.";
>>>>>>> 19d150d21eed53d792f31eb761125618a099c233
    echo $_SESSION['stor'];
    ?>
</body>
</html>