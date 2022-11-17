<!DOCTYPE html>
<html lang="en">

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
                    <!-- <td>&nbsp;</td> -->
                    <td style="border: 0;">
                        <h1 class="text-white">BUKU TAMU</h1>
                        <form action="simpan.php" method="post" name="form">
                            <table class="table">
                                <tr>
                                    <div class="form-group text-white">
                                        <label for="text">Nama</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group text-white">
                                        <label for="text">Email</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Email" name="email">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group text-white">
                                        <label for="text">Telepon</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Telepon" name="telepon">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group text-white">
                                        <label for="text">Pekerjaan</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Pekerjaan" name="pekerjaan">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group text-white">
                                        <label for="text">Komentar</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Komentar" name="komen">
                                    </div>
                                </tr>
                                <tr>
                                    <td style="border: 0;"><input class="btn btn-primary" type="submit" name="kirim" value="Kirim">
                                        <input class="btn btn-danger" type="reset" name="batal" value="Batal">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <?php include "koneksi.php";
                        $query = "select * from bukutamu order by id_komen Desc";
                        $q1 = mysqli_query($kon, $query);

                        while ($rows = mysqli_fetch_array($q1)) {
                        ?>
                            <table class="table table-hover">
                                <tr>
                                    <td style="border: 0;" class="text-white">Nama</td>
                                    <td style="border: 0;" class="text-white">:</td>
                                    <td style="border: 0;" class="text-white"><?php echo $rows['nama']; ?></td>
                                </tr>
                                <tr>
                                    <td style="border: 0;" class="text-white">Email</td>
                                    <td style="border: 0;" class="text-white">:</td>
                                    <td style="border: 0;" class="text-white"><?php echo $rows['email']; ?></td>
                                </tr>
                                <tr>
                                    <td style="border: 0;" class="text-white">No Telepon</td>
                                    <td style="border: 0;" class="text-white">:</td>
                                    <td style="border: 0;" class="text-white"><?php echo $rows['notelp']; ?></td>
                                </tr>
                                <tr>
                                    <td style="border: 0;" class="text-white">Pekerjaan</td>
                                    <td style="border: 0;" class="text-white">:</td>
                                    <td style="border: 0;" class="text-white"><?php echo $rows['pekerjaan']; ?></td>
                                </tr>
                                <tr>
                                    <td style="border: 0;" class="text-white">Komentar</td>
                                    <td style="border: 0;" class="text-white">:</td>
                                    <td style="border: 0;" class="text-white"><?php echo $rows['komentar']; ?></td>
                                </tr>
                                <tr>
                                    <td style="border: 0;"></td>
                                    <td style="border: 0;"></td>
                                    <td style="border: 0;" colspan="3"><a class="btn btn-primary" style="text-decoration:none;" href="edit.php?id_komen=<?php echo $rows['id_komen'] ?>">Edit</a>
                                        <a class="btn btn-danger" style="margin-left:5px; text-decoration:none;" href="hapus.php?id_komen=<?php echo $rows['id_komen'] ?>">Hapus</a>
                                    </td>
                                </tr>

                            </table>
                            <hr>
                        <?php echo "<br>";
                        } ?>
                    </td>
                    <td style="border: 0;" width="80">
                        <a href="#"><img style="margin-top: 380px;" src="asset/logo ins.png" width="100" alt=""></a>
                    </td>
                <tr>
                    <td style="border: 0;">
                        <hr style="margin-top: 2px;">
                    </td>
                </tr>
                <tr>
                    <td class="text-white" style="border: 0; margin-bottom: 15px; margin-top: 30px;" colspan="3" align="center">
                        Copyright &copy; By Parrosz
                    </td>
                </tr>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>