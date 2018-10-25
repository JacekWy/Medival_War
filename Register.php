<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 25.10.2018
 * Time: 21:04
 */
require_once ("Connect_MySql.php");

$user = $_POST["Username"];
$password = $_POST["Password"];
$passwordr = $_POST["RPassword"];
$city = $_POST["City"];



if($connect->connect_error)
{
    die("Connection failed: " . $connect->connect_error);
} else
{
    $connect->query("insert into medival.login (User, Password,RPassword,City) values ('$user','$password','$passwordr','$city')");

    $connect->close();
    header('Location: Index.html');

}



