<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];

$mail = new PHPMailer(true);

try {

    // Pengaturan SMTP Gmail
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;

    // Gmail pengirim
    $mail->Username   = 'nyiajengipahndut@gmail.com';

    // Password Aplikasi Gmail
    $mail->Password   = 'pamx skzj gwog tnmi';

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Email pengirim
    $mail->setFrom(
        'nyiajengipahndut@gmail.com',
        'Email Marketing'
    );

    // Email penerima
    $mail->addAddress(
        $email,
        $nama
    );

    // Format email HTML
    $mail->isHTML(true);

    $mail->Subject = $subjek;

    $mail->Body = "

    <html>

    <body style='font-family: Arial;'>

        <h2>Halo, $nama!</h2>

        <p>$pesan</p>

        <hr>

        <p>
            Pesan ini dikirim melalui sistem Email Marketing.
        </p>

    </body>

    </html>

    ";

    $mail->send();

    echo "
    <script>
        alert('Pesan berhasil dikirim ke $email');
        window.location='index.php';
    </script>
    ";

} catch (Exception $e) {

    echo "
    <script>
        alert('Pesan gagal dikirim: {$mail->ErrorInfo}');
        window.location='index.php';
    </script>
    ";

}

?>