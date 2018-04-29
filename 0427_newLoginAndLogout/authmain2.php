<?php
session_start();

if($_POST){
    $userid = $_POST['$userid'];
    $password = $_POST['password'];
    echo $userid. $password;
}


/*
if(isset($_POST['$userid']) && isset($_POST['password'])){
    $userid = $_POST['$userid'];
    $password = $_POST['password'];

    @$db = new mysqli('localhost', 'sandy', 'sandy123','sandy');
    if(mysqli_connect_errno()){
        echo "<p>Error: Could not connect to database.<br/>
                Please try again later.</p>";
        exit;
    }

    $query = "select userid, password from authorized_users where userid=? and password=?";
    $stmt  = $db->prepare($query);
    $stmt->bind_param('ss', $userid, $password);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows == 1){
        $_SESSION['valid_user'] = $userid;
    }
    $db->close();
}*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style type="text/css">

    </style>
</head>
<body>
<h1>Home Page</h1>
<?php



if(isset($_SESSION['valid_user'])){
    echo '<p>You are logged in as: ' . $_SESSION['valid_user'] . '<br />';
    echo '<a href="logout.php">Log Out</a><p>';
} else {
    if(isset($userid)){
        echo '<p>Failed to login. </p>';
    }
    else{
        echo '<p>You are not logged in. </p>';
    }

    echo '<form action="authmain.php" method="post">';
    echo '    <fieldset>';
    echo '        <legend>Login Page</legend>';
    echo '        <p>';
    echo '            <lable for="userid">UserID:</lable>';
    echo '            <input type="text" name="userid" id="userid" size="30"';
    echo '        </p>';
    echo '        <p>';
    echo '            <lable for="password">Password:</lable>';
    echo '            <input type="text" name="password" id="password" size="30"';
    echo '        </p>';
    echo '    </fieldset>';
    echo '    <button type="submit" name="login">Login</button>';
    echo '</form>';
}
?>
<p><a href="members_only.php">Go to Members Section</a></p>
</body>
</html>
