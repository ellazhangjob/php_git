<?php
/**
 * Created by PhpStorm.
 * User: Sandy
 * Date: 4/15/2018
 * Time: 6:45 PM
 */

$buttons = array("Home" => "home.php",
    "Contact" => "contact.php",
    "Services" => "services.php",
    "Site Map" => "map.php");
while(list($name, $url) = each($buttons)){
    echo $name .  $url;
}