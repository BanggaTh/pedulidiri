<table width="100%" border="1">
    <thead>
        <tr>
            <th colspan="4">Data perjalanan</th>
        </tr>
        <tr>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Lokasi</th>
            <th>Suhu</th>
        </tr>
    </thead>
    <tbody>
        <?php
            session_start();

            require "../../koneksi.php";

            $sql_tampil = "SELECT * FROM tbl_dataperjalanan WHERE id_pengguna=$_SESSION[id_pengguna]";

            $query = mysqli_query($koneksi, $sql_tampil);

            while($data = mysqli_fetch_array($query)) :
        ?>
        <tr>
            <td align="center"><?= $data['tanggal']?></td>
            <td align="center"><?= $data['jam']?></td>
            <td><?= $data['lokasi']?></td>
            <td align="center"><?= $data['suhu']?></td>
        </tr>
        <?php
            endwhile;
        ?>
    </tbody>
</table>

<br>

<a href="../../index.php?=home">Kembali</a>

<script>
    window.print();
</script>