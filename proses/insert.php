<?php

include "../koneksi.php";


$nama = $_POST['nama'];
$nik = $_POST['nik'];
$jurusan = $_POST['jurusan'];
$gender = $_POST['gender'];

$query = "INSERT INTO data VALUES ('','$nama','$nik','$jurusan','$gender')";
mysqli_query($conn,$query);
echo "<script>
alert('Data Berhasil di Tambahkan!');
document.location.href='../index.php';
</script>";