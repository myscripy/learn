<?php

include "../koneksi.php";

$id = $_POST['id'];
$nama = htmlspecialchars($_POST['nama']);
$nik = htmlspecialchars($_POST['nik']);
$jurusan = htmlspecialchars($_POST['jurusan']);

$query = "UPDATE data SET
    namaLengkap = '$nama',
    nik = '$nik',
    jurusan = '$jurusan' WHERE id = '$id'";
mysqli_query($conn, $query);
echo "<script>
alert('Data Berhasil di Ubah!!');
document.location.href='../index.php';
</script>";