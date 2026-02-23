<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kemenag Beltim</title>
    <link rel="stylesheet" href="../design/style.css" />
    <link rel="stylesheet" href="../design/setup.css" />
    <link rel="stylesheet" href="../design/text-setup.css" />
    <link rel="stylesheet" href="../design/text-setup-pro.css" />
    <link rel="stylesheet" href="../design/coming-soon.css" />
    <link rel="stylesheet" href="../design/grafik.css" />
    <link rel="stylesheet" href="../design/tentang.css" />
    <link rel="stylesheet" href="../design/fungsi.css" />
    <link rel="shortcut icon" href="../img/Kemenag-icon.png" type="image/png" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- TOPBAR -->
    <?php include '../navigasi-menu/navbar-profile.php' ?>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <!-- HOME -->

        <!-- SECTION 1 -->
        <!-- SECTION TUGAS HIGHLIGHT -->
        <section class="tf-modern py-5">
            <div class="container text-center">

                <h2 class="tf-title mt-5" data-aos="zoom-in">Tugas & Fungsi</h2>
                <p class="tf-sub" data-aos="zoom-in">
                    Pelayanan keagamaan profesional, transparan, dan berintegritas
                    untuk masyarakat Belitung Timur.
                </p>

                <div class="tf-card-wrap" data-aos="zoom-in" data-aos-delay="400">
                    <div class="tf-card-wide" id="tfCard">

                        <!-- FRONT -->
                        <div class="tf-face tf-front">

                            <div class="tf-left">
                                <div class="tf-icon">
                                    <i class="fa-solid fa-building-columns"></i>
                                </div>
                            </div>

                            <div class="tf-right">
                                <h4>Kementerian Agama Beltim</h4>
                                <p>
                                    Pelayanan bidang keagamaan, pendidikan madrasah,
                                    dan pembinaan kehidupan beragama secara profesional.
                                </p>
                                <button class="tf-open">Lihat Tugas & Fungsi</button>
                            </div>

                        </div>

                        <!-- BACK -->
                        <div class="tf-face tf-back">

                            <div class="tf-tabs">
                                <button class="tf-tab active" data-target="tugas">Tugas</button>
                                <button class="tf-tab" data-target="fungsi">Fungsi</button>
                            </div>

                            <div class="tf-content">
                                <div class="tf-panel active" id="tugas">
                                    <h5>Pembinaan Kehidupan Beragama</h5>
                                    <p>
                                        Mendorong kerukunan umat beragama, moderasi beragama,
                                        dan pelayanan masyarakat yang transparan.
                                    </p>
                                </div>

                                <div class="tf-panel" id="fungsi">
                                    <h5>Manajemen & Tata Kelola</h5>
                                    <p>
                                        Pengelolaan organisasi profesional, peningkatan kualitas layanan,
                                        dan tata kelola pemerintahan yang akuntabel.
                                    </p>
                                </div>
                            </div>

                            <button class="tf-close">Kembali</button>

                        </div>

                    </div>
                </div>

            </div>
        </section>

    </div>
    </div> <?php include '../footer/footer-profile.php' ?>
    <script src="../system/berita.js"></script>
    <script src="../system/system.js"></script>
    <script src="../system/unit.js"></script>
    <script src="../system/coming-soon.js"></script>
    <script src="../system/fungsi.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>