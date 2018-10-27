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

$wood = $connect->query("select saw.Prod from medival.login as log join medival.sawmill as saw on log.Sawmill_LVL = saw.LVL where log.User = '$user'");




$row = $result->fetch_row();

echo "Wood: ". $row[1]."</br>";
echo "Stone: ".$row[2]."</br>";
echo "Food: ".$row[3]."</br>";
echo "People: ".$row[4]."</br>";
echo "City: ".$row[9]."</br>";
echo "Sawmill LVL: ".$row[10]."</br>";
if($row[1] > 11300) {

    $connect->query("UPDATE login SET Sawmill_LVL = Sawmill_LVL + 1 where User = '$user'");
}else{
    echo "za malo wood"."</br>";
}



$roww = $wood->fetch_row();
echo "Produkcja drzewa/min: ".$roww[0];


