<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kemenag Beltim</title>
    <!-- UMUM  -->
    <link rel="stylesheet" href="../design/style.css" />
    <link rel="stylesheet" href="../design/setup.css" />
    <link rel="stylesheet" href="../design/text-setup.css" />
    <link rel="stylesheet" href="../design/text-setup-pro.css" />
    <link rel="stylesheet" href="../design/tentang.css" />
    <link rel="shortcut icon" href="../img/Kemenag-icon.png" type="image/png" />
    <!-- Setting Page -->
    <link rel="stylesheet" href="../design/visi-misi.css" />
    <!-- Tools -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- TOPBAR & NAVBAR -->
    <?php include '../navigasi-menu/navbar-profile.php' ?>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <!-- SECTION VISI MISI FORMAL -->
        <section class="visi-formal py-5">
            <div class="container text-center">

                <h2 class="fw-bold mb-3 mt-6">Visi dan Misi</h2>
                <div class="divider mx-auto mb-4"></div>

                <p class="text-muted mx-auto" style="max-width:700px;">
                    Visi dan Misi Kementerian Agama Kabupaten Belitung Timur
                    merupakan arah kebijakan strategis dalam mewujudkan pelayanan
                    publik yang profesional, akuntabel, dan berintegritas.
                </p>

                <div class="row justify-content-center mt-5 g-4">

                    <!-- VISI BUTTON -->
                    <div class="col-md-4">
                        <div class="vm-box p-4">
                            <h5 class="fw-bold">Visi</h5>
                            <button class="btn btn-success mt-3" onclick="openModal('visiFull')">
                                Baca Visi Lengkap
                            </button>
                        </div>
                    </div>

                    <!-- MISI BUTTON -->
                    <div class="col-md-4">
                        <div class="vm-box p-4">
                            <h5 class="fw-bold">Misi</h5>
                            <button class="btn btn-outline-success mt-3" onclick="openModal('misiFull')">
                                Baca Misi Lengkap
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <div id="visiFull" class="custom-modal">
            <div class="modal-content-custom slide-up">

                <div class="modal-header-custom">
                    <h4>Visi Kementerian Agama Kabupaten Belitung Timur</h4>
                    <button onclick="closeModal('visiFull')">&times;</button>
                </div>

                <div class="modal-body-custom">
                    <p>
                        Terwujudnya masyarakat Kabupaten Belitung Timur yang religius,
                        harmonis, dan berintegritas melalui tata kelola pelayanan
                        keagamaan yang profesional, transparan, dan akuntabel.
                    </p>

                    <p>
                        Visi ini menjadi landasan utama dalam setiap perumusan kebijakan,
                        penyusunan program kerja, serta peningkatan kualitas pelayanan
                        publik berbasis teknologi dan nilai-nilai keagamaan.
                    </p>
                </div>

            </div>
        </div>
        <div id="misiFull" class="custom-modal">
            <div class="modal-content-custom slide-up">

                <div class="modal-header-custom">
                    <h4>Misi Kementerian Agama Kabupaten Belitung Timur</h4>
                    <button onclick="closeModal('misiFull')">&times;</button>
                </div>

                <div class="modal-body-custom">

                    <ol>
                        <li>Meningkatkan kualitas pelayanan administrasi keagamaan.</li>
                        <li>Menguatkan moderasi dan kerukunan umat beragama.</li>
                        <li>Meningkatkan mutu pendidikan madrasah dan pendidikan agama.</li>
                        <li>Mewujudkan tata kelola organisasi yang profesional dan akuntabel.</li>
                        <li>Mengembangkan sistem pelayanan berbasis digital yang transparan.</li>
                    </ol>

                </div>

            </div>
        </div>
        <?php include '../footer/footer-index.php' ?>
    </div>
    <script src="system/berita.js"></script>
    <script src="system/system.js"></script>
    <script src="system/unit.js"></script>
    <script src="system/coming-soon.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    function openModal(id) {
        const modal = document.getElementById(id);
        modal.style.display = "flex";
        setTimeout(() => {
            modal.classList.add("active");
        }, 10);
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        modal.classList.remove("active");
        setTimeout(() => {
            modal.style.display = "none";
        }, 400);
    }
    </script>
    <script>
    AOS.init();
    </script>
</body>

</html>