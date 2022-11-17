<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <div class="card-group bg-dark" style="margin-top: 10px;">
            <div class="card col-sm-4 bg-dark">
                <img src="img/parrosz.jpg" alt="" class="card-img-top rounded-circle" style="width: 100%; margin-top: 7px;">
                <div class="card-body">
                    <h4 class="card-title text-white">Muchammad Farros Ilman Haq</h4>
                    <p class="card-text text-white">Saya adalah seorang Web Developer & Desktop Developer</p>
                </div>
            </div>
            <div class="card col-sm-8 bg-dark">
                <h2 class="text-white">Masukkan Data Penduduk</h2>
                <form action="aksi-add-pend.php" method="post">
                    <div class="form-group text-white">
                        <label for="text">Nama Penduduk</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Penduduk" name="nama">
                    </div>
                    <div class="form-group text-white">
                        <label for="text">Umur</label>
                        <input type="text" class="form-control" placeholder="Masukkan Umur" name="umur">
                    </div>
                    <div class="form-group text-white">
                        <label for="text">Desa</label>
                        <input type="text" class="form-control" placeholder="Masukkan Desa" name="desa">
                    </div>
                    <div class="form-group text-white">
                        <label for="text">No Telepon</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nomor Telepon" name="notelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <br>
        <div class="card bg-dark" style="padding: 10px;">
            <h4 class="text-white" style="margin-bottom: -5px;">Pagination di PHP dengan Bootstrap</h4>
            <table class="table table-bordered table-hover">
                <br>
                <thead>
                    <tr class="bg-success">

                        <th class="text-white">
                            <center>No</center>
                        </th>
                        <th class="text-white">
                            <center>Nama Penduduk</center>
                        </th>
                        <th class="text-white">
                            <center>Umur</center>
                        </th>
                        <th class="text-white">
                            <center>Desa</center>
                        </th>
                        <th class="text-white">
                            <center>No Telpon</center>
                        </th>

                    </tr>
                </thead>
                <?php

                include "koneksi.php";
                $batas   = 5;
                $halaman = @$_GET['halaman'];
                $previous = $halaman - 1;
                $next = $halaman + 1;
                if (empty($halaman)) {
                    $posisi  = 0;
                    $halaman = 1;
                } else {
                    $posisi  = ($halaman - 1) * $batas;
                }

                $no = $posisi + 1;
                $sql = "select * from penduduk order by id_penduduk asc limit $posisi,$batas";
                $hasil = mysqli_query($kon, $sql);
                while ($data = mysqli_fetch_array($hasil)) {
                ?>
                    <tbody>
                        <tr>
                            <td class="text-white">
                                <center><?php echo $no; ?></center>
                            </td>
                            <td class="text-white"><?php echo $data["nama"]; ?></td>
                            <td class="text-white"><?php echo $data["umur"];   ?></td>
                            <td class="text-white"><?php echo $data["desa"];   ?></td>
                            <td class="text-white"><?php echo $data["notelp"];   ?></td>
                        </tr>
                    </tbody>

                <?php
                    $no++;
                }
                ?>
            </table>
        </div>
        <hr>

        <?php
        $query2     = mysqli_query($kon, "select * from penduduk");
        $jmldata    = mysqli_num_rows($query2);
        $jmlhalaman = ceil($jmldata / $batas);
        ?>

        <div class="text-center">
            <ul class="pagination justify-content-center bg-dark">
                <a class="page-link" <?php if ($halaman > 1) {
                                            echo "a class='page-link' href='?halaman=$previous'";
                                        } ?>>Previous</a>
                <?php
                for ($i = 1; $i <= $jmlhalaman; $i++) {
                    if ($i != $halaman) {
                        echo "<li class='page-item'><a class='page-link' href='index.php?halaman=$i'>$i</a></li>";
                    } else {
                        echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
                    }
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php if ($halaman < $jmlhalaman) {
                                                echo "a class='page-link' href='index.php?halaman=$next'";
                                            } ?>>Next</a>
                </li>
            </ul>
        </div>
        <hr style="margin-top: 2px;">
        <div class="footer text-center text-white" style="margin-bottom: 15px; margin-top: 30px;">
            Copyright &copy; By Parrosz
        </div>
    </div>
</body>

</html>