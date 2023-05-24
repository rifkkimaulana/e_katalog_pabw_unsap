<?php
// Load koneksi database
include '../../koneksi.php';

// Ambil id dari URL
$id = $_GET['id'];

// Hapus file gambar dari folder gambar
$query = mysqli_query($koneksi, "SELECT * FROM data_barang WHERE id = '$id'");
$data = mysqli_fetch_array($query);
$nama_file = $data['gambar'];
unlink('./gambar/'.$nama_file);

// Hapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM data_barang WHERE id = '$id'");

// Cek apakah proses hapus data berhasil
if($hapus) {
    // Jika berhasil, tampilkan pesan berhasil hapus data
    echo "<script>
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