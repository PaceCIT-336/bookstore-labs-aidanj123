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
        $object1 = new Book();
            $object1->title = "Learning PHP, MySQL & JavaScript";
            $object1->author = "Robin Nixon";
            $object1->blurb = "A step-by-step guide to creating dynamic websites.";
            $object1->image_location = "assets/imgs/learningphp.jpg";
            $object1->price = "60";

            $object2 = new Book();
            $object2->title = "Learning Python";
            $object2->author = "Mark Lutz";
            $object2->blurb = "Powerful Object-Oriented Programming";
            $object2->image_location = "assets/imgs/learningpython.jpg";
            $object2->price = "49";

            $object3 = new Book();
            $object3->title = "HTML & CSS 9th Ed";
            $object3->author = "Joe Casabona";
            $object3->blurb = "Design and build webpages.";
            $object3->image_location = "assets/imgs/htmlcss.jpg";
            $object3->price = "35";

            $object4 = new Book();
            $object4->title = "American Heritage Dictionary";
            $object4->author = "";
            $object4->blurb = "The English Language";
            $object4->image_location = "assets/imgs/dictionary.jpg";
            $object4->price = "55";

            $books[] = $object1; 
            $books[] = $object2; 
            $books[] = $object3; 
            $books[] = $object4; 
        ?>
    </body>
</html>