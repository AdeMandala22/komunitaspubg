<?php include 'assets/konektor.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PUBG MOBILE KUPANG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }

        .accordion-item {
            margin-bottom: 10px;
        }

        /* Gaya untuk kotak komentar */
        .comment {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background-color: #f9f9f9;
        }

        /* Gaya untuk avatar */
        .avatar {
            float: left;
            margin-right: 10px;
        }

        .avatar img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        /* Gaya untuk konten komentar */
        .comment-content {
            overflow: hidden;
            /* agar konten tidak keluar dari kotak */
        }

        /* Gaya untuk header komentar */
        .comment-header {
            margin-bottom: 5px;
        }

        .comment-header .comment-author {
            margin: 0;
        }

        .comment-header .comment-date {
            color: #666;
        }

        /* Gaya untuk teks komentar */
        .comment-text {
            clear: both;
        }

        .comment-text p {
            margin: 0;
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>
<?php include 'assets/cdn.php' ?>

<body>

    <img src="images/pubg.webp" class="mx-auto d-block" height="300" width="100%">
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">PUBG MOBILE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="team.php">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="event.php">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="diskusi.php">Diskusi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <h2>
                    <center>PUBG KUPANG</center>
                </h2>
                <div class="fakeimg">
                    <img src="images/logo.jpg" class="mx-auto d-block" height="300" width="100%">
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <ul class="nav nav-pills flex-column">
                    <div class="accordion" id="sidebarAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    VISI
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#sidebarAccordion">
                                <div class="accordion-body">
                                    <?php
                                    $data = mysqli_query($konektor, "select * from profil");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <p><?= $d['visi']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    MISI
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#sidebarAccordion">
                                <div class="accordion-body">
                                    <?php
                                    $data = mysqli_query($konektor, "select * from profil");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <p><?= $d['misi']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    TUJUAN
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#sidebarAccordion">
                                <div class="accordion-body">
                                    <?php
                                    $data = mysqli_query($konektor, "select * from profil");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <p><?= $d['tujuan']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="d-sm-none">
            </div>

            <!-- ISI Event -->
            <div class="col-sm-8">
                <!-- Form Komentar -->
                <div class="row">
                    <div class="col-md-12">
                        <form action="proses.php?act=insert" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" placeholder="Nama" autocomplete="off" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <input class="form-control" name="komentar" rows="5" placeholder="Komentar" required></input>
                            </div>
                            <br>
                            <input style="width:100px" type="submit" class="btn btn-primary" name="submit" value="Submit" />
                        </form>
                    </div>
                </div>
                <br>
                <!-- /.row -->

                <!-- Komentar -->
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        // fungsi query untuk menampilkan data dari tabel diskusi
                        $query = mysqli_query($konektor, "SELECT * FROM diskusi WHERE balas='0' ORDER BY id_diskusi DESC")
                            or die('Ada kesalahan pada query tampil data diskusi: ' . mysqli_error($konektor));

                        while ($data = mysqli_fetch_assoc($query)) {
                            $tgl     = substr($data['tanggal'], 0, 10);
                            $exp     = explode('-', $tgl);
                            $tanggal = $exp[2] . "-" . $exp[1] . "-" . $exp[0];
                        ?>
                            <!-- <div class="media">
                                <div class="media-left">
                                    <h1 style="border:px solid #ddd;border-radius:100%;padding:11px 15px;" class="media-heading"><i class="fa fa-user"></i></h1>
                                    <small><?php echo $tanggal; ?></small>
                                </div>

                                <div class="media-body">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h4 class="media-heading"><?php echo $data['nama']; ?> <small>(<?php echo $data['email']; ?>)</small></h4>
                                            <p><?php echo $data['komentar']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="comment">
                                <div class="avatar">
                                    <img src="images/us.jpg" alt="Avatar">
                                </div>
                                <div class="comment-content">
                                    <div class="comment-header">
                                        <h4 class="comment-author"><small><?php echo $data['nama']; ?></small></h4>
                                        <span class="comment-date"><?php echo $tanggal; ?></span>
                                    </div>
                                    <p class="comment-text">
                                    <p><?php echo $data['komentar']; ?></p>
                                    </p>
                                </div>
                            </div>

                            <?php
                            // fungsi query untuk menampilkan data dari tabel diskusi
                            $query2 = mysqli_query($konektor, "SELECT * FROM diskusi WHERE balas='$data[id_diskusi]' ORDER BY id_diskusi ASC")
                                or die('Ada kesalahan pada query tampil data diskusi: ' . mysqli_error($konektor));
                            $row = mysqli_num_rows($query2);
                            if ($row > 0) {
                                $data2 = mysqli_fetch_assoc($query2);

                                $tgl2     = substr($data2['tanggal'], 0, 10);
                                $exp      = explode('-', $tgl2);
                                $tanggal2 = $exp[2] . "-" . $exp[1] . "-" . $exp[0];

                                $nama     = $data2['nama'];
                                $email    = $data2['email'];
                                $komentar = $data2['komentar'];
                            ?>
                                <div style="margin-left: 50px" class="media">
                                    <div class="media-left">
                                        <h1 style="border:1px solid #ddd;border-radius:100%;padding:11px 15px;" class="media-heading"><i class="fa fa-user"></i></h1>
                                        <small><?php echo $tanggal2; ?></small>
                                    </div>

                                    <div class="media-body">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h4 class="media-heading"><?php echo $nama; ?> <small>(<?php echo $email; ?>)</small></h4>
                                                <p><?php echo $komentar; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <!-- /.row -->


            </div>

        </div>
    </div>
    </div>

    <!-- AKHIR EVENT -->


    <div class="col-sm-12">
        <div class="mt-5 p-4 bg-dark text-white text-center">
            <p>PUBG MOBILE KUPANG</p>
        </div>
    </div>
</body>

</html>