<?php
// Load koneksi database
include '../../koneksi.php';

// Ambil data dari form
$id = $_POST['id'];
$nama_barang_post = $_POST['nama_barang_post'];
$deskripsi_post = $_POST['deskripsi_post'];
$harga_post = $_POST['harga_post'];

// Proses upload gambar
$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = './gambar/';
move_uploaded_file($source, $folder.$nama_file);

// Update data ke database
$update = mysqli_query($koneksi, "UPDATE data_barang SET
nama_barang = '$nama_barang_post',
deskripsi = '$deskripsi_post',
harga = '$harga_post',
gambar = '$nama_file'
WHERE id = '$id'");

// Cek apakah proses edit ke database berhasil
if($update) {
    // Jika berhasil, tampilkan pesan berhasil edit data
    echo "<script>
    window.location.href = 'index.php';
    </script>";
} else {
    // Jika gagal, tampilkan pesan gagal edit data
    echo "<script>
    alert('Data Gagal Diubah');
    window.location.href = 'index.php';
    </script>";
}
?>
