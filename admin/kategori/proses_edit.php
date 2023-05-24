<?php
include '../../koneksi.php';

$id = $_POST['id'];
$kategori_barang = $_POST['kategori_barang'];

$update = mysqli_query($koneksi, "UPDATE kategori SET
kategori_barang = '$kategori_barang'
WHERE id = '$id'");

if($update) {
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
