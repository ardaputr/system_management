<?php
require 'cek-sesi.php';
require 'koneksi.php';
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
    <title>Produk | Victory Jaya</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php require 'sidebar.php'; ?>
    <!-- Main Content -->
    <div id="content">

        <?php require 'navbar.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <button type="button" class="btn btn-success" style="margin:5px" data-toggle="modal" data-target="#myModalTambah"><i class="fa fa-plus"> Produk</i></button><br>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Produk</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Deskripsi Produk</th>
                                    <th>Foto Produk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM produk");
                                while ($data = mysqli_fetch_assoc($query)) {
                                ?>
                                    <tr>
                                        <td><?= $data['nama_produk'] ?></td>
                                        <td><?= $data['harga_produk'] ?></td>
                                        <td><?= $data['deskripsi_produk'] ?></td>
                                        <td><img src="img/<?= $data['foto_produk'] ?>" alt="Foto Produk" style="width: 100px; height: auto;"></td>
                                        <td>
                                            <!-- Button untuk modal -->
                                            <a href="#" type="button" class="fa fa-edit btn btn-primary btn-md" data-toggle="modal" data-target="#myModal<?php echo $data['id_produk']; ?>"></a>
                                        </td>
                                    </tr>
                                    <!-- Modal Edit Produk -->
                                    <div class="modal fade" id="myModal<?php echo $data['id_produk']; ?>" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Data Produk</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form role="form" action="proses-edit-produk.php" method="post" enctype="multipart/form-data">

                                                        <?php
                                                        $id = $data['id_produk'];
                                                        $query_edit = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id'");
                                                        while ($row = mysqli_fetch_array($query_edit)) {
                                                        ?>

                                                            <input type="hidden" name="id_produk" value="<?php echo $row['id_produk']; ?>">

                                                            <div class="form-group">
                                                                <label>Nama Produk</label>
                                                                <input type="text" name="nama_produk" class="form-control" value="<?php echo $row['nama_produk']; ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Harga Produk</label>
                                                                <input type="number" name="harga_produk" class="form-control" value="<?php echo $row['harga_produk']; ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Deskripsi Produk</label>
                                                                <textarea name="deskripsi_produk" class="form-control"><?php echo $row['deskripsi_produk']; ?></textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Foto Produk</label>
                                                                <input type="file" name="foto_produk" class="form-control">
                                                                <img src="img/<?php echo $row['foto_produk']; ?>" alt="Foto Produk" style="width: 100px; height: auto;">
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-success">Ubah</button>
                                                                <a href="hapus-produk.php?id_produk=<?= $row['id_produk']; ?>" Onclick="return confirm('Anda Yakin Ingin Menghapus?')" class="btn btn-danger">Hapus</a>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>

                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                <?php
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

    <!-- Modal Tambah Produk -->
    <div id="myModalTambah" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Produk</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- body modal -->
                <form action="tambah-produk.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        Nama Produk :
                        <input type="text" class="form-control" name="nama_produk">
                        Harga Produk :
                        <input type="number" class="form-control" name="harga_produk">
                        Deskripsi Produk :
                        <textarea class="form-control" name="deskripsi_produk"></textarea>
                        Foto Produk :
                        <input type="file" class="form-control" name="foto_produk">
                    </div>
                    <!-- footer modal -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>