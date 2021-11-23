<?php 
    $koneksi = mysqli_connect("localhost","root","","db_UTS");
    if(!$koneksi){
        echo "Koneksi Gagal";
    }
?>