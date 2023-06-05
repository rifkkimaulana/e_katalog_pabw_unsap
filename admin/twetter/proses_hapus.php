<?php
include '../../koneksi.php';

$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_twitter WHERE id = '$id'");

if ($hapus) {
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