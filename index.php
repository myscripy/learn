<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Membuat CRUD (Create, READ, UPDATE, DELETE) PHP & MYSQL - Seescripy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap DataTable CSS -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <style type="text/css">
        .max {
            max-width: 1200px;
        }
        .over-x {
            overflow-y: hidden;
            overflow-x: auto;
        }
    </style>
</head>
<body class="max mx-auto">
    <div class="container-fluid">
        <div class="text-center p-4">
            <h1 class="h3">Membuat CRUD dengan PHP & Mysql</h1>
            <b>Seescripy</b>
            <div class="mt-4 text-left over-x w-100">
                <div class="mb-3">
               <a href="data.php"><button class="btn btn-primary">Tambah Data</button></a>
                </div>
                <table id="dataTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Action Bar</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php 
                        
                        $query = mysqli_query($conn,"SELECT * FROM data ORDER by id DESC");
                        
                        while($row = mysqli_fetch_array($query)){
                        
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['namaLengkap']; ?></td>
                            <td><?php echo $row['nik']; ?></td>
                            <td><?php echo $row['jurusan']; ?></td>
                            <td><?php echo $row['jenisKelamin']; ?></td>
                            <td>
                                <a href="data.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- jQuery js-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- jQuery Datatable js -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap Datatable js -->    
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function () {
          $('#dataTable').DataTable();
      } );
    </script>
</body>
</html>