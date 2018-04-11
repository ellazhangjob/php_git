<?php
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $feedback = trim($_POST['feedback']);

    $toaddress = "ellazhang.job@gmail.com";
    $email_array = explocde('@', $toaddreass);
    if(strtolower($email_array[1]) == 'bigcustomer.com'){
        $toaddress = "EllaZhang.job@gmail.com";
    } else {
        $toaddress = "sandyzhang@gmail.com";
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
        ?>
    </body>
</html>
