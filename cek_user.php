<?php
include 'conn.php';
 
$username = $_POST['user'] ? $_POST['user'] : '';
 
$sql = "SELECT COUNT(*) AS countUsr FROM tb_pengguna WHERE nama_pengguna = '$username'";
$query = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_array($query);
$count = $row['countUsr'];
 
echo $count;
 
?>