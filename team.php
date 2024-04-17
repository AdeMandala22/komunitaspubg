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

                <div class="col-sm-12">
                    <input class="form-control" id="myInput" type="text" placeholder="Cari..">
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-sm" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th><center>Nama Team</center></th>
                                    <th><center>Alamat</center></th>
                                    <th><center>Email</center></th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $data = mysqli_query($konektor, "select * from team order by idteam");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?>.</td>
                                        <td><center><?php echo $d['nama']; ?></center></td>
                                        <td><center><?php echo $d['alamat']; ?></center></td>
                                        <td><center><?php echo $d['email']; ?></center></td>
                                        <td>
                                           <center> <a class="btn btn-outline-info btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#myModalupdate<?php echo $d['idteam']; ?>"><i class="fa fa-address-card-o">&nbsp;</i>Detail</a></center>
                                        </td>
                                    </tr>
                                    <!-- The Modal View Team -->
                                    <div class="modal" id="myModalupdate<?php echo $d['idteam']; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Data Team</h4>
                                                    <button type="button" class="btn-close" data-dismiss="modal"></button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form method="POST" action="viewteam.php">
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <img src="team/<?= $d['idteam']; ?>.jpg" class="img-fluid" class="mx-auto d-block">
                                                        </div>

                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Nama Team</span>
                                                            </div>
                                                            <input class="form-control" readonly type="text" name="nama" value="<?php echo $d['nama']; ?>">
                                                        </div>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Alamat</span>
                                                            </div>
                                                            <input class="form-control" readonly type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
                                                            <input type="hidden" name="idteam" value="<?php echo $d['idteam']; ?>">
                                                        </div>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Email</span>
                                                            </div>
                                                            <input class="form-control" readonly type="text" name="email" value="<?php echo $d['email']; ?>">
                                                        </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    </form>
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                                </div>
                                            <?php } ?>
                            </tbody>
                        </table>

                    </div>
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