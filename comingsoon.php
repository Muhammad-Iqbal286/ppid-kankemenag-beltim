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
    <link rel="stylesheet" href="design/cms.css" />
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
        <section id="comingSoon" class="coming-soon">
            <div class="coming-wrapper">
                <!-- Logo -->
                <div class="logo-wrap">
                    <img src="img/kemenag-icon.png" alt="Logo Kemenag" />
                    <span class="glow-ring"></span>
                </div>

                <!-- Text -->
                <h1 class="title">Coming Soon</h1>
                <p class="subtitle">
                    Layanan Resmi Kementerian Agama <br />
                    Sedang Dalam Tahap Pengembangan
                </p>

                <!-- Animated Divider -->
                <div class="divider">
                    <span></span><span></span><span></span>
                </div>

                <!-- Countdown Text -->
                <p class="countdown-text">
                    ⏳ Sistem akan segera diluncurkan
                    <span id="typingText"></span>
                </p>
            </div>

            <!-- Decorative Background -->
            <div class="bg-wave"></div>
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
    <script>
    const text = " Mohon menunggu dengan sabar...";
    const typingEl = document.getElementById("typingText");
    let index = 0;

    function typeEffect() {
        if (index < text.length) {
            typingEl.innerHTML += text.charAt(index);
            index++;
            setTimeout(typeEffect, 80);
        }
    }

    window.addEventListener("load", typeEffect);
    </script>
</body>

</html>