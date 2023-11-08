<h2>Data Perjalanan</h2><br>

<form method="POST">
    <table width="60%">
        <tr>
            <td>Urutkan Berdasarkan : </td>
            <td>
                <input type="date" name="tanggal">
                <input type="submit" value="Urutkan" name="btn_urutkan">
                &nbsp;&nbsp;&nbsp;<a href="page/catatan_perjalanan/cetak.php">Unduh PDF</a>
            </td>
        </tr>
    </table>
</form>
<br>
<table width="100%" border="1">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Lokasi</th>
            <th>Suhu</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if(!empty($_POST['tanggal'])){
                $sql_tampil = "SELECT * FROM tbl_dataperjalanan WHERE id_pengguna=$_SESSION[id_pengguna] AND tanggal='$_POST[tanggal]'";

                $query = mysqli_query($koneksi, $sql_tampil);
            } else {
                $sql_tampil = "SELECT * FROM tbl_dataperjalanan WHERE id_pengguna=$_SESSION[id_pengguna]";

                $query = mysqli_query($koneksi, $sql_tampil);
            }

            while($data = mysqli_fetch_array($query)) :
        ?>
        <tr>
            <td align="center"><?= $data['tanggal']?></td>
            <td align="center"><?= $data['jam']?></td>
            <td align="center"><?= $data['lokasi']?></td>
            <td align="center"><?= $data['suhu']?></td>
            <td align="center">
                <a href="?p=catatan_perjalanan/ubah&id_perjalanan=<?= $data['id_perjalanan']?>">Ubah</a>
                <a href="page/catatan_perjalanan/hapus.php?id_perjalanan=<?= $data['id_perjalanan']?>">Hapus</a>
            </td>
        </tr>
        <?php
            endwhile;
        ?>
    </tbody>
</table>
