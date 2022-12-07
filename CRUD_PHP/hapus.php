<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"
        defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"
        defer></script>
</head>

<body>

    <!-- Hapus data mahasiswa -->
    <?php
        if(isset($_GET['nim'])) {
            include('koneksi.php');
            $nim = $_GET['nim'];
            $cek = mysqli_query($connection, "SELECT nim FROM mahasiswa WHERE nim = '$nim'");
        
            if (mysqli_num_rows($cek) == 0) {
                echo '<script>window.history.back()</script>';
            } 
            else {
                $d = mysqli_query($connection, "DELETE FROM mahasiswa WHERE nim = '$nim'");
                if($d) {
                     echo "<h3>Data berhasil dihapus</h3>";
                     echo "<script>window.location = 'index.php'</script>";
                }
                else{
                    echo "Gagal menghapus data";
                    echo "<a href='edit.php>Kembali</a>";
                }
  }
}
  else {
    echo "<script>window.history.back()</script>";
  }
  ?>
</body>

</html>