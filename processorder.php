<?php
    $tireqty = $_POST['tireqty']; 
    $oilqty = $_POST['oilqty']; 
    $splarkty = $_POST['splarkty']; 
    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPLARKPRICE', 4);
    define('TAX', 0.13);
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Order Results</title>
</head>
<body>
   <h1>Bob's Auto Parts</h1>
   <h2>Order Results</h2>
   <?php
      echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
      
      echo "Your order is as follows: <br />";
      echo htmlspecialchars($tireqty).' tires <br />';
      echo htmlspecialchars($oilqty).' bottles of oil <br />';
      echo htmlspecialchars($splarkty).' spark plugs <br />';
      echo "<br />";

      $totalamount = $tireqty + $oilqty + $splarkty;
      $subtotal    = $tireqty  * TIREPRICE 
                   + $oilqty   * OILPRICE
                   + $splarkty * SPLARKPRICE;
      $subtotaltax = $subtotal * (1 + TAX);
      echo "Iteams ordered: " . $totalamount . '<br />';
      echo "Subtotal: $" .  number_format($subtotal, 2) . '<br />';
      echo "Total including tax: $" . number_format($subtotaltax, 2);
   ?>
</body>
</html>