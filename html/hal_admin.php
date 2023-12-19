<?php
//panggil koneksi ke database
include "../Login/koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD - MODAL BOOSTRAP 5</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
  </head>
  <body>

  <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.html">Tentang saya</a></li>
        <li><a href="porto.html">Portofolio</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="https://wa.me/0812345666">Contact</a></li>
        <li><a href="hal_admin.php">Hal Admin</a></li>
        <li><a href="../Login/logout.php">Logout</a></li>
      </ul> 

    <div class="container">
    <div class="mt-3">
    <h3 class="text-center">DASHBOARD ADMIN</h3>
    </div>

<!-- CARD -->
            <div class="card mt-3">
        <div class="card-header bg-success text-white">
            Data User
        </div>
        <div class="card-body bg-light">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
  Tambah Data
</button>

<!-- Tombol Search -->
<div class="card-body">
  <div class="col-md-6 mx-auto">
<form method="POST">
<div class="input-group mb-3">
  <input type="text" name="tcari" class="form-control" placeholder="Cari apa deck ... " autocomplete="off">
  <button class="btn btn-primary" name="bcari" type="submit">Cari</button>
  <button class="btn btn-danger" name="breset" type="submit">Reset</button>
</div>
</form>
  </div>
</div>

<!-- END BUTTON -->
            <!-- TABLE -->
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover">
<tr>
    <th>No.</th>
    <th>Username</th>
    <th>Password</th>
    <th>first_name</th>
    <th>last_name</th>
    <th>email</th>
    <th>gender</th>
    <th>phone_number</th>
    <th>level</th>
    <th>Aksi</th>
</tr>
<!-- Persiapan menampilkan data -->
<?php
$no = 1;

//untuk pencarian data
//jika tombol cari di klik
if(isset($_POST['bcari'])){
  //tampilkan data yg di cari
  $keyword = $_POST['tcari'];
  $q = "SELECT * FROM tb_login WHERE id like '%$keyword%' or
                                 username like '%$keyword%' or
                                 password like '%$keyword%' or
                                 first_name like '%$keyword%' or
                                 last_name like '%$keyword%' or
                                 email like '%$keyword%' or
                                 gender like '%$keyword%' or
                                 phone_number like '%$keyword%' or
                                 level like '%$keyword%' order by
  id desc";
} else {
  $q = "SELECT * FROM tb_login order by id desc";
}


$tampil = mysqli_query($conn, $q);
while($data = mysqli_fetch_array($tampil)) :
?>

<tr>
    <th><?= $no++ ?></th>
    <th><?= $data['username']; ?></th>
    <th><?= $data['password']; ?></th>
    <th><?= $data['first_name']; ?></th>
    <th><?= $data['last_name'] ?></th>
    <th><?= $data['email'] ?></th>
    <th><?= $data['gender'] ?></th>
    <th><?= $data['phone_number'] ?></th>
    <th><?= $data['level'] ?></th>
    <th>
        <a href="#" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop2<?= $no ?>">Ubah</a>
        <a href="#" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop3<?= $no ?>">Hapus</a>
    </th>
</tr>

<!-- Awal Modal Ubah -->
<div class="modal fade" id="staticBackdrop2<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>  

  <!-- FORM -->
  <form method="POST" action="aksi_crud.php">
  <input type="hidden" name="id" value="<?= $data['id']; ?>">
      <div class="modal-body">

  <div class="mb-3">
  <label class="form-label">USERNAME</label>
  <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>" >
  </div>

  <div class="mb-3">
  <label class="form-label">FIRST NAME</label>
  <input type="text" class="form-control" name="first_name" value="<?= $data['first_name'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Last Name</label>
  <input type="text" class="form-control" name="last_name" value="<?= $data['last_name'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Email</label>
  <input type="email" class="form-control" name="email" value="<?= $data['email'] ?>">
  </div>

  <div class="mb-3">
  <label class="form-label">Phone Number</label>
  <input type="phone_number" class="form-control" name="phone_number" value="<?= $data['phone_number'] ?>">
  </div>


<!-- GENDER -->
<div class="mb-3">
    <label class="form-label">GENDER</label>
    <select class="form-select" name="gender">
        <?php
        $genderOptions = ['male', 'female'];
        foreach ($genderOptions as $option) {
            echo "<option value=\"$option\"";
            if ($data['gender'] == $option) {
                echo " selected";
            }
            echo ">$option</option>";
        }
        ?>
    </select>
</div>

<!-- LEVEL -->
<div class="mb-3">
    <label class="form-label">LEVEL</label>
    <select class="form-select" name="level">
        <?php
        $genderOptions = ['admin', 'user'];
        foreach ($genderOptions as $option) {
            echo "<option value=\"$option\"";
            if ($data['level'] == $option) {
                echo " selected";
            }
            echo ">$option</option>";
        }
        ?>
    </select>
</div>


      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-warning text-white" name="bubah">Ubah</button>
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tutup</button>
      </div>
      </form>
      <!-- END FORM -->
    </div>
  </div>
</div>
<!-- End Modal Ubah -->

<!-- Awal Modal Hapus -->
<div class="modal fade" id="staticBackdrop3<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 " id="staticBackdropLabel">Hapus Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

  <!-- FORM -->
  <form method="POST" action="aksi_crud.php">
  <input type="hidden" name="id" value="<?= $data['id']; ?>">
      <div class="modal-body">

  <h6 class="text-center">Apakah Anda Yakin Akan Menghapus Data ini?
  <span class="text-danger"><?= $data['first_name'] ?> - <?= $data['last_name'] ?></span>
  </h6>

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-danger text-white" name="bhapus">Hapus</button>
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tutup</button>
      </div>
      </form>
      <!-- END FORM -->
    </div>
  </div>
</div>
<!-- End Modal Hapus -->

<?php endwhile; ?>
</table>
</div>
<!-- TABLE END -->



<!-- Awal Modal Tambah -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


  <form method="POST" action="aksi_crud.php">
      <div class="modal-body">

  <div class="mb-3">
  <label class="form-label">Username</label>
  <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda" autocomplete="off" required>
  </div>

  <div class="mb-3">
  <label class="form-label">Password</label>
  <input type="password" class="form-control" name="password" placeholder="Masukkan Password Anda" autocomplete="off" required>
  </div>

  <div class="mb-3">
  <label class="form-label">First Name</label>
  <input type="text" class="form-control" name="first_name" placeholder="Masukkan First Name Anda" autocomplete="off" required>
  </div>

  <div class="mb-3">
  <label class="form-label">Last Name</label>
  <input type="text" class="form-control" name="last_name" placeholder="Masukkan Last Name Anda" autocomplete="off" required>
  </div>

  <div class="mb-3">
  <label class="form-label">Email</label>
  <input type="email" class="form-control" name="email" placeholder="Masukkan Email Anda" autocomplete="off" required>
  </div>

  <div class="mb-3">
  <label class="form-label">Phone Number</label>
  <input type="text" class="form-control" name="phone_number" placeholder="Masukkan No Telp Anda" autocomplete="off" required>
  </div>


  <div class="mb-3">
    <label class="form-label">Gender</label>
    <select class="form-select" name="gender" required>
        <option value=""></option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label">Level</label>
    <select class="form-select" name="level" required>
        <option value=""></option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
  </div>

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="bsimpan">Tambah</button>
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tutup</button>
      </div>
      </form>

    </div>
  </div>
  </div>
<!-- End Modal Tambah -->

        </div>
        </div>
<!-- END CARD -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>