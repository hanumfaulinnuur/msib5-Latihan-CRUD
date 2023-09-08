<?php

    include_once("db/koneksi.php");

    $id = $_GET['id'];

    $delete = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE id='$id'");
    echo "
    <script>
    alert('data tidak jadi dihapus');window.location='home.php';
    </script>";
?>