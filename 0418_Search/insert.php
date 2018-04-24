<?php
    if(!isset($_POST['ISBN']) || !isset($_POST['author']) || !isset($_POST['title']) || !isset($_POST['price'])){
        echo "<p>You have no entered all the required details.<br/>
                Please go back and try again.<p/>";
        exit;
    }
    $isbn   = trim($_POST['ISBN']);    // 注意$_POST['ISBN']
    $author = trim($_POST['author']);
    $title  = trim($_POST['title']);
    $price  = trim($_POST['price']);
    $price  = doubleval($price);

    @$db = new mysqli('localhost', 'sandy', 'sandy123', 'sandy');

    if(mysqli_connect_error()){
        echo "<p>Error: Could not connect to database.<br/>
                Please try again later.</p>";
        exit;
    }

    $query = "insert into Books values(?,?,?,?)";    //注意只写？
    $stmt  = $db->prepare($query);
    $stmt->bind_param('sssd',$isbn,$author, $title, $price);
    $stmt->execute();

    if($stmt->affected_rows > 0){
        echo "<p>Book inserted into the database.<p/>";
    } else {
        echo "<p>An error has occurred..<br/>
                The item was not added.<p/>";
    }

    $db->close();

