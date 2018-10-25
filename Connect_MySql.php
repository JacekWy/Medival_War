<?php
class Connect_MySql
{
    protected $host = "localhost";
    protected $username = "root";
    protected $password="";
    protected $base = "Login";
    public $connection;

    function __construct()
    {
        $this->connection = new mysqli($this->host,$this->username,$this->password,$this->base);
    }


}
$con = new Connect_MySql();
$connect = $con->connection;

