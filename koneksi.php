<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "email_marketing"
);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>