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
    <title>Laporan Pengeluaran | Victory Jaya</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <?php
    require 'koneksi.php';
    require 'sidebar.php'; ?>

    <!-- Main Content -->
    <div id="content">

        <?php require 'navbar.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Form untuk memilih tanggal -->
            <form method="post" action="">
                <div class="form-group">
                    <label for="startDate">Tanggal Mulai:</label>
                    <input type="date" name="startDate" id="startDate" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="endDate">Tanggal Selesai:</label>
                    <input type="date" name="endDate" id="endDate" class="form-control" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Lihat Laporan</button>
            </form>

            <!-- DataTales Example -->
            <div class="card shadow mb-4 mt-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Laporan Pengeluaran</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Pengeluaran</th>
                                    <th>Tanggal Pengeluaran</th>
                                    <th>Jumlah</th>
                                    <!-- <th>ID Sumber</th> -->
                                </tr>
                            </thead>
                            <tfoot>
                            </tfoot>
                            <tbody>
                                <?php
                                if (isset($_POST['submit'])) {
                                    $startDate = $_POST['startDate'];
                                    $endDate = $_POST['endDate'];

                                    // Query untuk mendapatkan data pengeluaran berdasarkan tanggal
                                    $query = "SELECT * FROM pengeluaran WHERE DATE(tgl_pengeluaran) BETWEEN '$startDate' AND '$endDate'";
                                    $result = mysqli_query($koneksi, $query);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['id_pengeluaran'] . "</td>";
                                            echo "<td>" . $row['tgl_pengeluaran'] . "</td>";
                                            echo "<td>Rp. " . number_format($row['jumlah'], 2, ',', '.') . "</td>";
                                            // echo "<td>" . $row['id_sumber'] . "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='4' class='text-center'>Tidak ada data pengeluaran pada tanggal yang dipilih</td></tr>";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

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

    <!-- Logout Modal-->
    <?php require 'logout-modal.php'; ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>    

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>