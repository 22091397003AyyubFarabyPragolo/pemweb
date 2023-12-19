<?php
require '../Login/koneksi.php';
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['level'])) {
    echo "<script>
    alert('Login required');
    document.location='../login/index.php';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.html">Tentang saya</a></li>
        <li><a href="porto.html">Portofolio</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="https://wa.me/0812345666">Contact</a></li>
        <li><a href="hal_admin.php">Hal admin</a></li>
        <li><a href="../Login/logout.php">Logout</a></li>
      </ul> 

    <div style="text-align: center;">
      <div class="container">
        <h1 >Selamat Datang Di Website Saya
          <div class="ats-3"><?= $_SESSION['level'] ?></div>
        </h1>
        <img width="900" src="Gambar/kaws.jpg">
        <h2>Brian Donnelly</h2>
      </div>
     </div>
<br>
     <br>
     <div class="container">
        <div class="slideshow">
        <img width="400" src="Gambar/kaws 2.jpeg" alt="">
        <img width="400" src="Gambar/kaws 1.jpeg" alt="">
        <img width="400" src="Gambar/kaws 3.png" alt="">
     </div>

     <div>
      <br><br><br>
       <img width="1100" src="Gambar/aw3.jpg">
     </div>
  <script src="script.js"></script>
  </body>
  </html>
  

</body>
</html>
