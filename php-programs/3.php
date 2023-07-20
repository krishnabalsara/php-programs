<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <!-- arrays -->
    <?php
        $barbieCast = array("Margot", "Ryan", "Greta", "Issa", 4 ,true);    //can store all data types
        //modify the array
        $barbieCast[2] = "Dua";
        echo $barbieCast[2];
        //add into array
        $barbieCast[6] = "Emma";
        echo $barbieCast[6];
        //count elements in array
        echo count($barbieCast);
    ?>
    <br><br><br><hr><br><br>
    

    <!-- checkboxes -->
    <form action="3.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit">
    </form>

    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[1];    //shows from the checked fruits order
    ?>

    <br><br><br><hr><br><br>

    <!-- associative arrays-> can store key-value pair, student name: grade-->
    <form action="3.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>

    <?php
        $grades = array("Margot"=> "A+", "Ryan"=> "B-", "Greta"=> "A-");
        // echo $grades["Greta"];  //A-, accessing value using key

        //accessing value using key ie student name via user input
        echo $grades[$_POST["student"]];

    ?>


</body>
</html>