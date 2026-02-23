<?php
session_start();

/* jika session waktu belum ada, set waktu mulai */
if (!isset($_SESSION['start_time'])) {
    $_SESSION['start_time'] = time();
}

/* jika sudah pernah menjawab, jangan tampilkan modal */
$alreadyAnswered = isset($_SESSION['survey_done']) ? true : false;
?>

<style>
.survey-modal {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, .6);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.survey-content {
    background: #fff;
    padding: 25px;
    width: 90%;
    max-width: 400px;
    border-radius: 12px;
    text-align: center;
    animation: fadeIn .3s ease;
}

.survey-choice {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 15px;
}

.btn {
    padding: 8px 18px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    font-weight: 600;
}

.btn.yes {
    background: #2ecc71;
    color: #fff;
}

.btn.no {
    background: #e74c3c;
    color: #fff;
}

.btn.submit {
    background: #3498db;
    color: #fff;
    margin-top: 10px;
}

.rating-box {
    display: none;
    margin-top: 15px;
}

.stars span {
    font-size: 30px;
    cursor: pointer;
    color: #ccc;
}

.stars span.active {
    color: gold;
}

@keyframes fadeIn {
    from {
        transform: scale(.9);
        opacity: 0;
    }

    to {
        transform: scale(1);
        opacity: 1;
    }
}
</style>
<?php if (!$alreadyAnswered): ?>
<div id="surveyModal" class="survey-modal">
    <div class="survey-content">
        <h3>Penilaian Layanan PPID</h3>
        <p>Apakah Anda puas dengan layanan kami? mohon berikan Penilaian anda</p>

        <!-- Pilihan -->
        <div class="survey-choice">
            <button class="btn yes" onclick="showRating()">Nilai</button>
            <button class="btn no" onclick="submitSurvey(0)">Tidak</button>
        </div>

        <!-- Rating -->
        <div id="ratingBox" class="rating-box">
            <p>Berikan penilaian Anda Berdasarkan Kepuasan Pelayanan</p>
            <div class="stars">
                <span onclick="rate(1)">★</span>
                <span onclick="rate(2)">★</span>
                <span onclick="rate(3)">★</span>
                <span onclick="rate(4)">★</span>
                <span onclick="rate(5)">★</span>
            </div>
            <button class="btn submit" onclick="submitSurvey(selectedRating)">Kirim</button>
        </div>
    </div>
</div>
<?php endif; ?>
<script>
const MODAL_DELAY = 2 * 60 * 1000; // 2 menit
let selectedRating = 0;

/* waktu mulai dari PHP */
const startTime = <?php echo $_SESSION['start_time'] * 1000; ?>;
const now = Date.now();
const remaining = MODAL_DELAY - (now - startTime);

if (remaining <= 0) {
    showModal();
} else {
    setTimeout(showModal, remaining);
}

function showModal() {
    const modal = document.getElementById('surveyModal');
    if (modal) modal.style.display = 'flex';
}

function showRating() {
    document.getElementById('ratingBox').style.display = 'block';
}

function rate(val) {
    selectedRating = val;
    document.querySelectorAll('.stars span').forEach((s, i) => {
        s.classList.toggle('active', i < val);
    });
}

function submitSurvey(rating) {
    fetch('../php/survey_save.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'rating=' + rating
    }).then(() => {
        document.getElementById('surveyModal').style.display = 'none';
    });
}
</script>