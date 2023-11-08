<?php 

    session_start();

    require "koneksi.php";

    if(isset($_POST['btn_masuk'])){
        $nik = $_POST['nik'];
        $nama_lengkap = $_POST['nama_lengkap'];

        $sql = "SELECT * FROM tbl_pengguna WHERE nik='$nik' AND nama_lengkap='$nama_lengkap'";

        $query = mysqli_query($koneksi, $sql);

        $jum = mysqli_num_rows($query);

        if($jum > 0) {
            $data = mysqli_fetch_array($query);

            $_SESSION['id_pengguna'] = $data['id_pengguna'];

            echo '<script>alert("Anda sudah berhasil masuk, selamat datang ..");window.location="index.php?p=home";</script>';
        } else {
            echo '<script>alert("Akun anda tidak ditemukan, silahkan cek nik dan nama lengkap!!");window.location="login.php";</script>';
        }
    } else if (isset($_POST['btn_pengguna_baru'])){
        $nik = $_POST['nik'];
        $nama_lengkap = $_POST['nama_lengkap'];

        $sql = "SELECT * FROM tbl_pengguna WHERE nik='$nik' AND nama_lengkap='$nama_lengkap'";

        $query = mysqli_query($koneksi, $sql);

        $jum = mysqli_num_rows($query);

        if($jum > 0){
            echo '<script>alert("Akun anda sudah tedaftar, silahkan langsung masuk!!");window.location="login.php";</script>';
        } else {
            $sql = "INSERT INTO tbl_pengguna VALUES(null, '$nik','$nama_lengkap')";

            mysqli_query($koneksi, $sql);

            echo '<script>alert("Anda sudah berhasil daftar silahkan masuk..");window.location="login.php";</script>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web Aplikasi Catatan Perjalanan</title>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body>
        <div class="container">
            <div class="nav cf">
                <h1>Peduli Diri</h1>
            </div>
            <div class="content">
                <div class="form btn-login cf">
                    <form method="POST">
                        <input type="text" name="nik" placeholder="NIK"><br>
                        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap"><br>
                        <input type="submit" value="Saya pengguna baru" name="btn_pengguna_baru">
                        <input type="submit" value="Masuk" name="btn_masuk">
                    </form>
                </div>
            </div>
            <div class="footer">
                Copyright &copy; 2023
            </div>
        </div>
    </body>
</html>