<?php

session_start();

if(!isset($_SESSION['username'])) {
    header("Location: index.php?access_denied");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!--Css Link-->
    <link rel="stylesheet" href="assets/css/dashboard.css" />
</head>
<body>
    <script>alert("Login Berhasil");</script>
    <div class="container">
        <h1 class="title">Admin Dashboard</h1>
        <a href="controller/do_logout.php" class="logout-button">LogOut</a>
        <div class="option">
            <div class="menu-option">
                <p class="title">Home Section</p>
                <a href="" class="edit">Edit</a>
            </div>
            <div class="menu-option">
                <p class="title">About Section</p>
                <a href="" class="edit">Edit</a>
            </div>
            <div class="menu-option">
                <p class="title">Service Section</p>
                <a href="" class="edit">Edit</a>
            </div>
            <div class="menu-option">
                <p class="title">Contact Section</p>
                <a href="" class="edit">Edit</a>
            </div>
            <div class="menu-option">
                <p class="title">Images Url</p>
                <a href="" class="edit">Edit</a>
            </div>
        </div>
</body>
</html>