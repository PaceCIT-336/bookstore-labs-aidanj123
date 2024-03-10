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
            $stmt = $pdo->query("INSERT INTO reviews(BookID,Rating,Review) values($id,$rating,$review)");
            $review = sanitizeString($_POST['review']);
            if ($review != '') {$review = NULL;}
            $stmt->execute();
            if ($stmt->rowCount() == 1) {echo "Review accepted";}
        } else {
            header("Location: review.php"); 
        }
        
        ?>
        <a href="review.php"><button type="button">Click Me!</button></a>
    </body>
</html>