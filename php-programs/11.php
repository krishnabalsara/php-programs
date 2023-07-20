<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <!-- inheritance -->
    <?php
        class Chef{
            function makeChicken(){
                echo "The chef makes chicken <br>";
            }
            function makeSalad(){
                echo "The chef makes salad <br>";
            }
            function makeSpecialDish(){
                echo "The chef makes bbq ribs <br>";
            }
        }

        class italianChef extends Chef{
            function makePasta(){
                echo "the chef makes pasta";
            }
            function makeSpecialDish(){
                echo "the chef makes chicken parm";
            }
        }
        $chef = new Chef();
        $chef-> makeSpecialDish();

        $italianChef = new italianChef();
        $italianChef-> makeSpecialDish();   //function overriding
    ?>
</body>
</html>
