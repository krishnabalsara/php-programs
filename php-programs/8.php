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
    //classes & objects
        //class= blueprint or defining a datatype
        class Book{
            var $title;
            var $author;
            var $pages;

            //constructor
            function __construct($aTitle, $aAuthor, $aPages){
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        //object = instance of a class
        $book1 = new Book("Middlemarch", "George Eliot", 600);
        $book2 = new Book("Deep Work", "Cal Newport", 300);

        // $book1 = new Book();
        // $book1->title = "Middlemarch";
        // $book1->author = "George Eliot";
        // $book1->pages = 600;

        // $book2 = new Book();
        // $book2->title = "Deep Work";
        // $book2->author = "Cal Newport";
        // $book2->pages = 300;

        echo $book1->title;

    ?>


</body>
</html>