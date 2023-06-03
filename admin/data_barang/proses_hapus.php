<?php
include '../../koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM data_barang WHERE id = '$id'");
$data = mysqli_fetch_array($query);
$nama_file = $data['gambar'];
unlink('./gambar/'.$nama_file);

$hapus = mysqli_query($koneksi, "DELETE FROM data_barang WHERE id = '$id'");

if($hapus) {
    echo "<script>
    window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Dihapus');
    window.location.href = 'index.php';
    </script>";
}
?>