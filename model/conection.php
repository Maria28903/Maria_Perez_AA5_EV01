<?php
$serverName = "localhost";
$userName = "root";
$password ="";
$dbName = "login_mvc";

$conection = new mysqli($serverName,$userName,$password,$dbName);

if ($conection->connect_error){
    die("Conexion fallida: ".$conection -> connect_error) ;
} 