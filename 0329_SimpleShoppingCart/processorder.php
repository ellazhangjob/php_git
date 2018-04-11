<?php
    $tireqty = $_POST['tireqty']; 
    $oilqty = $_POST['oilqty']; 
    $splarkty = $_POST['splarkty']; 
    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPLARKPRICE', 4);
    define('TAX', 0.13);
    $find = $_POST['find']; 
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
      echo "Total including tax: $" . number_format($subtotaltax, 2) . '<br />';

      switch($find) {
          case "a" :
              echo "<p>Regular cusotmer. </p>";
              break;
          case "b" :
              echo "<p>Customer referred by Media or Advertising. </p>";
              break;
          case "c" :
              echo "<p>Customer referred by Phone directory. </p>";
              break;
          case "d" :
              echo "<p>Customer referred by Friends or Family. </p>";
              break;
          default :
              echo "<p>We do not know how this customer found us. </p>";
              break;
      }

      //if(isset($find)) {
      //   if($find == "a")      echo "<p>Regular cusotmer. </p>";
      //   elseif ($find == "b") echo "<p>Customer referred by Media or Advertising. </p>";
      //   elseif ($find == "c") echo "<p>Customer referred by Phone directory. </p>";
      //   elseif ($find == "d") echo "<p>Customer referred by Friends or Family. </p>";
      //}
   ?>
</body>
</html>