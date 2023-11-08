<?php

 date_default_timezone_set("Asia/Jakarta");

 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "db_pedulidiri";

 $koneksi = mysqli_connect($host, $user, $pass, $db);

 if(!$koneksi){
    echo "Koneksi Gagal";
 }