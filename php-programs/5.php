<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <!-- if statements -->
    <?php
        $isMale = false;
        $isTall = true;
        if($isMale && $isTall){
            echo "You are a tall dude";
        }elseif($isMale && !$isTall){
            echo "You are a short dude";
        }elseif(!$isMale && $isTall){
            echo "You are not male but are tall"; 
        }else{
            echo "You are not a tall dude";
        }
    ?>
    <br><hr><br>

    <!-- if statements with comparison operators --> 
    <?php
        function getMax($num1, $num2, $num3){
            if($num1 >= $num2 && $num1 >= $num3){
                return $num1;
            }elseif($num2 >= $num1 && $num2 >= $num3){
                return $num2;
            }else{
                return $num3;
            }
        }

        echo getMax(366, 5577, 1023);

    ?>
    <br><hr><br>

    <!-- switch statements -->

    <form action="5.php" method="post">
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php
        $grade = $_POST["grade"];
        
        switch($grade){
            case "A":
                echo "You did amazing!";
                break;
            case "B":
                echo "You did pretty good";
                break;
            case "C":
                echo "You did poorly";
                break;
            case "D":
                echo "You did bad";
                break;
            case "F":
                echo "YOU FAILED!";
                break;
            default:
                echo "Invalid grade";
        }
    ?>
    <br><hr><br>


    <!-- while loops -->
    <?php
        $index = 1;

        while($index <= 5){
            echo "$index <br>";
            $index++;
        }
    ?>
    <br><hr><br>

    
    <!-- do-while loops -->
    <?php
        $index = 6;

        do{
            echo "$index <br>";
            $index++;
        } while($index <= 5);
    ?>
    <br><hr><br>


    <!-- for loops -->
    <?php 
        $luckyNumbers = array(3,4, 5,7,14,22);
        
        for($i = 0; $i <= count($luckyNumbers); $i++){
            echo "$luckyNumbers[$i] <br>";
        }
    ?>


</body>
</html>