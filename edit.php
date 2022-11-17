<?php
include "koneksi.php";
if (isset($_POST['update'])) {
    $id = $_POST['id_komen'];
    $Nama = $_POST['nama'];
    $Email = $_POST['email'];
    $Telp = $_POST['telepon'];
    $Kerja = $_POST['pekerjaan'];
    $Komentar = $_POST['komen'];
    //     $aaa = "UPDATE bukutamu SET nama='$Nama', email='$Email',komentar='$Komentar'
    // WHERE id_komen='$id'";
    $aaa = "UPDATE bukutamu SET nama='$Nama', email='$Email',notelp='$Telp',pekerjaan='$Kerja', komentar='$Komentar' WHERE id_komen='$id' ";
    $bbb = mysqli_query($kon, $aaa);

    header("Location:bukutamu.php");
}
?>
<?php
include "koneksi.php";
$id = $_GET['id_komen'];
$aaa = "SELECT * FROM bukutamu WHERE id_komen='$id'";
$bbb = mysqli_query($kon, $aaa);
while ($rows = mysqli_fetch_array($bbb)) {
    $id = $rows['id_komen'];
    $Nama = $rows['nama'];
    $Email = $rows['email'];
    $Telp = $rows['notelp'];
    $Kerja = $rows['pekerjaan'];
    $Komentar = $rows['komentar'];
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>AplikasiKu-Farros</title>
</head>

<body class="bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">AplikasiKu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.html">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Portofolio
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="bukutamu.php">Buku Tamu</a>
                            <a class="dropdown-item" href="index.php">Pagination With Card</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <hr style="margin-top: 2px;">
        <div class="card bg-dark">
            <table class="table">
                <tr>
                    <td colspan="3" style="border: 0;">
                        <marquee style="margin-top: 5px; margin-bottom: -10px;" class="text-white">
                            <h5>La Tahzan Innallaha Ma'ana</h5>
                        </marquee>
                    </td>
                </tr>
                <tr>
                    <td style="border: 0;">
                        <hr style="margin-top: 1px; margin-bottom: 3px;">
                    </td>
                </tr>
                <tr>
                    <td style="border: 0;" class="text-white" width="auto">
                        <h1>BUKU TAMU</h1>
                        <form name="form-update" method="post" action="edit.php">
                            <table class="table">
                                <tr>
                                    <td style="border: 0;" class="text-white">
                                        <input type="hidden" name="id_komen" value="<?php echo $id; ?>" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <div class="form-group text-white">
                                        <label for="text">Nama</label>
                                        <input type="text" name="nama" value="<?php echo $Nama; ?>" class="form-control">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group text-white">
                                        <label for="text">Email</label>
                                        <input type="text" name="email" value="<?php echo $Email; ?>" class="form-control">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group text-white">
                                        <label for="text">Telepon</label>
                                        <input type="text" name="telepon" value="<?php echo $Telp; ?>" class="form-control">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group text-white">
                                        <label for="text">Pekerjaan</label>
                                        <input type="text" name="pekerjaan" value="<?php echo $Kerja; ?>" class="form-control">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group text-white">
                                        <label for="text">Komentar</label>
                                        <input type="text" name="komen" value="<?php echo $Komentar; ?>" class="form-control">
                                    </div>
                                </tr>
                                <tr>
                                    <td style="border: 0;" class="text-white"><input class="btn btn-primary" type="submit" name="update" value="Kirim">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </td>
                    <td style="border: 0;" width="100">
                        <a href="asset/logo ins.png"><img style="margin-top: 230px;" src="asset/logo ins.png" width="100" alt=""></a>
                    </td>
                <tr>
                    <td style="border: 0;" class="text-white" colspan="3" align="center">Copyright © By Parrosz</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>