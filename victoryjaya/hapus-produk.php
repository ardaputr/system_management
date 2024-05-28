<?php
require 'cek-sesi.php';
require 'koneksi.php';

if (isset($_GET['id_produk'])) {
    $id_produk = $_GET['id_produk'];

    // Fetch current photo filename from database
    $query = "SELECT foto_produk FROM produk WHERE id_produk='$id_produk'";
    $result = mysqli_query($koneksi, $query);
    $current_data = mysqli_fetch_assoc($result);
    $current_photo = $current_data['foto_produk'];

    // Delete the photo file if it exists
    $target_dir = "img/";
    if (file_exists($target_dir . $current_photo)) {
        unlink($target_dir . $current_photo);
    }

    // Delete product from database
    $query = "DELETE FROM produk WHERE id_produk='$id_produk'";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Produk berhasil dihapus');window.location='produk.php';</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "<script>alert('ID Produk tidak ditemukan');window.location='produk.php';</script>";
}
?>
