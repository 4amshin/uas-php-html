<?php 

include '../database/db_config.php';

$username = (htmlentities($_POST['username']));
$password = (htmlentities($_POST['username']));
// $password = (htmlentities(md5($_POST['username'])));

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$runQuery = $connect->query($query);

if($runQuery->num_rows > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: ../dashboard.php");
} else {
    echo '<h1>Username atau Kata Sandi Salah</h1>';
}

?>