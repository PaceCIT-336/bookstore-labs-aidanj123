<!DOCTYPE html>
<head></head>
<body>
    <?php
        $data = 'bookstore'; 
        $user = 'webapp'; 
        $pass = '/IZP@@*_P@62WKIj'; 

        try
        {
            $pdo = new PDO($attr, $user, $pass, $opts);
        }
            catch (PDOException $e)
        {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }

        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
    ?>
</body>