<?php
include_once ("db/koneksi.php");

$result = mysqli_query ($mysqli, 'SELECT * FROM mahasiswa');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>list data mahasiswa</title>
</head>
<body>
<div class="container mt-4">
<div class="card p-5 shadow-lg p-3 mb-4 bg-body-tertiary rounded">
    <div class="container m-2">
        <h3>Mahaiswa Yang Terdaftar</h3><hr>
        <a class="btn btn btn-success " href="tambah.php" role="button">[+] Tambah baru</a><br><br>
        <div class="container">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($data = mysqli_fetch_array($result)){
                    ?>

                    <tr>
                        <th scope="row">
                            <?php echo $data['id']; ?>
                        </th>
                        <td>
                            <?php echo $data['nim']; ?>
                        </td>
                        <td>
                            <?php echo $data['nama']; ?>
                        </td>
                        <td>
                            <?php echo $data['jurusan']; ?>
                        </td>
                        <td>
                            <?php echo $data['prodi']; ?>
                        </td>
                        <td>
                            <?php echo $data['semester']; ?>
                        </td>
                        <td>
                            <?php echo $data['alamat']; ?>
                        </td>
                        <td>
                            <center>
                                <a class="btn btn-primary" href="edit.php?id=<?php echo $data['id']; ?>">edit</a>
                                <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id']; ?>">delete</a>
                        </td>
                        </center>
                    </tr>
                </tbody>

                <?php
                    }
                    ?>
            </table>
        </div>
    </div>
</div>
</div>


</body>
</html>
