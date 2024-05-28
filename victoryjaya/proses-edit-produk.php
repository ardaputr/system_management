<?php
require 'cek-sesi.php';
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $deskripsi_produk = $_POST['deskripsi_produk'];
    $foto_produk = $_FILES['foto_produk']['name'];

    // Fetch current photo filename from database
    $query = "SELECT foto_produk FROM produk WHERE id_produk='$id_produk'";
    $result = mysqli_query($koneksi, $query);
    $current_data = mysqli_fetch_assoc($result);
    $current_photo = $current_data['foto_produk'];

    if (!empty($foto_produk)) {
        $target_dir = "img/";
        $target_file = $target_dir . basename($foto_produk);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["foto_produk"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["foto_produk"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["foto_produk"]["tmp_name"], $target_file)) {
                // Delete old photo
                if (file_exists($target_dir . $current_photo)) {
                    unlink($target_dir . $current_photo);
                }
                // Update with new photo
                $query = "UPDATE produk SET nama_produk='$nama_produk', harga_produk='$harga_produk', deskripsi_produk='$deskripsi_produk', foto_produk='$foto_produk' WHERE id_produk='$id_produk'";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        // Update without changing the photo
        $query = "UPDATE produk SET nama_produk='$nama_produk', harga_produk='$harga_produk', deskripsi_produk='$deskripsi_produk' WHERE id_produk='$id_produk'";
    }

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Produk berhasil diubah');window.location='produk.php';</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
