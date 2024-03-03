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
                    $id = $item->id;
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
                    <br><a href=\"book_reviews.php?id=$id\"><button>See Reviews</button></a>
                </section>";
                
            }
        ?>
        <aside id="cart">
            <img src="assets/imgs/cart.png">
            <p id="cartSummary">
                Items: <?php echo count($_SESSION["items"]); ?><br><br>
                Total: $<?php echo $_SESSION["total"]; ?>
            </p>
            <form id="checkoutform" name="checkoutform" action="checkout.php" method="POST">
                <input type="hidden" name="cart" id="cartInput" value="<?php echo implode("|", $_SESSION["items"]); ?>">
                <input type="hidden" name="total" id="totalInput" value="<?php echo $_SESSION["total"]; ?>">
                <button id="checkout">Checkout</button>
            </form>
            <form id="clearform" name="clearform" action="" method="POST">
                <button id="clearCart" name="clear" value="clear">Clear Cart</button>
            </form>
        </aside>
    </main>
</body>

</html>