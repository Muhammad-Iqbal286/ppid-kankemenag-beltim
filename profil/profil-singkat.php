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
        <section class="profile-section py-5 mt-6">
            <div class="container">
                <div class="row align-items-center">
                    <!-- LEFT : VIDEO -->
                    <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                        <div class="ratio ratio-16x9 shadow rounded-4 overflow-hidden">
                            <iframe src="https://www.youtube.com/embed/6ZNb92UdFew?si=1iVb73hIwyAYplp1"
                                title="YouTube video player" allow="
                    accelerometer;
                    autoplay;
                    clipboard-write;
                    encrypted-media;
                    gyroscope;
                    picture-in-picture;
                    web-share;
                  " referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                    <!-- RIGHT : TEXT -->
                    <div class="col-lg-6" data-aos="fade-left">
                        <h2 class="fw-bold mb-3">
                            Transformasi Digital Pelayanan Kemenag Beltim
                        </h2>

                        <p class="text-muted">
                            Kementerian Agama Kabupaten Belitung Timur terus berinovasi
                            dalam menghadirkan sistem pelayanan publik berbasis digital yang
                            terintegrasi dan mudah diakses oleh masyarakat.
                        </p>

                        <p class="text-muted">
                            Melalui platform resmi ini, masyarakat dapat mengakses berbagai
                            layanan administrasi secara online tanpa harus datang langsung
                            ke kantor, sehingga proses menjadi lebih cepat, transparan, dan
                            efisien.
                        </p>

                        <p class="text-muted">
                            Kami berkomitmen menjaga kualitas layanan dengan dukungan sumber
                            daya manusia yang profesional serta sistem teknologi yang terus
                            dikembangkan sesuai kebutuhan zaman.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION 2 -->
        <section class="profile-section py-3  mt--6">
            <div class="container" data-aos="fade-up">
                <p class="text-muted text-start px-lg-2">
                    Ke depan, Kementerian Agama Kabupaten Belitung Timur akan terus
                    meningkatkan kualitas pelayanan melalui integrasi sistem,
                    peningkatan keamanan data, serta penyederhanaan proses administrasi.
                    Kami percaya bahwa pelayanan publik yang baik adalah pelayanan yang
                    cepat, akurat, transparan, dan dapat diakses oleh seluruh lapisan
                    masyarakat tanpa hambatan.
                </p>

                <p class="text-muted text-start px-lg-2">
                    Dengan dukungan teknologi digital dan kolaborasi antar unit kerja,
                    Kemenag Beltim siap menjadi institusi pelayanan publik yang modern,
                    terpercaya, dan responsif terhadap kebutuhan masyarakat di era
                    digital.
                </p>
            </div>
        </section>
        <section class="profile-section py-3  mt--4 mb--4">
            <div class="container" data-aos="fade-up">
                <p class="text-muted text-start px-lg-2">
                    Ke depan, Kementerian Agama Kabupaten Belitung Timur akan terus
                    meningkatkan kualitas pelayanan melalui integrasi sistem,
                    peningkatan keamanan data, serta penyederhanaan proses administrasi.
                    Kami percaya bahwa pelayanan publik yang baik adalah pelayanan yang
                    cepat, akurat, transparan, dan dapat diakses oleh seluruh lapisan
                    masyarakat tanpa hambatan.
                </p>
            </div>
        </section>

        <?php include '../footer/footer-index.php' ?>
        <!-- FLOATING CUSTOMER SERVICE -->

    </div>
    <script src="../system/berita.js"></script>
    <script src="../system/system.js"></script>
    <script src="../system/unit.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>