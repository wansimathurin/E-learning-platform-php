<?php

$host = 'localhost';
$userName = 'root';
$password = '';
$db_name = 'e-learning';

$connect = mysqli_connect($host,$userName,$password,$db_name);

if (!$connect) {
    echo 'connection to db failed ';
}
