<?php
// start session
session_start();

require_once 'FUNCTIONS/components.php';
require_once 'FUNCTIONS/header.php';
require_once 'FUNCTIONS/CreateDb.php';

// if add to cart is clicked
if (isset($_POST['add'])) {
    // print_r($_POST['product_id']);
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if (in_array($_POST['product_id'], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart...')</script>";
            echo "<script>window.location = 'index.php'</script>";
        } else {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );
            $_SESSION['cart'][$count] = $item_array;
        }
    } else {
        $item_array = array(
            'product_id' => $_POST['product_id']
        );
        // create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/style.css" />
    <title>Online Shopping</title>
</head>

<body>
    <!-- container -->
    <div class="container">
        <!-- header -->
        <?php
        myHeader("Bucket");
        ?>
        <!-- section -->
        <div class="section">
            <?php
            $result = $database->getData();
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }
            }

            ?>
        </div>
        <!-- footer -->
        <div class="footer">
            <div class="footer-1">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Facebook</a></li>
                </ul>
            </div>
            <div class="footer-2">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Facebook</a></li>
                </ul>
            </div>
            <div class="footer-3">
                <h3>Quick Links</h3>
                <div class="form">
                    <input type="email" placeholder="Enter your email" />
                    <input type="text" placeholder="Message">
                    <button class="btn">Send</button>
                </div>
                </form>
            </div>

        </div>
</body>

</html>