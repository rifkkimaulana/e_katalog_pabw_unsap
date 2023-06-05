<?php
include '../../koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];

$update = mysqli_query($koneksi, "UPDATE tb_twitter SET
judul = '$judul',
isi = '$isi'
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