<?php
include('koneksi.php');

// Periksa apakah form telah disubmit
if(isset($_POST['submit'])) {
    // Ambil nilai dari form
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Query insert data ke database
    $query = mysqli_query($koneksi, "INSERT INTO `admin` (`nama`, `email`, `pass`) VALUES ('$nama', '$email', '$pass')");

    // Periksa apakah query berhasil dieksekusi
    if ($query) {
        // Redirect ke halaman profile jika sukses
        header("location: profile.php");
        exit(); // Penting untuk menghentikan eksekusi kode setelah melakukan redirect
    } else {
        // Tampilkan pesan error jika query gagal dieksekusi
        echo "ERROR, data gagal disimpan: " . mysqli_error($koneksi);
    }
} else {
    // Tampilkan pesan error jika form tidak disubmit
    echo "ERROR, form tidak disubmit";
}
?>
