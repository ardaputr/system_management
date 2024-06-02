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
    <title>Catalog | Victory Jaya</title>

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
    </style>
</head>

<body>
    <header class="header" id="header">
        <section style="position: relative; height: 550px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; overflow: hidden;">
            <img src="img/fotocatalog/Foto Header.jpeg" alt="Background Image" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); min-width: 100%; min-height: 100%; width: 10%; height: 10%; z-index: -1;">
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
                    </ul>
                </div>
            </nav>

            <div class="intro">
                <h1>Frozen Food Premium <br>untuk Anda dan Keluarga!</h1>
                <p>Temukan berbagai macam makanan beku yang lezat, sehat, dan praktis <br>di Victory Jaya</p>
            </div>
        </section>

        <section class="ads-explore">
            <div class="container px-4">
                <div class="row gx-5 align-items-center">
                    <div class="col">
                        <div class="p-3" style="max-width:500px;">
                            <h2 style="font-weight:600;">Kemudahan dan Kelezatan dalam Satu Genggaman</h2>
                            <p>Eksplorasi katalog lengkap makanan beku berkualitas tinggi kami, dari hidangan utama hingga camilan.</p>
                        </div>
                    </div>
                    <div class="col">
                        <img src="img/fotocatalog/Foto Section 2.png" alt="explorepic" style="width: 100%; max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="row">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="img/<?= $row['foto_produk'] ?>" class="card-img-top" alt="<?= $row['nama_produk'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['nama_produk'] ?></h5>
                                <p class="card-text">Rp<?= number_format($row['harga_produk'], 0, ',', '.') ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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