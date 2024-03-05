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
            if (get_magic_quotes_gpc())
                $var = stripslashes($var);
            $var = strip_tags($var);
            $var = htmlentities($var);
            return $var;
        }

        if (formSubmitted) {

        }
        
        ?>
    </body>
</html>