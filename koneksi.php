<?php
    /* koneksi database dengan mysql*/
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_phecell";
    $db = mysql_connect($hostname, $username, $password) or die ('Koneksi Gagal!');
    mysql_select_db($dbname);
?>