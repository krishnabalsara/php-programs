<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <!-- functions -->
    <?php
        function sayHi($name, $age){
            echo "Hello $name, you are $age <br>";
        }

        sayHi("Jade", 25);
        sayHi("Tom", 40);
        sayHi("Oscar", 35);

    ?>
    <br><br><br><hr><br><br>

    <!-- return stats -->
    <?php
        function cube($num){
            return $num * $num * $num;
            echo "this won't be printed as return statment will break it out of the function and never excecute anything afterwards";
        }

        echo cube(5);
    ?>
    
</body>
</html>