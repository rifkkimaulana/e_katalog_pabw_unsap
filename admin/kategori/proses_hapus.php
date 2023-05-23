<?php
// Load koneksi database
include '../../koneksi.php';

// Ambil id dari URL
$id = $_GET['id'];

// Hapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM kategori WHERE id = '$id'");

// Cek apakah proses hapus data berhasil
if($hapus) {
    // Jika berhasil, tampilkan pesan berhasil hapus data
    echo "<script>
    alert('Data Berhasil Dihapus');
    window.location.href = 'index.php';
    </script>";
} else {
    // Jika gagal, tampilkan pesan gagal hapus data
    echo "<script>
    alert('Data Gagal Dihapus');
    window.location.href = 'index.php';
    </script>";
}
?>