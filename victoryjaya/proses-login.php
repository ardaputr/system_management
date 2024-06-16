<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$pass = mysqli_real_escape_string($koneksi, $_POST['pass']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT * FROM admin WHERE email='$email' AND pass='$pass'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $sesi = mysqli_query($koneksi, "SELECT * FROM admin WHERE email='$email' AND pass='$pass'");
    $sesi = mysqli_fetch_assoc($sesi);
    $_SESSION['id'] = $sesi['id_admin'];
    $_SESSION['nama'] = $sesi['nama'];
    $_SESSION['status'] = "login";
    
    if ($sesi['id_admin'] == 1) {
        header("Location: index.php");
    } else {
        header("Location: indexadmin.php");
    }
} else {
    header("Location: login.php?pesan=gagal");
}
?>