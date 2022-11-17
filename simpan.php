<?php
include "koneksi.php";

$id = $_POST['id_komen'];
$Nama = $_POST['nama'];
$Email = $_POST['email'];
$notelp = $_POST['telepon'];
$kerja = $_POST['pekerjaan'];
$Komen = $_POST['komen'];

$sql = "insert into bukutamu values ('$id','$Nama','$Email','$notelp','$kerja','$Komen')";
$query = mysqli_query($kon, $sql);

if (!$query) {
    die(mysqli_error());
}
header('Location: bukutamu.php');
