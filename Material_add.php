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
        $wood_prod = $connect->query("select saw.Prod from medival.login as log join medival.sawmill as saw on log.Sawmill_LVL = saw.LVL where log.User = '$row[1]'");
        $row_wood = $wood_prod->fetch_row();


        $connect->query("update medival.materials set wood = wood + '$row_wood[0]' where id = '$row[0]'");


    }
}
