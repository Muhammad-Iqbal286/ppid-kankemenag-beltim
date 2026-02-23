<?php
session_start();

/* tandai sudah menjawab */
$_SESSION['survey_done'] = true;

/* opsional: simpan rating ke database */
if (isset($_POST['rating'])) {
    $rating = (int)$_POST['rating'];
    // simpan ke DB jika perlu
}

echo "OK";