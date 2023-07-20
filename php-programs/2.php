<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
   
    <!-- taking user input -->
    <form action="2.php" method="get">
        Name: <input type="text" name="username"> 
        <br>
        Age: <input type="number" name="age">

        <input type="submit">
    </form>
    <br>
    
    Your name is  <?php echo $_GET["username"] ?>
    <br>
    Your age is <?php echo $_GET["age"] ?>
    <br><br><br><hr><br><br>


    <!-- basic calculator -->
    <form action="2.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit">
    </form>

    Amswer: <?php  echo $_GET["num1"] +  $_GET["num2"]  ?>

    <br><br><br><hr><br><br>


    <!-- GET vs POST -->
    <form action="2.php" method="post">
        Password: <input type="password" name="password"> <br>
        <input type="submit">
    </form>
    <br><br>

    <?php
        echo $_POST["password"];
    ?>


</body>
</html>