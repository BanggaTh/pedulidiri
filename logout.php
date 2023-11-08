<?php

    session_start();
    session_destroy();

    echo '<script>alert("Anda sudah berhasil keluar!");window.location="login.php";</script>';