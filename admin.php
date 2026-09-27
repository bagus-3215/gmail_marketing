<?php

include "koneksi.php";

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM pelanggan"
);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Pelanggan</title>
</head>

<body>

    <h2>Daftar Pelanggan Email Marketing</h2>

    <table border="1" cellpadding="10">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal Daftar</th>
        </tr>

        <?php

        $no = 1;

        while ($row = mysqli_fetch_assoc($data)) {

        ?>

        <tr>

            <td>
                <?= $no++; ?>
            </td>

            <td>
                <?= $row['nama']; ?>
            </td>

            <td>
                <?= $row['email']; ?>
            </td>

            <td>
                <?= $row['tanggal_daftar']; ?>
            </td>

        </tr>

        <?php } ?>

    </table>

    <br>

    <a href="kirim.php">
        Kirim Email Marketing
    </a>

</body>

</html>