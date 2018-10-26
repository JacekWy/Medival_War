<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 26.10.2018
 * Time: 13:15
 */

require_once ("Connect_MySql.php");

$result = $connect->query("select NOW() as Time from dual");

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo $row['Time'];
    }
}