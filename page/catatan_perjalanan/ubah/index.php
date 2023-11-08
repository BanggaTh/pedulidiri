<?php

    $id_perjalanan = $_GET['id_perjalanan'];

    $sql_tampil = "SELECT * FROM tbl_dataperjalanan WHERE id_perjalanan=$id_perjalanan";
    $query_tampil = mysqli_query($koneksi, $sql_tampil);
    $data_tampil = mysqli_fetch_array($query_tampil);

    if(isset($_POST['btn_ubah'])){
        $tanggal = $_POST['tanggal'];
        $jam = $_POST['jam'];
        $lokasi = $_POST['lokasi'];
        $suhu = $_POST['suhu'];

        $sql_ubah = "UPDATE tbl_dataperjalanan SET tanggal='$tanggal', jam='$jam', lokasi='$lokasi', suhu='$suhu' WHERE id_perjalanan='$id_perjalanan'";

        mysqli_query($koneksi, $sql_ubah);

        echo '<script>alert("Data perjalanan berhasil tersimpan!");window.location="?p=catatan_perjalanan";</script>';
    }

?>

<div class="form">
    <form method="POST">
        <h2>Ubah Data</h2><br>
            <input type="date" name="tanggal" value="<?= $data_tampil['tanggal']?>">
            <input type="time" name="jam" value="<?= $data_tampil['jam']?>">
            <input type="text" name="lokasi" placeholder="Kemana tujuan anda ?" value="<?= $data_tampil['lokasi']?>">
            <input type="number" name="suhu" placeholder="Berapa suhu tubuh anda ketika di cek ?" value="<?= $data_tampil['suhu']?>">
            <br>
            <input type="submit" value="Ubah" name="btn_ubah">
    </form>
</div>