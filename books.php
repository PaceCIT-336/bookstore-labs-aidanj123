<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
        <?php
            class Book {
                public $title, $author, $blurb, $image_location, $price;
                    function class__construct($title, $author, $blurb, $image_location, $price) {
                        $this->title = $title;
                        $this->author = $author;
                        $this->blurb = $blurb;
                        $this->image_location = $image_location;
                        $this->price = $price;
            }

            
        }
        
        require_once 'login.php';

        $query = "SELECT * FROM books";
        $result = $pdo->query($query);

        while ($row = $result->fetch()) {
            $id = htmlspecialchars($row['BookID']);
            $title = htmlspecialchars($row['Title']);
            $author = htmlspecialchars($row['Author']);
            $description = htmlspecialchars($row['Description']);
            $image_path = htmlspecialchars($row['ImagePath']);
            $price = htmlspecialchars($row['Price']);
            
            $object1  = new Book();
            $object1->title = $title;
            $object1->author = $author;
            $object1->blurb = $description;
            $object1->image_location = $image_path;
            $object1->price = $price;
            $books[] = $object1; 
        }
        ?>
    </body>
</html>