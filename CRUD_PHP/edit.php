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

    <!-- Edit data mahasiswa -->
    <?php
  include('koneksi.php');
  $nim = $_GET['nim'];
  $show = mysqli_query($connection, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
  if (mysqli_num_rows($show) == 0) {
    echo '<script>window.history.back()</script>';
  } else {
    $d = mysqli_fetch_assoc($show);
  }
  ?>
    <!-- Edit data mahasiswa -->

    <form action="edit_proses.php" method="post">
        <input type="hidden" name="nim" value="<?php echo $nim; ?>">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td> : </td>
                <td>
                    <input type="text" name="nama" size="50" value="<?php echo $d['nama']; ?>" required>
                </td>
            </tr>

            <tr>
                <td>Gender</td>
                <td> : </td>
                <td>
                    <select name="gender" required>
                        <option value="">Pilih</option>
                        <option value="Pria" <?php if ($d['gender'] == 'Pria') {
                                    echo 'selected';
                                  } ?>>Pria</option>
                        <option value="Wanita" <?php if ($d['gender'] == 'Wanita') {
                                      echo 'selected';
                                    } ?>>Wanita</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td> : </td>
                <td>
                    <input type="text" name="alamat" size="50" value="<?php echo $d['alamat']; ?>" required>
                </td>
            </tr>
            
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td>
                    <input type="submit" name="simpan" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>