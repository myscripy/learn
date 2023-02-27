<?php
error_reporting(0);
session_start();
include "koneksi.php";
$id = $_GET["id"];

$query = "SELECT * FROM data WHERE id='$id'";
$sql = mysqli_query($conn, $query);
$row = mysqli_fetch_array($sql);
if ($id) {
    $nama = $row['namaLengkap'];
    $nik = $row['nik'];
    $jurusan = $row['jurusan'];
    $link = "proses/update.php";
    $gender = $row['jenisKelamin'];
} else {
    $nama = "";
    $nik = "";
    $jurusan = "";
    $link = "proses/insert.php";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Membuat CRUD (Create, READ, UPDATE, DELETE) PHP & MYSQL - Seescripy</title>
</head>
<body>
    <div class="container-fluid">
        <div class="text-center p-4">
            <h1 class="h3">Membuat CRUD dengan PHP & Mysql</h1>
            <b>Seescripy</b>
            <p>
                Tambah Data
            </p>
        </div>

        <div class="mt-4 col-lg-5 col-12 mx-auto">
            <form action="<?php echo $link; ?>" method="POST">
                <input type="hidden" class="form-control" id="exampleInputNama1" aria-describedby="emailHelp" name="id" value="<?php echo $id; ?>">
                                    
                <div class="form-group">
                    <label for="exampleInputNama1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputNama1" aria-describedby="emailHelp" name="nama" value="<?php echo $nama; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputNik1">NIK</label>
                    <input type="text" class="form-control" id="exampleInputNik1" name="nik" value="<?php echo $nik; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputJurusan1">Jurusan</label>
                    <input type="text" class="form-control" id="exampleInputJurusan1" name="jurusan" value="<?php echo $jurusan; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="gender">
                        <?php
                        if ($id) {
                            ?>
                            <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                            <?php
                        } else {
                            ?>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">        Perempuan</option>
                            <?php
                        } ?>
                    </select>
                </div>
                <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
    <!-- jQuery js-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>