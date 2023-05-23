<?php
// Load koneksi database
include '../../koneksi.php';

// Ambil data dari form
$id = $_POST['id'];
$kategori_barang = $_POST['kategori_barang'];

$update = mysqli_query($koneksi, "UPDATE kategori SET
kategori_barang = '$kategori_barang'
WHERE id = '$id'");

// Cek apakah proses edit ke database berhasil
if($update) {
    // Jika berhasil, tampilkan pesan berhasil edit data
    echo "<script>
    alert('Data Berhasil Diubah');
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
