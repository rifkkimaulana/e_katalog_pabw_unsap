<?php
include '../../koneksi.php';

$id = $_POST['id'];
$nama_social = $_POST['nama_social'];
$link_social = $_POST['link'];

$update = mysqli_query($koneksi, "UPDATE tb_social SET
nama_sosmed = '$nama_social',
link = '$link_social'
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