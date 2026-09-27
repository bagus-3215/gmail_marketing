<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Email Marketing</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {

            min-height: 100vh;

            background:
                linear-gradient(
                    135deg,
                    #667eea,
                    #764ba2
                );

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 30px;

        }

        .container {

            width: 100%;

            max-width: 1000px;

            display: grid;

            grid-template-columns: 1fr 1fr;

            background: white;

            border-radius: 25px;

            overflow: hidden;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.25);

        }

        /* BAGIAN KIRI */

        .left {

            padding: 50px;

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #667eea,
                    #764ba2
                );

        }

        .logo {

            font-size: 28px;

            font-weight: bold;

            margin-bottom: 50px;

        }

        .left h1 {

            font-size: 42px;

            line-height: 1.2;

            margin-bottom: 25px;

        }

        .left p {

            font-size: 17px;

            line-height: 1.7;

            opacity: 0.9;

        }

        .features {

            margin-top: 40px;

        }

        .feature {

            display: flex;

            align-items: center;

            gap: 15px;

            margin-bottom: 20px;

            font-size: 16px;

        }

        .icon {

            width: 40px;

            height: 40px;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.2);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 20px;

        }

        /* BAGIAN KANAN */

        .right {

            padding: 50px;

            background: #ffffff;

        }

        .right h2 {

            color: #333;

            font-size: 30px;

            margin-bottom: 10px;

        }

        .subtitle {

            color: #777;

            margin-bottom: 30px;

        }

        .form-group {

            margin-bottom: 20px;

        }

        label {

            display: block;

            margin-bottom: 8px;

            font-weight: bold;

            color: #444;

        }

        input,

        textarea {

            width: 100%;

            padding: 14px 16px;

            border: 1px solid #ddd;

            border-radius: 10px;

            outline: none;

            font-size: 15px;

            transition: 0.3s;

        }

        input:focus,

        textarea:focus {

            border-color: #667eea;

            box-shadow:
                0 0 0 3px rgba(102, 126, 234, 0.15);

        }

        textarea {

            height: 130px;

            resize: none;

        }

        button {

            width: 100%;

            padding: 15px;

            border: none;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    #667eea,
                    #764ba2
                );

            color: white;

            font-size: 16px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.3s;

        }

        button:hover {

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(102, 126, 234, 0.4);

        }

        .footer {

            text-align: center;

            margin-top: 20px;

            font-size: 13px;

            color: #999;

        }

        /* RESPONSIVE */

        @media (max-width: 768px) {

            .container {

                grid-template-columns: 1fr;

            }

            .left {

                padding: 35px;

            }

            .left h1 {

                font-size: 32px;

            }

            .right {

                padding: 35px;

            }

        }

    </style>

</head>

<body>

    <div class="container">

        <!-- BAGIAN KIRI -->

        <div class="left">

            <div class="logo">

                ✉️ MailConnect

            </div>

            <h1>

                Kirim Pesan Lebih Mudah

            </h1>

            <p>

                Sampaikan pesan dan informasi kepada user

                melalui email dengan cepat, mudah, dan profesional.

            </p>

            <div class="features">

                <div class="feature">

                    <div class="icon">📧</div>

                    <span>Kirim pesan melalui Gmail</span>

                </div>

                <div class="feature">

                    <div class="icon">⚡</div>

                    <span>Proses pengiriman cepat</span>

                </div>

                <div class="feature">

                    <div class="icon">🔒</div>

                    <span>Aman dan mudah digunakan</span>

                </div>

            </div>

        </div>


        <!-- BAGIAN KANAN -->

        <div class="right">

            <h2>Kirim Pesan</h2>

            <p class="subtitle">

                Isi data penerima dan pesan yang ingin dikirim.

            </p>

            <form action="kirim.php" method="POST">

                <div class="form-group">

                    <label>

                        Nama Penerima

                    </label>

                    <input

                        type="text"

                        name="nama"

                        placeholder="Contoh: Budi"

                        required

                    >

                </div>


                <div class="form-group">

                    <label>

                        Email Penerima

                    </label>

                    <input

                        type="email"

                        name="email"

                        placeholder="contoh@gmail.com"

                        required

                    >

                </div>


                <div class="form-group">

                    <label>

                        Subjek Email

                    </label>

                    <input

                        type="text"

                        name="subjek"

                        placeholder="Masukkan subjek email"

                        required

                    >

                </div>


                <div class="form-group">

                    <label>

                        Pesan

                    </label>

                    <textarea

                        name="pesan"

                        placeholder="Tulis pesan yang ingin dikirim..."

                        required

                    ></textarea>

                </div>


                <button type="submit">

                    📤 Kirim Pesan

                </button>

            </form>


            <div class="footer">

                © 2026 MailConnect | Email Marketing System

            </div>

        </div>

    </div>

</body>

</html>