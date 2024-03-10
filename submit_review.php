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
            $stmt = $pdo->prepare("insert into reviews (BookID,Rating,Review) VALUES(?,?,?)");

            $id = $_POST['book'];
            $rating = $_POST['rating'];
            $review = $_POST['review'];

            $stmt->bindParam(1, $id, PDO::PARAM_INT);
            $stmt->bindParam(2, $rating, PDO::PARAM_INT);
            $stmt->bindParam(3, $review, PDO::PARAM_STR);
            $review = sanitizeString($_POST['review']);
            if ($review != '') {$review = NULL;}
            $stmt->execute([$id, $rating, $review]);
            if ($stmt->rowCount() == 1) {echo "Review accepted";}
        } else {
            header("Location: review.php"); 
        }
        
        ?>
        <a href="review.php"><button type="button">Click Me!</button></a>
    </body>
</html>