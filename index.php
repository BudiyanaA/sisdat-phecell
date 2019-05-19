<?php
    /* ketika login sukses*/
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:pilihlogin.php');
    }
    else{
        $username = $_SESSION['username'];
        $nama_cust = $_SESSION['nama_cust'];
    }
?>

<title>Halaman Sukses Login</title>
<div align='center'>
    Selamat Datang, <b>
    <?php 
        echo $nama_cust;
    ?>
    </b> <a href="logout.php"><b>Logout</b></a>
</div>
