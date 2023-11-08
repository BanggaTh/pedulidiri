<?php 

 if(isset($_POST['btn_simpan'])){
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $lokasi = $_POST['lokasi'];
    $suhu = $_POST['suhu'];
    
    $sql_simpan = "INSERT INTO tbl_dataperjalanan VALUES(null, $_SESSION[id_pengguna], '$tanggal','$jam','$lokasi','$suhu')";

    mysqli_query($koneksi, $sql_simpan);

    echo '<script>alert("Data perjalanan berhasil tersimpan!");window.location="?p=catatan_perjalanan";</script>';
 }

 ?>

 <div class="form">
    <form method="POST">
        <h2>Tambah Data</h2><br>
        <input type="date" name="tanggal"><br>
        <input type="time" name="jam"><br>
        <input type="text" name="lokasi" placeholder="Kemana tujuan anda ?"><br>
        <input type="number" name="suhu" placeholder="Berapa suhu tubuh ketika di cek ?"><br>
        <input type="submit" value="Simpan" name="btn_simpan">
    </form>
 </div>