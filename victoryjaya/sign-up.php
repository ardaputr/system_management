<?php
//include('dbconnected.php');
// Ganti dengan koneksi yang sesuai
include('koneksi.php');

// Periksa apakah form telah disubmit
if(isset($_POST['submit'])) {
    // Ambil nilai dari form
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Periksa apakah password dan konfirmasi password cocok
    if ($password !== $confirm_password) {
        echo "Password dan konfirmasi password tidak cocok!";
        exit(); // Hentikan eksekusi jika password tidak cocok
    }

    // Query insert data ke database
    $query = mysqli_query($koneksi, "INSERT INTO `admin` (`nama`, `email`, `pass`) VALUES ('$nama', '$email', '$password')");

    // Periksa apakah query berhasil dieksekusi
    if ($query) {
        // Redirect ke halaman login jika sukses
        header("location: login.php");
        exit(); // Penting untuk menghentikan eksekusi kode setelah melakukan redirect
    } else {
        // Tampilkan pesan error jika query gagal dieksekusi
        echo "ERROR, data gagal disimpan: " . mysqli_error($koneksi);
    }
}
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
  <title>Sign Up | Victory Jaya</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background: #FFFFFF;">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-6 col-md-4">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <!-- Nested Row within Card Body -->

          <div class="p-5">
            <div class="text-center">
              <img src="img/vj.png" alt="Welcome Image" style="max-width: 40%; height: auto;">
            </div><br>
            <form class="user" method="post">
              <div class="form-group">
                <input type="text" name="name" class="form-control form-control-user" id="exampleInputName" placeholder="Full Name" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
              </div>
              <div class="form-group">
                <input type="password" name="confirm_password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" required>
              </div>
              <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Sign Up">
            </form><br>

            <div class="new-account">
              <span style="color: rgba(0, 0, 0, 0.54);">Already have an account?</span>
              <a href="login.php" style="text-decoration: none;"><span style="color: rgba(5, 0, 255, 0.81); font-weight: bold;">Login</span></a>
            </div>
            <hr>
          </div>

        </div>
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

</body>

</html>
