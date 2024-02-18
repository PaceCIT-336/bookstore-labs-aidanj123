<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rainy Bookstore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
    <?php session_start();
    include_once("books.php");
    include_once("cart.php"); ?>
</head>

<body>
    <header>
        <h1><a href="index.php">Rainy Bookstore</a></h1>
    </header>
    <main class="container shop">
        <div class="container">
        <?php
            foreach($books as $item)
            {
                
                print "
                <section class='tile'>
                    <img src=$item->image_location>
                    <h3>$item->title</h3>
                    <p>$item->author<br>
                        $item->blurb</p>
                    <p>$item->price</p>
                    <form name='phpbookform' id='phpbookform' action='' method='POST'>
                        <input type='hidden' name='title' value=$item->title>
                        <input type='hidden' name='price' value=$item->price>
                        <button type='submit'>Add to Cart</button>
                    </form>
                </section>";
    
            }
        ?>
    </aside>
    </main>
</body>

</html>