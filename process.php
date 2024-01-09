<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ice Cream Order Summary</title>
</head>
<body>
    <h1>Thank you for your order!</h1>
    <?php
        //turn on error reporting
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        //define constants
        define('PRICE_PER_SCOOP', 2.50);
        define('SALES_TAX_RATE', 0.11);

        //for testing purposes
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        $scoops = $_POST['scoops'];
        $flavors = $_POST['flavor'];
        $flavorString = implode(", ", $flavors);
        $cone = $_POST['cone'];

        //calculate total due
        $subtotal = PRICE_PER_SCOOP * $scoops;
        $tax = $subtotal * SALES_TAX_RATE;
        $total = $subtotal + $tax;

        //print a summary
        echo "<p>$scoops scoops</p>";
        echo "<p>Flavors: $flavorString</p>";
        echo "<p>Cone: $cone</p>";
        echo "<p>Subtotal: $subtotal</p>";
        echo "<p>Tax: $tax</p>";
        echo "<p>Total: $total</p>";
    ?>
</body>
</html>