<!DOCTYPE html>
<html>
    <head>
        <?php 
        require_once("login.php"); 
        ?>
    </head>
    <body>
        <?php
        function sanitizeString($var)
        {
            $var = stripslashes($var);
            $var = strip_tags($var);
            $var = htmlentities($var);
            return $var;
        }

        if (!empty(($_POST['submit']))) {
            $query = "INSERT INTO reviews(BookID,Rating,Review) values($id,$rating,$review)";
        } else {
            header("Location: review.php"); 
        }
        
        ?>
    </body>
</html>