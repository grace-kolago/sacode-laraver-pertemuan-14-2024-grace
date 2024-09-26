<?php
    $host = "localhost" ;
    $username = "root";
    $password = "";
    $database = "dbsekolah";

    $koneksi = mysqli_connect($host,
    $username,$password,$database);

    mysqli_select_db($koneksi,
    $database);
    
