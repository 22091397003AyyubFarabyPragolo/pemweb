<?php
// panggil koneksi database
include '../Login/koneksi.php';

// uji jika tombol simpan di klik
if (isset($_POST['bsimpan'])) {
    // persiapan simpan data baru
    $encryptedPassword = md5($_POST['password']); // Encrypt the password using MD5

    $simpan = mysqli_query($conn, "INSERT INTO tb_login (username, password, first_name, last_name, gender, email, phone_number, level)
                                    VALUES ('$_POST[username]',
                                            '$encryptedPassword',  -- Use the encrypted password
                                            '$_POST[first_name]',
                                            '$_POST[last_name]',
                                            '$_POST[gender]',
                                            '$_POST[email]',
                                            '$_POST[phone_number]',
                                            '$_POST[level]'
                                    )");
    // jika simpan sukses
    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='hal_admin.php';
             </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='index.php';
              </script>";
    }
}


// uji jika tombol ubah di klik
if (isset($_POST['bubah'])) {

    // persiapan ubah data
    $ubah = mysqli_query($conn, "UPDATE tb_login SET
                                    username = '$_POST[username]',
                                    first_name = '$_POST[first_name]',
                                    last_name = '$_POST[last_name]',
                                    email = '$_POST[email]',
                                    gender = '$_POST[gender]',
                                    phone_number = '$_POST[phone_number]',
                                    level = '$_POST[level]'
                                    WHERE id = '$_POST[id]'
                                    ");
    // jika ubah sukses
    if ($ubah) {
        echo "<script>
                alert('Ubah Data Sukses!');
                document.location='hal_admin.php';
             </script>";
    } else {
        echo "<script>
                alert('Ubah Data Gagal!');
                document.location='index.php';
              </script>";
    }
}

// uji jika tombol hapus di klik
if (isset($_POST['bhapus'])) {

    // persiapan hapus data
    $hapus = mysqli_query($conn, "DELETE FROM tb_login WHERE id = '$_POST[id]' ");
    
    // jika hapus sukses
    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='hal_admin.php';
             </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='index.php';
              </script>";
    }
}
?>
