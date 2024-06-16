<?php
require 'cek-sesi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/vj.png">
    <title>Dashboard | Victory Jaya</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <?php
    require('koneksi.php');
    require('sidebar.php');

    $karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan");
    $karyawan = mysqli_num_rows($karyawan);

    // Query to count the total number of products
    $query_total_produk = "SELECT COUNT(*) AS total_produk FROM produk";
    $result_total_produk = mysqli_query($koneksi, $query_total_produk);
    $data_total_produk = mysqli_fetch_assoc($result_total_produk);
    $total_produk = $data_total_produk['total_produk'];

    $pengeluaran_hari_ini = mysqli_query($koneksi, "SELECT jumlah FROM pengeluaran where tgl_pengeluaran = CURDATE()");
    $pengeluaran_hari_ini = mysqli_fetch_array($pengeluaran_hari_ini);

    $pemasukan_hari_ini = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan where tgl_pemasukan = CURDATE()");
    $pemasukan_hari_ini = mysqli_fetch_array($pemasukan_hari_ini);

    $pemasukan = mysqli_query($koneksi, "SELECT * FROM pemasukan");
    while ($masuk = mysqli_fetch_array($pemasukan)) {
        $arraymasuk[] = $masuk['jumlah'];
    }
    $jumlahmasuk = array_sum($arraymasuk);


    $pengeluaran = mysqli_query($koneksi, "SELECT * FROM pengeluaran");
    while ($keluar = mysqli_fetch_array($pengeluaran)) {
        $arraykeluar[] = $keluar['jumlah'];
    }
    $jumlahkeluar = array_sum($arraykeluar);


    $uang = $jumlahmasuk - $jumlahkeluar;

    //untuk data chart area
    $sekarang = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan
  WHERE tgl_pemasukan = CURDATE()");
    $sekarang = mysqli_fetch_array($sekarang);

    $satuhari = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan
  WHERE tgl_pemasukan = CURDATE() - INTERVAL 1 DAY");
    $satuhari = mysqli_fetch_array($satuhari);


    $duahari = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan
  WHERE tgl_pemasukan = CURDATE() - INTERVAL 2 DAY");
    $duahari = mysqli_fetch_array($duahari);

    $tigahari = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan
  WHERE tgl_pemasukan = CURDATE() - INTERVAL 3 DAY");
    $tigahari = mysqli_fetch_array($tigahari);

    $empathari = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan
  WHERE tgl_pemasukan = CURDATE() - INTERVAL 4 DAY");
    $empathari = mysqli_fetch_array($empathari);

    $limahari = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan
  WHERE tgl_pemasukan = CURDATE() - INTERVAL 5 DAY");
    $limahari = mysqli_fetch_array($limahari);

    $enamhari = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan
  WHERE tgl_pemasukan = CURDATE() - INTERVAL 6 DAY");
    $enamhari = mysqli_fetch_array($enamhari);

    $tujuhhari = mysqli_query($koneksi, "SELECT jumlah FROM pemasukan
  WHERE tgl_pemasukan = CURDATE() - INTERVAL 7 DAY");
    $tujuhhari = mysqli_fetch_array($tujuhhari);
    ?>
    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <!-- <h1> Victory Jaya Management</h1> -->

            <?php require 'user.php'; ?>

        </nav>
        <br><br><br><br><br><br><br><br>
        <center>
            <h1 class="h3 mb-0 text-gray-800" style="font-weight: bold;">Victory Jaya Management</h1>
            <p class="text-gray-600">Welcome, <?php echo $_SESSION['nama']; ?>!</p>
        </center>
        <!-- End of Topbar -->

    </div>

    </div>




    </div>
    <!-- End of Main Content -->

    <?php require 'footer.php' ?>

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php require 'logout-modal.php'; ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>

    <!-- Page level custom scripts -->
    <script type="text/javascript">
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';
        // Pie Chart Example
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Pendapatan", "Pengeluaran", "Sisa"],
                datasets: [{
                    data: [<?php echo $jumlahmasuk / 1000000 ?>, <?php echo $jumlahkeluar / 1000000 ?>, <?php echo $uang / 1000000 ?>],
                    backgroundColor: ['#1cc88a', '#e74a3b', '#36b9cc'],
                    hoverBackgroundColor: ['#17a673', '#e74a3b', '#2c9faf'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: false
                },
                cutoutPercentage: 80,
            },
        });
    </script>

</body>

</html>