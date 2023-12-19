<?php
include "koneksi.php";

$pass = md5($_POST['password']);
$username = mysqli_real_escape_string($conn, $_POST['username']); // Corrected function name
$password = mysqli_real_escape_string($conn, $pass);
$level = mysqli_real_escape_string($conn, $_POST['level']);

// cek username, terdaftar atau tidak
$cek_user = mysqli_query($conn, "SELECT * FROM tb_login WHERE username = '$username' AND level = '$level'");
$user_valid = mysqli_fetch_assoc($cek_user); // Use mysqli_fetch_assoc

// uji jika username terdaftar
if ($user_valid) {
    if ($password == $user_valid['password']) {
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['level'] = $user_valid['level'];

        if ($level == "user") {
            header('location:../html/user/home.php');
        } elseif ($level == "admin") {
            header('location:../html/index.php');
        } else {
            // Handle unexpected level
            echo "<script>alert('Unexpected user level.'); document.location='index.php';</script>";
        }
    } else {
        echo "<script>alert('Invalid password'); document.location='index.php';</script>";
    }
} else {
    echo "<script>alert('Invalid username or level'); document.location='index.php';</script>";
}
?>
