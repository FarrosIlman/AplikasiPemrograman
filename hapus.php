<?php
include "koneksi.php";
//kita perulangan data yg diambil per-row
$data = mysqli_query($con, "select * from bukutamu");
while ($d = mysqli_fetch_array($data));
$Nama = $_GET['id_komen'];
$sql = "DELETE FROM `bukutamu` WHERE `bukutamu`.`id_komen`='$Nama'";
if (mysqli_query($kon, $sql)) {
    header("location:bukutamu.php");
} else {
    echo "Error deleting record: " . mysqli_error($kon);
}
mysqli_close($kon);
