<?php

//import db koneksi
include 'database/db_config.php';

//import database
session_start();

//chek session apakah user login atau belum
if(!isset($_SESSION['username'])) {
    header("Location: index.php?access_denied");
}

//cek apakah menu-id ada atau tidak
if(isset($_GET['menu_id'])) {
    $menuId = $_GET['menu_id'];

    //ambil nama menu berdasarkan menuId
    $titleQuery = "SELECT * FROM `dashboard-menu` WHERE `menu-id` = '$menuId' LIMIT 1";
    $titleResult = mysqli_query($connect, $titleQuery);
    $bigTitle = mysqli_fetch_assoc($titleResult)['menu-name'];

    //cek jika menuId = service-menu maka query tabel service-menu
    if($menuId === 'service-menu') {
        $contentQuery = "SELECT * FROM `service-menu`";
    } else {
        //else query tabel dashboard-content
        $contentQuery = "SELECT * FROM `dashboard-content` WHERE `menu-id` = '$menuId'";  
    }
    $contentResult = mysqli_query($connect, $contentQuery);
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Editor</title>
    <!--Css Link-->
    <link rel="stylesheet" href="assets/css/dashboard_editor.css" />
</head>
<body>
    
    <div class="card">
        <a class="back-button" href="dashboard.php">Kembali</a>
        <h1 class="title"><?= $bigTitle; ?></h1>
        <div class="container">
            <?php if ($menuId === 'service-menu') : ?>
                <!--Tampilkan field untuk Service Section jika menuId = 'service-menu'-->
                <?php while ($data = mysqli_fetch_assoc($contentResult)) : ?>
                    <div class="field">
                        <h1 class="title"><?= $data['title']; ?></h1>
                        <div class="icon">
                            <img src="<?= $data['icon-url']; ?>" alt="">
                            <input type="iconUrl" value="<?= $data['icon-url']; ?>">
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <!--else tampilkan field umum-->
                <?php while ($data = mysqli_fetch_assoc($contentResult)) : ?>
                    <div class="field">
                        <h1 class="title"><?= $data['title']; ?></h1>
                        <?php if (strlen($data['content']) > 50) : ?>
                            <!--Jika content terlalu panjang gunakan textarea-->
                            <textarea class="content" name="content" id="content" cols="50" rows="5">
                                <?= $data['content']; ?>
                            </textarea>
                        <?php else: ?>
                            <!--else guanakan input type text-->
                            <input class="content" type="content" value="<?= $data['content']; ?>">
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>