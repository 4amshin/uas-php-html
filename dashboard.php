<?php

/*import database connection*/
include 'database/db_config.php';

session_start();

if(!isset($_SESSION['username'])) {
    header("Location: index.php?access_denied");
}

/*ambil semua data dalam tabel 'dashboard-menu*/
$query = "SELECT * FROM `dashboard-menu`";
$result = mysqli_query($connect, $query);

/*tutup koneksi db*/
mysqli_close($connect);


// tampilkan pesan 'login-berhasil' 1x saja
if (!isset($_SESSION['login_message_shown'])) {
    echo '<script>alert("Login Berhasil");</script>';
    $_SESSION['login_message_shown'] = true;
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
    <div class="container">
        <h1 class="title">Admin Dashboard</h1>
        <a href="controller/do_logout.php" class="logout-button">LogOut</a>
        <div class="option">
            <?php while ($menus = mysqli_fetch_assoc($result)) : ?> 
                <div class="menu-option">
                    <p class="title">
                        <?= $menus['menu-name']; ?>
                    </p>
                    <a href="" class="edit">Edit</a>
                </div>
            <?php endwhile; ?>
        </div>
</body>
</html>