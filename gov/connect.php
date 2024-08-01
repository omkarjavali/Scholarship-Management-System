<?php

$ServerName = 'localhost';
$UserName = 'root';
$Password = '';
$dbName = 'scholarship';  

$connect = mysqli_connect($ServerName, $UserName, $Password, $dbName);

if(!$connect)
{
    echo "Connection failed";
}

?>