<?php
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
?>

<html>
    <body>
    <head>
    <title>Bob's Auto Parts - Order Results</title>    
    </head>
    </body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <?php 
        echo "<p>Order processed at ";
        echo date('H:i, jS F Y');
        echo "</p>";
        echo '<p>Your order is as follows: </p>';
    
        $totalqty = 0;
        $totalamount = 0.00;
    
        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);
    
        $totalqty = $tireqty + $oilqty + $sparkqty;
        echo "Items ordered: ".$totalqty."<br />";
    
    ?>
</html>