<?php
/**
 * Created by PhpStorm.
 * User: Sandy
 * Date: 5/6/2018
 * Time: 12:08 PM
 */
@$db = new mysqli('localhost', 'sandy', 'sandy123','userlogin');
if(mysqli_connect_errno()){
    echo "<p>Error: Could not connect to database.<br/>
                Please try again later.</p>";
    exit;
}
