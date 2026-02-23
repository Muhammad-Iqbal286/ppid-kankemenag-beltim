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
    <link rel="stylesheet" href="../design/struktur.css" />
    <link rel="stylesheet" href="../design/modal.css" />
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

        <!-- SECTION STRUKTUR HEADER -->
        <section class="org-section">
            <div class="org-container">

                <!-- Kepala Kantor -->
                <div class="org-row center">
                    <div id="kepalaKantor" class="card-bio zoom-in  " draggable="false">
                        <img src="../img/kemenag-icon.png" draggable="false" class="nocopy" />
                        <div class="bio-text">
                            <div class="jabatan nocopy">Kepala Kantor</div>
                            <div class="nama nocopy">Nama Pejabat</div>
                            <div class="nip nocopy">NIP. 123456789</div>
                        </div>
                    </div>
                </div>

                <!-- garis cabang -->
                <div class="branch-line">
                    <div class="line-up zoom-in"></div>
                    <div class="line-right zoom-in"></div>
                    <div class="line-right2 zoom-in"></div>
                    <div class="line-left zoom-in"></div>
                    <div class="line-down zoom-in"></div>
                    <div class="line-down-bid-1 "></div>
                    <div class="line-down-bid-2 "></div>
                    <div class="line-down-bid-3 "></div>
                    <div class="line-down-bid-4 "></div>
                </div>

                <!-- Kepala TU + Fungsional -->
                <div class="org-row right">
                    <div id="TU" class="card-bio " data-aos="zoom-in" draggable="false">
                        <img src="../img/kemenag-icon.png" draggable="false" class="nocopy" />
                        <div class="bio-text">
                            <div class="jabatan nocopy">Kepala Tata Usaha</div>
                            <div class="nama nocopy ">Nama Pejabat</div>
                            <div class="nip nocopy">NIP. 123456789</div>
                        </div>
                    </div>

                    <div class="line-vertical"></div>

                    <div class="card-fung nocopy" data-aos="zoom-in">
                        Jabatan Fungsional
                    </div>
                </div>

                <!-- 4 Kepala Bidang -->
                <div class="org-row bidang">
                    <!-- Bidang 1 -->
                    <div class="bidang-item">
                        <div class="card-bio" data-aos="zoom-in" draggable="false">
                            <img src="../img/kemenag-icon.png" draggable="false" class="nocopy" />
                            <div class="bio-text">
                                <div class="jabatan nocopy">Kepala Bidang</div>
                                <div class="nama nocopy">Nama Pejabat</div>
                                <div class="nip nocopy">NIP. 123456789</div>
                            </div>
                        </div>
                        <div class="line-vertical" data-aos="zoom-in" data-aos-delay="600"></div>
                        <div class="card-fung nocopy" data-aos="zoom-in" data-aos-delay="1000">Jabatan Fungsional</div>
                    </div>

                    <!-- Bidang 2 -->
                    <div class="bidang-item">
                        <div class="card-bio" data-aos="zoom-in" data-aos-delay="200" draggable="false">
                            <img src="../img/kemenag-icon.png" draggable="false" class="nocopy" />
                            <div class="bio-text">
                                <div class="jabatan nocopy">Kepala Bidang</div>
                                <div class="nama nocopy">Nama Pejabat</div>
                                <div class="nip nocopy">NIP. 123456789</div>
                            </div>
                        </div>
                        <div class="line-vertical" data-aos="zoom-in" data-aos-delay="700"></div>
                        <div class="card-fung nocopy" data-aos="zoom-in" data-aos-delay="1100">Jabatan Fungsional</div>
                    </div>

                    <!-- Bidang 3 -->
                    <div class="bidang-item">
                        <div class="card-bio" data-aos="zoom-in" data-aos="zoom-in" data-aos-delay="300"
                            draggable="false">
                            <img src="../img/kemenag-icon.png" draggable="false" class="nocopy" />
                            <div class="bio-text">
                                <div class="jabatan nocopy">Kepala Bidang</div>
                                <div class="nama nocopy">Nama Pejabat</div>
                                <div class="nip nocopy">NIP. 123456789</div>
                            </div>
                        </div>
                        <div class="line-vertical" data-aos="zoom-in" data-aos-delay="800"></div>
                        <div class="card-fung nocopy" data-aos="zoom-in" data-aos-delay="1200">Jabatan Fungsional</div>
                    </div>

                    <!-- Bidang 4 -->
                    <div class="bidang-item">
                        <div class="card-bio" data-aos="zoom-in" data-aos="zoom-in" data-aos-delay="400"
                            draggable="false">
                            <img src="../img/kemenag-icon.png" draggable="false" class="nocopy" />
                            <div class="bio-text">
                                <div class="jabatan nocopy">Kepala Bidang</div>
                                <div class="nama nocopy">Nama Pejabat</div>
                                <div class="nip nocopy">NIP. 123456789</div>
                            </div>
                        </div>
                        <div class="line-vertical" data-aos="zoom-in" data-aos-delay="900"></div>
                        <div class="card-fung nocopy" data-aos="zoom-in" data-aos-delay="1300">Jabatan Fungsional</div>
                    </div>
                </div>

            </div>
        </section>
        <div class="modal fade" id="modalPejabat" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-pejabat">

                    <div class="modal-body modal-layout">
                        <!-- kiri -->
                        <div class="modal-foto">
                            <img src="../img/kemenag-icon.png" class="nocopy">
                        </div>

                        <!-- kanan -->
                        <div class="modal-info">
                            <div class="modal-jabatan">Kepala Kantor</div>
                            <div class="modal-nama">Nama Pejabat</div>
                            <div class="modal-nip">NIP. 123456789</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="modalTatausaha" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-pejabat">

                    <div class="modal-body modal-layout">
                        <!-- kiri -->
                        <div class="modal-foto">
                            <img src="../img/kemenag-icon.png" class="nocopy">
                        </div>

                        <!-- kanan -->
                        <div class="modal-info">
                            <div class="modal-jabatan">Kepala Tatausaha</div>
                            <div class="modal-nama">Nama Pejabat</div>
                            <div class="modal-nip">NIP. 123456789</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

    <?php include '../footer/footer-index.php' ?>
    <script src="../system/berita.js"></script>
    <script src="../system/struktur.js"></script>
    <script src="../system/system.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script>
    const card = document.getElementById("kepalaKantor");
    const modal = new bootstrap.Modal(document.getElementById("modalPejabat"));
    const cardTU = document.getElementById("TU");
    const modalTU = new bootstrap.Modal(document.getElementById("modalTatausaha"));

    cardTU.addEventListener("click", function() {
        modalTU.show();
    });

    card.addEventListener("click", function() {
        modal.show();
    });
    </script>
    <script>
    const items = document.querySelectorAll(".zoom-item");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const order = Array.from(items).indexOf(el);

                setTimeout(() => {
                    el.classList.add("show");
                }, order * 150); // jeda antar item

                observer.unobserve(el);
            }
        });
    }, {
        threshold: 0.2
    });

    items.forEach(el => observer.observe(el));
    </script>
</body>

</html>