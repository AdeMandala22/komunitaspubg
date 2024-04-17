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
<!-- PANGGIL FUNGSI FILE CDN -->
<?php include 'assets/cdn.php' ?>
<!-- AKHIR CDN -->

<body>
<!-- BANNER FOTO -->
    <img src="images/pubg.webp" class="mx-auto d-block" height="300" width="100%">
<!-- AKHIR BANNER FOTO -->
    </div>
<!-- AWAL NAVBAR -->
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
<!-- AKHIR NAVBAR -->
<!-- GRID LOGO -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <h2><center>PUBG KUPANG</center></h2>
                <div class="fakeimg">
                    <img src="images/logo.jpg" class="mx-auto d-block" height="300" width="100%">
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <ul class="nav nav-pills flex-column">
<!-- AKHIR GRID LOGO -->
<!-- AWAL ACCORDION -->
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
<!-- AKHIR ACCORDION -->

    <!-- ISI Event -->
            <div class="col-sm-8">
            <?php
        $data = mysqli_query($konektor, "SELECT * FROM tevent ORDER BY idevent");
        while ($d = mysqli_fetch_array($data)) {
            ?>
                <div class="col-sm-12">
                <h4><?= $d['nama']; ?></h4>
                    <p><?= $d['tanggal']; ?></p>
                    <img src="album/<?= $d['idevent']; ?>.jpg" class="img-fluid" class="mx-auto d-block" height="300" width="100%" alt="">
                    <hr>
                    <?php
                    $Lebar = strlen($d['deskripsi']);
                    if ($Lebar > 400) {
                        echo substr($d['deskripsi'], 0, 400); ?> <a href="detailevent.php?idevent=<?=$d['idevent']?>">Selengkapnya</a>
                    <?php
                    } else {
                        echo $d['deskripsi'];
                    }
                    ?>
                    <hr>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- AKHIR EVENT -->

<!-- BAGIAN FOOTER -->
    <div class="col-sm-12">
        <div class="mt-5 p-4 bg-dark text-white text-center">
            <p>PUBG MOBILE KUPANG</p>
        </div>
    </div>
<!-- AKHIR FOOTER -->
</body>
</html>