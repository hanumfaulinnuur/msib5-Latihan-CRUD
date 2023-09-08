<?php
include_once("db/koneksi.php");

        if (isset($_POST['tambah'])) {
            $nim        = $_POST['nim'];
            $nama       = $_POST['nama'];
            $jurusan    = $_POST['jurusan'];
            $prodi      = $_POST['prodi'];
            $semester   = $_POST['semester'];
            $alamat     = $_POST['alamat'];

            // Query untuk insert data ke database
            $result = mysqli_query($mysqli, 
            "INSERT INTO mahasiswa (nim, nama, jurusan, prodi, semester, alamat) 
             VALUES ('$nim','$nama','$jurusan','$prodi','$semester','$alamat')");

            echo "<script>alert('data berhasil ditambahkan');window.location='home.php';</script>";
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Tambah Data</title>
</head>

<body>
    <div class="container mt-4">
        <div class="card p-5 shadow-lg p-3 mb-4 bg-body-tertiary rounded">
            <h3>Tambah Data Mahasiswa</h3>
            <hr>
            <div class="container m-6">
                <form action="tambah.php" method="POST" name="tambahData">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="number" name="nim" id="nim" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" name="jurusan" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Program Studi</label>
                        <div class="col-sm-10">
                            <input type="text" name="prodi"  class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Semester</label>
                        <div class="col-sm-10">
                            <input type="number" name="semester"  class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat </label>
                        <div class="col-sm-10">
                            <textarea cols="30" rows="4" class="form-control" name="alamat" required></textarea>
                        </div>
                    </div><br>
                    <a class='btn btn-danger' href='home.php'><i class="bi bi-sign-turn-left-fill"></i> Kembali</a>
                            <input class="btn btn-primary" type="submit" name="tambah" value="tambah">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
