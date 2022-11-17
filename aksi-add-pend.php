<?php
include "koneksi.php";
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$desa = $_POST['desa'];
$notelp = $_POST['notelp'];

mysqli_query($kon, "INSERT INTO penduduk values('id_pendudk','$nama','$umur','$desa','$notelp')");
header("location:index.php");
