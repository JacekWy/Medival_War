<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 26.10.2018
 * Time: 14:53
 */

require_once ("Connect_MySql.php");



$user = $connect->query("select * from medival.login");

if($user->num_rows > 0 ){
    while ($row = $user->fetch_row()){
        $userr = $row[1];
        $id = $row[0];
        echo $userr;
        echo $id;
        $wood_prod = $connect->query("select saw.Prod from medival.login as log join medival.sawmill as saw on log.Sawmill_LVL = saw.LVL where log.User = '$userr'");
        $row_wood = $wood_prod->fetch_row();
        $up_wood = $row_wood[0];
        echo $up_wood;

        $connect->query("update medival.materials set wood = wood + '$up_wood' where id = '$id'");


    }
}
