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
    $_SESSION['stor']="--Session variables stored and that are only saved on the server.";

    ?>
</body>
</html>