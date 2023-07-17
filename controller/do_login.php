<?php 

include '../database/db_config.php';

$username = (htmlentities($_POST['username']));
$password = (htmlentities($_POST['password']));
// $password = (htmlentities(md5($_POST['username'])));


// cek apakah username benar
$query_username = "SELECT * FROM users WHERE username = '$username'";
$runQuery_username = $connect->query($query_username);

if($runQuery_username->num_rows > 0) {
    //jika username benar lanjut periksa passoword
    $query_password = "SELECT * FROM users WHERE password = '$password'";
    $runQuery_password = $connect->query($query_password);

    if($runQuery_password->num_rows > 0) {
        //password benar - lakukan login
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ../dashboard.php");
    } else {
        //jika password salah 
        echo '<script>alert("Password Anda Salah"); window.location.href="../login.php";</script>';
    }
} else {
    //jika username salah
    echo '<script>alert("Username Tidak Ditemukan"); window.location.href="../login.php";</script>';
}

// if($runQuery->num_rows > 0) {
//     session_start();
//     $_SESSION['username'] = $username;
//     header("Location: ../dashboard.php");
// } else {
//     // echo '<h1>Username atau Kata Sandi Salah</h1>';
//     echo '<script>alert("Wrong Password"); window.location.href="../login.php";</script>';
// }

?>