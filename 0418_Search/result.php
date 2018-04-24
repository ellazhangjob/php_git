<?php
    //1, 检查和过滤用户输入数据
    $searchType = $_POST['searchType'];
    $searchTerm = trim($_POST['searchTerm']);
    if (!$searchType || !$searchTerm){
        echo "<p>You have not entered search details.<br/>
                Please go back and try again.</p>";
        exit;
    }
    if($searchType == 'Author' || $searchType == 'Title' || $searchType == 'ISBN'){
        ;
    }
    else{
        echo "<p>That is not a valid search type. <br/>
                Please go back and try again.</p>";
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Catalog Search</title>
</head>
<body>
    <h1>Book Catalog Search Result</h1>
    <?php
    //2, 建立DB连接
    @$db = new mysqli('localhost', 'sandy','sandy123','sandy');
    if(mysqli_connect_error()){
        echo "<p>Error: Could not connect to database.<br/>
                Please try again later.</p>";
        exit;
    }
    //3, 执行SQL查询数据库
    $query = "select ISBN, Author, Title, Price from Books 
                where $searchType like concat('%',?,'%')";
    $stmt  = $db->prepare($query);
    $stmt->bind_param('s', $searchTerm);
    //4，读取查询结果
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($isbn, $author, $title, $price); //与数据库字段顺序一致
    echo "<p>Number of Books found: " . $stmt->num_rows. "</p>";
    while($stmt->fetch()){
        echo "<p><strong>Title: ". $title. "</strong></p>";
        echo "<br />Author: ". $author;
        echo "<br />ISBN: ". $isbn;
        echo "<br />Price: ". $price;
    }
    //5，断开数据库连接
    $result->free();
    $db->close();
    ?>
</body>
</html>