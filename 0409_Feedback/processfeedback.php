<?php
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $feedback = trim($_POST['feedback']);

    // isset(...)
    /*if(preg_match(' /^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/ ', $email) === 0){ //不匹配
        echo "<p>That is not a valid email address</p>" .
                "<p>Please return to the previous page and try again. </p>";
        exit;
    }*/
    $toaddress = "ellazhang.job@gmail.com";
    $email_array = explode('@', $toaddreass);
    if(strtolower($email_array[1]) == 'bigcustomer.com'){
        $toaddress = "EllaZhang.job@gmail.com";
    } else {
        $toaddress = "sandyzhang1510@gmail.com";
    }

    $subject = "Feedback from website";
    $mailcontent = "Customer name: ". filter_var($name). "\n" .
                    "Customer email: ". $email. "\n" .
                    "Customer COMMENTS: \n". $feedback. "\n" ;
    $fromaddress = "From: webserver@shopping123.com";

    mail($toaddress, $subject, $mailcontent, $fromaddress);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ella's Auto Parts - Feedback Submitted</title>
    </head>
    <body>
        <h1>Feedback submitted</h1>
        <p> Your feedback has been send.</p>
        <?php
        echo nl2br(htmlspecialchars($mailcontent));
        echo $toaddress;
        ?>
    </body>
</html>
