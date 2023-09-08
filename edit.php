<?php
include_once ("db/koneksi.php");

$id = $_GET['id'];

    $query = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id='$id'");

    while($data = mysqli_fetch_array($query)) {
        $nim        = $data['nim'];
        $nama       = $data['nama'];
        $jurusan    = $data['jurusan'];
        $prodi      = $data['prodi'];
        $semester   = $data['semester'];
        $alamat     = $data['alamat'];
    }

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $alamat = $_POST['alamat'];


    // query untuk update data
    $query = mysqli_query($mysqli,
    "UPDATE mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', prodi='$prodi', semester='$semester', alamat='$alamat' WHERE id='$id' ");

    echo "<script>alert('data berhasil dirubah');window.location='home.php';</script>";
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
    <title>Edit Data</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card p-5 shadow-lg p-3 mb-4 bg-body-tertiary rounded">
            <h3>Edit Data Mahasiswa</h3>
            <hr>
            <div class="container m-6">
                <form action="edit.php" method="POST" name="editData">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="number" name="nim" value="<?= $nim ?>" class="form-control" >
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama"  class="form-control" value="<?= $nama ?>" >
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="jurusan" value="<?= $jurusan ?>">
                        <option selected>Pilih Jurusan</option>
                        <option <?= ($jurusan == 'Pariwisata') ? "selected": "" ?>>Pariwisata</option>
                        <option <?= ($jurusan == 'Bisnis dan Informatika') ? "selected": "" ?>>Bisnis dan Informatika</option>
                        <option <?= ($jurusan == 'Pertanian') ? "selected": "" ?>>Pertanian</option>
                        <option <?= ($jurusan == 'Teknologi Hasil Pertanian') ? "selected": "" ?>>Teknologi Hasil Pertanian</option>
                        </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Program Studi</label>
                        <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="prodi" value="<?= $prodi ?>">
                        <option selected>Pilih Program Studi</option>
                        <option <?= ($prodi == 'Teknologi Rekayasa Perangkat Lunak') ? "selected": "" ?>>Teknologi Rekayasa Perangkat Lunak</option>
                        <option <?= ($prodi == 'Teknologi Rekayasa Komputer') ? "selected": "" ?>>Teknologi Rekayasa Komputer</option>
                        <option <?= ($prodi == 'Agribisnis') ? "selected": "" ?>>Agribisnis</option>
                        <option <?= ($prodi == 'Agroteknologi') ? "selected": "" ?>>Agroteknologi</option>
                        <option <?= ($prodi == 'Teknologi Pangan Hasil Pertanian') ? "selected": "" ?>>Teknologi Pangan Hasil Pertanian</option>
                        <option <?= ($prodi == 'Destinasi Pariwisata') ? "selected": "" ?>>Destinasi Pariwisata</option>
                        </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Semester</label>
                        <div class="col-sm-10">
                            <input type="number" name="semester" value="<?= $semester ?>" class="form-control" >
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat :</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="alamat"  style="height: 100px"><?php echo $alamat ;?></textarea>
                        </div>
                    </div><br>
                            <a class='btn btn-danger' href='home.php'><i class="bi bi-sign-turn-left-fill"></i> Kembali</a>
                            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                            <input class="btn btn-primary" type="submit" name="update" value="update">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
