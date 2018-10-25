<?php
require_once ("Connect_MySql.php");


$user = $_POST["Username"];
$password = $_POST["Password"];

if($connect->connect_error)
{
    die("Connection failed: " . $connect->connect_error);
} else
    {
    $result = $connect->query("select * from medival.login where User='$user' and Password='$password'");
    $row = $result->num_rows;


        if($row > 0){
            echo $row;
            //header('Location: OsadnicyGame.php');
        }else{
            $connect->close();
            header('Location: Form/LoginForm.html');
        }

    }



