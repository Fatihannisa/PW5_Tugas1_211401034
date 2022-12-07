<?php 

if (isset($_POST['simpan'])) {
    include 'koneksi.php';
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];

    $update = mysqli_query($connection, "UPDATE mahasiswa SET 
    nama = '$nama', gender = '$gender', alamat = '$alamat' 
    WHERE nim = '$nim'");

    if ($update) {
      echo "<h3>Data berhasil diedit</h3>";
      echo "<script>window.location = 'index.php'</script>";
    }
    else  {
      echo "Gagal mengedit data";
      echo "<a href='edit.php ?nim = ".$nim."'>Kembali</a>";
    }
  }

    else {
      echo "<script>window.history.back()</script>";
    }