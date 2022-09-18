<html>
<head><title>Your Favorite</title></head>
<body>
    <?php

        //check if username is empty
        if (empty($_POST['username'])){
            echo "No inputed username";
        } 
        elseif (!empty($_POST['username'])){
           
           //check if the wine and dish is empty
            if(empty($_POST['color']) && empty($_POST['dish'])){
                echo "No color set and no dish typed";

            }
            elseif(!empty($_POST['color']) && !empty($_POST['dish'])){

                //put the post "color" and "dish" in a variable
                $dish = $_POST['dish'];
                $color = $_POST['color'];
                echo "you really enjoy the $dish especially with a nice $color wine";
            }
        }

    ?>
</body>
</html>