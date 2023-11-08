<?php

    require "../../koneksi.php";

    $id_perjalanan = $_GET['id_perjalanan'];

    $sql_hapus = "DELETE FROM tbl_dataperjalanan WHERE id_perjalanan='$id_perjalanan'";

    mysqli_query($koneksi, $sql_hapus);

    echo '<script>alert("Data perjalanan sudah terhapus");window.location="../../index.php?p=catatan_perjalanan";</script>';

    