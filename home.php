<?php
include_once ("db/koneksi.php");

$result = mysqli_query ($mysqli, 'SELECT * FROM mahasiswa');

$no =1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>list data mahasiswa</title>
</head>
<body>
<div class="container mt-5">
<div class="card p-5 shadow-lg p-3 mb-4 bg-body-tertiary rounded">
    <div class="container m-2">
        <h3>Daftar List Mahasiswa</h3><hr>
        <a class="btn btn btn-success " href="tambah.php" role="button">[+] Tambah baru</a><br><br>
        <div class="container">
            <table class="table  table-bordered">
                <thead class="table-secondary text-center">
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
                            <?php echo $no; ?>
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
                                <a class="btn btn-primary" href="edit.php?id=<?php echo $data['id']; ?>"><i class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id']; ?>"><i class="bi bi-trash-fill"></i></a>
                        </td>
                        </center>
                    </tr>
                </tbody>

                <?php
                $no++;
                    }
                    ?>
            </table>
        </div>
    </div>
</div>
</div>


</body>
</html>
