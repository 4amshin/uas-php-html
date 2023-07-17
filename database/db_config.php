<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'si-bpjs-2';

$connect = new mysqli($host, $user, $pass, $db_name);

if($connect->connect_error) {
    echo "Terjadi Kesalahan";
}

?>