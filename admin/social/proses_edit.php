<?php
// Load koneksi database
include '../../koneksi.php';

// Ambil data dari form
$id = $_POST['id'];
$nama_social = $_POST['nama_social'];

$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = './gambar/';
move_uploaded_file($source, $folder . $nama_file);

// Update data ke database
$update = mysqli_query($koneksi, "UPDATE tb_social SET
nama_sosmed = '$nama_social',
icon = '$nama_file'
WHERE id = '$id'");

if ($update) {
    echo "<script>
    window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah');
    window.location.href = 'index.php';
    </script>";
}
?>