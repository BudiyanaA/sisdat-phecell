<?php
    /* proses pada login*/
    session_start();
    require_once("koneksi.php");
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $cekuser = mysql_query("SELECT * FROM customer WHERE username = '$username'");
    $hasil = mysql_fetch_array($cekuser);
    if(mysql_num_rows($cekuser) == 0) {
        echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
    } 
    else {
        if($pass <> $hasil['password_cust']) {
            echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
            echo $hasil['nama_cust'];
        } 
        else {
            $_SESSION['username'] = $hasil['username'];
            $_SESSION['nama_cust'] = $hasil['nama_cust'];
            header('location:index.php');
        }
   }
?>