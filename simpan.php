<?php

include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];

$query = "INSERT INTO pelanggan (nama, email)
          VALUES ('$nama', '$email')";

if (mysqli_query($koneksi, $query)) {

    echo "
    <script>
        alert('Berhasil berlangganan email marketing!');
        window.location='index.php';
    </script>
    ";

} else {

    echo "Data gagal disimpan.";

}

?>