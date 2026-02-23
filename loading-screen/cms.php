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
    <link rel="stylesheet" href="../design/loading-screen.css" />

    <link rel="shortcut icon" href="../img/Kemenag-icon.png" type="image/png" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="main-content">
        <section id="loadingScreen" class="loading-screen">
            <div class="loading-wrapper">
                <img src="../img/kemenag-icon.png" class="loading-logo" />

                <h5 class="loading-title mt-2">PPID</h5>
                <small class="loading-subtitle">
                    PEJABAT PENGELOLA INFORMASI & DOKUMENTASI
                </small>
                <h5 class="loading-title mt-2">KEMENAG BELITUNG TIMUR</h5>
                <div class="loading-progress mt-3">
                    <div class="loading-bar" id="loadingBar"></div>
                </div>

                <p class="loading-text mt-2">
                    Memuat Halaman... <span id="loadingPercent">0%</span>
                </p>
            </div>
        </section>
    </div>

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
    const duration = 2000;
    const intervalTime = 20;
    const maxProgress = 100;

    let progress = 0;

    const loadingBar = document.getElementById("loadingBar");
    const loadingPercent = document.getElementById("loadingPercent");

    const step = maxProgress / (duration / intervalTime);

    const loadingInterval = setInterval(() => {
        progress += step;

        if (progress >= 100) {
            progress = 100;
            clearInterval(loadingInterval);
            const loader = document.getElementById("loadingScreen");
            loader.style.opacity = "0";
            loader.style.transition = "opacity 0.5s ease";
            setTimeout(() => {
                window.location.href = "../profil/comingsoon.php"; // ganti tujuan
            }, 500);
        }
        loadingBar.style.width = progress + "%";
        loadingPercent.textContent = Math.floor(progress) + "%";
    }, intervalTime);
    </script>
</body>

</html>