<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 25.10.2018
 * Time: 22:17
 */
require_once ("Connect_MySql.php");
session_start();
$user = $_SESSION['$user'];
echo $user."</br>";

$result = $connect->query("select * from medival.materials as mat join medival.login as log on  mat.id = log.id where log.User = '$user'");

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo "Wood: ". $row['Wood']."</br>";
        echo "Stone: ".$row['Stone']."</br>";
        echo "Food: ".$row['Food']."</br>";
        echo "People: ".$row['People']."</br>";
    }
}