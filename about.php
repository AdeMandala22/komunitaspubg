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
            <br>
                <div class="row mb-4">
                    <div class="mt-4 p-4 bg-primary text-white rounded">
                        <h4>
                            <center>KEEP CONTACT WITH US ON</center>
                        </h4>
                    </div>
                    <div class="col-sm-4">
                        <br>
                        <div class="card" style="width: 18rem;">
                            <img src="sosmed/email.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">EMAIL</h5>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary stretched-link">CLICK HERE</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <br>
                        <div class="card" style="width: 18rem;">
                            <img src="sosmed/fb.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">FACEBOOK</h5>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary stretched-link">CLICK HERE</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <br>
                        <div class="card" style="width: 18rem;">
                            <img src="sosmed/ig.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">INSTAGRAM</h5>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary stretched-link">CLICK HERE</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <br>
                        <div class="card" style="width: 18rem;">
                            <img src="sosmed/twtt.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">TWITTER</h5>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary stretched-link">CLICK HERE</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <br>
                        <div class="card" style="width: 18rem;">
                            <img src="sosmed/yt.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">YOUTUBE</h5>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary stretched-link">CLICK HERE</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <br>
                        <div class="card" style="width: 18rem;">
                            <img src="sosmed/wa.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">WHATSAPP</h5>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary stretched-link">CLICK HERE</a>
                            </div>
                        </div>
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