<?php
require 'cek-sesi.php';
require 'koneksi.php';

$query = "SELECT * FROM produk";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/catalog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/vj.png">
    <title>Tentang Kami | Victory Jaya</title>

    <style>
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card img {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
            padding: 20px;
        }

        .card-title {
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .card-text {
            font-weight: 400;
            color: #6c757d;
            margin-bottom: 20px;
        }

        .container {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .list-footer {
            margin: 10px auto;
            display: flex;
            list-style-type: none;
        }

        .list-footer li a {
            text-decoration: none;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            padding: 10px;
        }

        .list-footer li a:hover {
            color: var(--mycolor);
        }

        .social-media {
            margin: 10px auto;
        }

        .social-media i {
            padding: 10px;
            font-size: 25px;
            color: #fff;
        }

        .social-media i:hover {
            color: rgb(2, 255, 171);
        }

        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }

        .intro h1 {
            font-weight: 800;
        }

        .about-section {
            padding: 60px;
            background-color: #f9f9f9;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .about-section img {
            border-radius: 15px;
            width: 100%;
            height: auto;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .about-section h2 {
            font-weight: 800;
            margin-bottom: 20px;
        }

        .about-section p {
            font-weight: 400;
            color: #6c757d;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <header class="header" id="header">
        <section style="position: relative; height: 550px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; overflow: hidden;">
            <img src="img/fotocatalog/Foto Header 2.jpeg" alt="Background Image" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); min-width: 100%; min-height: 100%; width: 10%; height: 10%; z-index: -1;">
            <nav>
                <div>
                    <ul class="nav justify-content-center navbar">
                        <a class="navbar-brand me-auto" style="font-weight:600; color: #ffffff; font-size:25px;">
                            <img src="img/vj.png" alt="Logo">
                            Victory Jaya
                        </a>
                        <li class="nav-item">
                            <a class="nav-link" href="catalog.php" style="color: #FFFFFF;" id="hover">Katalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php" style="color: #FFFFFF;" id="hover">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://linktr.ee/victoryjaya.food" style="color: #FFFFFF;" id="hover" target="_blank">Informasi Pemesanan</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="intro">
                <h1>Dedikasi Kami untuk Kelezatan dan Kemudahan Anda</h1>
                <p>Di Victory Jaya, kami percaya bahwa makanan beku dapat memberikan kelezatan dan kenyamanan tanpa kompromi. Kami berkomitmen untuk menyediakan produk berkualitas tinggi yang memenuhi standar terbaik untuk Anda dan keluarga.</p>
            </div>
        </section>

        <section class="container about-section">
            <div class="row">
                <div class="col-lg-6">
                    <img src="img/fotocatalog/Foto Section 2.png" alt="About Us">
                </div>
                <div class="col-lg-6">
                    <h2>Tentang Kami</h2>
                    <p>Victory Jaya didirikan dengan visi untuk menginspirasi perjalanan yang tak terlupakan dan menyediakan produk-produk berkualitas tinggi yang memenuhi kebutuhan pelanggan kami. Kami percaya bahwa setiap perjalanan harus menjadi pengalaman yang luar biasa, dan kami berkomitmen untuk menyediakan produk yang akan membantu Anda mencapai hal itu.</p>
                    <p>Dengan berbagai macam produk yang kami tawarkan, mulai dari peralatan traveling hingga kebutuhan sehari-hari, Victory Jaya adalah tempat yang tepat untuk menemukan apa yang Anda butuhkan. Kami bangga dengan kualitas produk kami dan selalu berusaha untuk memberikan layanan terbaik kepada pelanggan kami.</p>
                </div>
            </div>
        </section>


    </header>

    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; 2024 - Victory Jaya Management</a>
                </span>
            </div>
        </div>
    </footer>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>