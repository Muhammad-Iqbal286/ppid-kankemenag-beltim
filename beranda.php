<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kemenag Beltim</title>
    <link rel="stylesheet" href="design/style.css" />
    <link rel="stylesheet" href="design/setup.css" />
    <link rel="stylesheet" href="design/text-setup.css" />
    <link rel="stylesheet" href="design/text-setup-pro.css" />
    <link rel="stylesheet" href="design/coming-soon.css" />
    <link rel="stylesheet" href="design/grafik.css" />
    <link rel="stylesheet" href="design/tentang.css" />
    <link rel="shortcut icon" href="img/Kemenag-icon.png" type="image/png" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'php/sessions-feedback.php'; ?>
    <!-- TOPBAR -->
    <?php include 'navigasi-menu/navbar-home.php' ?>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <!-- HOME -->
        <section id="home" class="home-section container">
            <div class="row align-items-center">

                <!-- IMAGE -->
                <div class="col-lg-6 position-relative home-image" data-aos="fade-right">

                    <img src="img/kemenag-office.jpeg" class="img-fluid hero-img" />

                    <div class="image-shape"></div>

                    <div class="image-shape2"></div>
                </div>

                <!-- TEXT -->
                <div class="col-lg-6 home-text" data-aos="fade-left">
                    <span class="home-badge">Website Resmi Kemenag Beltim</span>

                    <h1>
                        Pelayanan Publik <span>Profesional</span>
                        dan Terpercaya
                    </h1>

                    <p class="font-inter-pro">
                        Kami berkomitmen memberikan pelayanan terbaik kepada masyarakat
                        melalui sistem digital modern yang cepat, transparan, dan efisien.
                    </p>

                    <div class="home-btn-group">
                        <a href="#" class="btn btn-success btn-lg">Ajukan Layanan</a>
                        <a href="#" class="btn btn-outline-success btn-lg">Pelajari Lebih</a>
                    </div>

                    <!-- MINI INFO -->
                    <div class="home-stats">
                        <div>
                            <h4>1000+</h4>
                            <span>Layanan Selesai</span>
                        </div>

                        <div>
                            <h4>24 Jam</h4>
                            <span>Respon Cepat</span>
                        </div>

                        <div>
                            <h4>99%</h4>
                            <span>Kepuasan Publik</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BERITA -->
        <section id="berita" class="section berita-section container-fluid">
            <div class="row g-4">
                <!-- LEFT BIG CARD -->
                <div class="col-lg-4">
                    <div class="news-big-card" data-aos="zoom-in">
                        <img src="https://picsum.photos/600/700" />
                        <div class="news-overlay">
                            <h4>Berita Utama Instansi</h4>
                        </div>
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-8">
                    <!-- ROW 1 CAROUSEL -->
                    <div class="news-carousel-wrapper">
                        <button class="news-arrow left">&#10094;</button>

                        <div class="news-carousel">
                            <div class="news-track">
                                <div class="news-small-card" data-aos="zoom-in">
                                    <img src="https://picsum.photos/300/200?1" />
                                    <div class="news-title">Judul Berita 1</div>
                                </div>

                                <div class="news-small-card" data-aos="zoom-in">
                                    <img src="https://picsum.photos/300/200?2" />
                                    <div class="news-title">
                                        KeKanKemenag Hadiri Peresmian Tugu Umat Beragama
                                    </div>
                                </div>

                                <div class="news-small-card" data-aos="zoom-in">
                                    <img src="https://picsum.photos/300/200?3" />
                                    <div class="news-title">Judul Berita 3</div>
                                </div>

                                <div class="news-small-card" data-aos="zoom-in">
                                    <img src="https://picsum.photos/300/200?4" />
                                    <div class="news-title">Judul Berita 4</div>
                                </div>

                                <div class="news-small-card" data-aos="zoom-in">
                                    <img src="https://picsum.photos/300/200?5" />
                                    <div class="news-title">Judul Berita 5</div>
                                </div>

                                <div class="news-small-card" data-aos="zoom-in">
                                    <img src="https://picsum.photos/300/200?6" />
                                    <div class="news-title">Judul Berita 6</div>
                                </div>
                            </div>
                        </div>

                        <button class="news-arrow right" data-aos="zoom-in">
                            &#10095;
                        </button>
                    </div>

                    <!-- ROW 2 -->
                    <div class="news-row zoom-row row-2">
                        <div class="zoom-card" data-aos="zoom-in">
                            <img src="https://picsum.photos/400/250?11" />
                            <div class="zoom-title">Judul Berita A</div>
                        </div>

                        <div class="zoom-card" data-aos="zoom-in">
                            <img src="https://picsum.photos/400/250?12" />
                            <div class="zoom-title">Judul Berita B</div>
                        </div>

                        <div class="zoom-card" data-aos="zoom-in">
                            <img src="https://picsum.photos/400/250?13" />
                            <div class="zoom-title">Judul Berita C</div>
                        </div>

                        <div class="zoom-card" data-aos="zoom-in">
                            <img src="https://picsum.photos/400/250?14" />
                            <div class="zoom-title">Judul Berita D</div>
                        </div>
                    </div>

                    <!-- ROW 3 -->
                    <div class="news-row zoom-row row-3">
                        <div class="zoom-card" data-aos="zoom-in">
                            <img src="https://picsum.photos/400/250?21" />
                            <div class="zoom-title">Judul Berita E</div>
                        </div>

                        <div class="zoom-card" data-aos="zoom-in">
                            <img src="https://picsum.photos/400/250?22" />
                            <div class="zoom-title">Judul Berita F</div>
                        </div>

                        <div class="zoom-card" data-aos="zoom-in">
                            <img src="https://picsum.photos/400/250?23" />
                            <div class="zoom-title">Judul Berita G</div>
                        </div>

                        <div class="zoom-card" data-aos="zoom-in">
                            <img src="https://picsum.photos/400/250?24" />
                            <div class="zoom-title">Judul Berita H</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PENGAJUAN -->
        <section id="grafik" class="section container ikm-section">
            <h2 class="section-title text-center mb-5" data-aos="zoom-in">
                Indeks Kepuasan Masyarakat (IKM)
            </h2>

            <div class="row g-4">
                <!-- GRAFIK KIRI -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos="zoom-in" data-aos-delay="200">
                    <div class="ikm-card">
                        <h4 class="ikm-title">Grafik IKM Layanan Nikah</h4>

                        <div class="ikm-chart">
                            <div class="ikm-bar" style="--val: 82"></div>
                            <div class="ikm-bar" style="--val: 88"></div>
                            <div class="ikm-bar" style="--val: 91"></div>
                            <div class="ikm-bar" style="--val: 86"></div>
                            <div class="ikm-bar" style="--val: 93"></div>
                            <div class="ikm-bar" style="--val: 89"></div>
                            <div class="ikm-bar" style="--val: 95"></div>
                            <div class="ikm-bar" style="--val: 87"></div>
                            <div class="ikm-bar" style="--val: 90"></div>
                            <div class="ikm-bar" style="--val: 92"></div>
                            <div class="ikm-bar" style="--val: 88"></div>
                            <div class="ikm-bar" style="--val: 94"></div>
                        </div>

                        <div class="ikm-result">
                            <span class="grade">A</span>
                            <span>Kualitas Pelayanan Baik</span>
                        </div>

                        <small class="ikm-meta">
                            Nilai: <strong>100</strong> · Responden: <strong>325</strong>
                        </small>
                    </div>
                </div>

                <!-- GRAFIK KANAN -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="ikm-card">
                        <h4 class="ikm-title">Grafik IKM PPID</h4>

                        <div class="ikm-chart">
                            <div class="ikm-bar" style="--val: 85"></div>
                            <div class="ikm-bar" style="--val: 89"></div>
                            <div class="ikm-bar" style="--val: 90"></div>
                            <div class="ikm-bar" style="--val: 87"></div>
                            <div class="ikm-bar" style="--val: 92"></div>
                            <div class="ikm-bar" style="--val: 88"></div>
                            <div class="ikm-bar" style="--val: 91"></div>
                            <div class="ikm-bar" style="--val: 93"></div>
                            <div class="ikm-bar" style="--val: 86"></div>
                            <div class="ikm-bar" style="--val: 94"></div>
                            <div class="ikm-bar" style="--val: 89"></div>
                            <div class="ikm-bar" style="--val: 95"></div>
                        </div>

                        <div class="ikm-result">
                            <span class="grade">A</span>
                            <span>Kualitas Pelayanan Baik</span>
                        </div>

                        <small class="ikm-meta">
                            Nilai: <strong>100</strong> · Responden: <strong>210</strong>
                        </small>
                    </div>
                </div>
            </div>
        </section>

        <!-- PENGAJUAN -->
        <section id="pengajuan" class="section container pengajuan-section">
            <div class="row align-items-center g-5">
                <!-- LEFT CONTENT -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="pengajuan-content">
                        <h2 class="pengajuan-title">
                            Transformasi Digital Pelayanan Publik
                        </h2>

                        <p class="pengajuan-desc">
                            Kami terus berinovasi dalam menghadirkan layanan yang cepat,
                            transparan, dan akuntabel melalui pemanfaatan teknologi digital.
                            Sistem ini dirancang untuk memberikan kemudahan akses informasi
                            serta meningkatkan kualitas pelayanan kepada masyarakat.
                        </p>

                        <div class="pengajuan-footer">
                            <span class="badge-status">Inovasi Berkelanjutan</span>
                            <p class="footer-note"></p>
                        </div>
                    </div>
                </div>

                <!-- RIGHT YOUTUBE -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="video-wrapper">
                        <div class="wave-top">
                            <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
                                <path
                                    d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,53.3C1120,53,1280,75,1360,85.3L1440,96V0H0Z">
                                </path>
                            </svg>
                        </div>
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/Fv7aQpOJUFI?si=uwFt6IfgrrTw9GwF"
                            title="YouTube video player" frameborder="0" allow="
                  accelerometer;
                  autoplay;
                  clipboard-write;
                  encrypted-media;
                  gyroscope;
                  picture-in-picture;
                  web-share;
                " referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="wave-bottom">
                            <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
                                <path
                                    d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,53.3C1120,53,1280,75,1360,85.3L1440,96V120H0Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- TENTANG KAMI -->

        <!-- FLOATING CUSTOMER SERVICE -->

    </div> <?php include 'footer/footer-index.php' ?>
    <script src="system/berita.js"></script>
    <script src="system/system.js"></script>
    <script src="system/unit.js"></script>
    <script src="system/coming-soon.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>