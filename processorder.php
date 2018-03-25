<?php
    $tireqty = $_POST['tireqty']; 
    $oilqty = $_POST['oilqty']; 
    $splarkty = $_POST['splarkty']; 
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
      echo htmlspecialchars($tireqty).' tires <br />';
      echo htmlspecialchars($oilqty).' bottles of oil <br />';
      echo htmlspecialchars($splarkty).' spark plugs <br />';

      echo phpinfo();
   ?>
</body>
</html>