<?php

//import db koneksi
include 'database/db_config.php';

//import database
session_start();

//chek session apakah user login atau belum
if (!isset($_SESSION['username'])) {
    header("Location: index.php?access_denied");
    exit;
}

//cek apakah menu-id ada atau tidak
if (isset($_GET['menu_id'])) {
    $menuId = $_GET['menu_id'];

    //ambil nama menu berdasarkan menuId
    $titleQuery = "SELECT * FROM `dashboard-menu` WHERE `menu_id` = '$menuId' LIMIT 1";
    $titleResult = mysqli_query($connect, $titleQuery);
    $bigTitle = mysqli_fetch_assoc($titleResult)['menu_name'];

    //cek jika menuId = service-menu maka query tabel service-menu
    if ($menuId === 'service-menu') {
        $contentQuery = "SELECT * FROM `service-menu`";
    } else {
        //else query tabel dashboard-content
        $contentQuery = "SELECT * FROM `dashboard-content` WHERE `menu_id` = '$menuId'";
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
            <form action="controller/update_table.php" method="post">
                <!-- Add a hidden input field to pass the menu_id -->
                <input type="hidden" name="menu_id" value="<?= $menuId; ?>">
                <?php if ($menuId === 'service-menu') : ?>
                    <!-- Editable fields for Service Section if menuId = 'service-menu' -->
                    <?php while ($data = mysqli_fetch_assoc($contentResult)) : ?>
                        <div class="field">
                            <h1 class="title"><?= $data['title']; ?></h1>
                            <div class="icon">
                                <img src="<?= $data['icon_url']; ?>" alt="">
                                <input type="text" name="titles[<?= $data['id']; ?>]" value="<?= $data['title']; ?>">
                                <input type="text" name="iconUrls[<?= $data['id']; ?>]" value="<?= $data['icon_url']; ?>">
                            </div>
                            <!-- Add hidden input field for menu_ids -->
                            <input type="hidden" name="menu_ids[]" value="<?= $data['id']; ?>">
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <!-- Editable fields for other sections -->
                    <?php while ($data = mysqli_fetch_assoc($contentResult)) : ?>
                        <div class="field">
                            <h1 class="title"><?= $data['title']; ?></h1>
                            <?php if (strlen($data['content']) > 50) : ?>
                                <!-- Use textarea if content is too long -->
                                <textarea name="contents[<?= $data['id']; ?>]" cols="50" rows="5"><?= $data['content']; ?></textarea>
                            <?php else : ?>
                                <!-- Use input type text for other fields -->
                                <input type="text" name="contents[<?= $data['id']; ?>]" value="<?= $data['content']; ?>">
                            <?php endif; ?>
                            <!-- Add hidden input fields for title and menu-id -->
                            <input type="hidden" name="titles[<?= $data['id']; ?>]" value="<?= $data['title']; ?>">
                            <input type="hidden" name="menu_ids[<?= $data['id']; ?>]" value="<?= $data['menu_id']; ?>">
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <button type="submit" name="save-button" class="save-button">Simpan</button>
            </form>
            <?php
            if (isset($_GET['debug']) && $_GET['debug'] === 'true') {
                echo "<pre>";
                echo "POST data:\n";
                print_r($_POST);
                echo "</pre>";
            }
            ?>
        </div>
    </div>
</body>

</html>