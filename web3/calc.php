<html>
<head><title>Calculation Result</title></head>
<body>
    <?php

        $operations = $_POST['calc'];
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];

        # test if input is_numeric
        if(is_numeric($val1) && is_numeric($val2)){

            # test if calc is not null
            if(!empty($val1) && !empty($val2)){
                
                # switch statement for value of calc
                switch($operations){
                    case "add":
                        $result = $val1+$val2;
                        break;
                    case "mul":
                        $result = $val1*$val2;
                        break;
                    case "sub":
                        $result = $val1-$val2;
                        break;
                    case "div":
                        $result = $val1/$val2;
                        break;

                }
                echo "Calculation result: $result";
            }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>