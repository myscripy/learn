<?php 
session_start();
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM data WHERE id='$id'");
 
echo "<script>
alert('Data Berhasil di Hapus!!');
document.location.href='index.php';
</script>";
?>