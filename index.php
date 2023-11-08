<?php

    session_start();

    if(!empty($_SESSION['id_pengguna'])){
        require "koneksi.php";

        include "template/header.php";

        if(!empty($_GET['p'])){
            include 'page/' . $_GET['p'] . '/index.php';
        } else {
            include 'page/catatan_perjalanan/index.php';
        }

        include "template/footer.php";
    } else {
        echo '<script>alert("Anda belum login, silahkan login terlebih dahulu!");window.location="login.php";</script>';
    }