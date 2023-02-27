<?php
//Koneksi Database
define("HOST","localhost");
define("USER", "root");
define("PASS", "");
define("DBNAME", "dbcrud_seescripy");


$conn = mysqli_connect(HOST,USER,PASS,DBNAME)or die("Koneksi Gagal");

/*if($conn){
    echo "Berhasil Tersambung Ke PHPMYADMIN";
}*/