<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 25.10.2018
 * Time: 22:17
 */

require_once ("Connect_MySql.php");


$result = $connect->query("select * from medival.materials");

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo "Wood: ". $row['Wood']."</br>";
        echo "Stone: ".$row['Stone']."</br>";
        echo "Food: ".$row['Food']."</br>";
        echo "People: ".$row['People']."</br>";
    }
}