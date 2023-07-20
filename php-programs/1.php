<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        echo "<h1>krishna's site</h1>";
        echo "<hr>";
        echo "<h3><i>let's learn PHP...</i></h3><br>";


        echo "<ul><li><h4>Variables</h4></li></ul>";
        $name = "Sandy";
        $age = 2;
        echo "A cat comes to our garden, we named her $name! <br>";
        echo "She's $age. <br> ";
        $name = "Jade";
        echo "But later my mom changed her name to $name! <br><br>";


        echo "<ul><li><h4>Data types</h4></li></ul>";
        $phrase = "To be or not to be";
        $age = 30;
        $gpa = 3.9; //decimal or floating point num
        $isMale = false;
        echo "$phrase<br><br>";


        echo "<ul><li><h4>Strings</h4></li></ul>";
        $phrase = "Three little birds";
        //converting to uppercase
        echo strtoupper("$phrase <br>");
        //string length
        echo strlen("$phrase <br>");
        //changing character
        $phrase[0] = "P";
        echo "$phrase <br>";
        //print particular char
        echo $phrase[3];
        //replace string
        echo str_replace("Phree", "Two", $phrase);
        //get a substring
        echo substr($phrase, 6, 6);
        echo "<br><br>";


        echo "<ul><li><h4> Numbers </h4></li></ul>";
        //php can also handle negative and decimal numbers
        echo 40;
        echo 5 + 7;
        echo 5.3 * 8;
        //order of operation
        echo 4 + 5 * 10;    //54
        echo (4 + 5) * 10;   //90
        //increment
        $num = 10;
        $num++;
        echo $num;   //11
        $num += 25;    //$num = $num + 25;
        echo $num;   //36
        //math functions
        echo abs(-100);   //100
        echo pow(2,4);    //16
        echo sqrt(144);    //12
        echo max(2,11);    //11
        echo min(2,11);    //2
        echo round(3.32);   //3
        echo ceil(3.32);    //4
        echo floor(3.9);    //3

    ?>
</body>
</html>