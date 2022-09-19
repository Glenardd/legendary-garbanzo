<?php
    # test cookies if is set, display if set
    # the values entered in the variables starts with cookie is read here
    if(isset($_COOKIE['auth']) && isset($_COOKIE['username']) && isset($_COOKIE['password'])){
        echo "Cookies is set, ";

    # return to index.php if 20 seconds runs out
    }elseif(!isset($_COOKIE['auth']) && !isset($_COOKIE['username']) && !isset($_COOKIE['password'])){
        header("location: index.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
</head>
<body>
    You are logged in and can access all pages on this web site. <br> <a href="anotherpage.php">
    <br>Visit another page on this site?</a>
</body>
</html>