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

<body style="background-color:grey;">

    <div class="jumbotron" id="jadwal">
        <div class="container">
            <div class="col-lg-12 text-center my-5">
                <h3 class="display-4">Daftar Mahasiswa</h3>
                <a href="tambah.php">
                    <h4>Tambah Mahasiwa</h4>
                </a>
            </div>

            <table class="table table-striped" style="text-align: center; ">
                <thead class="table-dark">
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </thead>

                <!-- Menampilkan data mahasiswa -->
                <?php
                include_once 'koneksi.php';
                $no = 1;
                $data = mysqli_query($connection, "SELECT * FROM mahasiswa");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['gender']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td>
                        <a href="edit.php ?nim=<?php echo $d['nim']; ?>">Edit</a>
                        <a href="hapus.php ?nim=<?php echo $d['nim']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
                <!-- Menampilkan data mahasiswa -->
            </table>
        </div>
    </div>

</body>

</html>