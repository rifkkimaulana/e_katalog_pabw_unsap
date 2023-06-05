<?php
include '../../koneksi.php';

$judul = $_POST['judul_post'];
$isi = $_POST['isi_post'];

$insert = mysqli_query($koneksi, "INSERT INTO tb_twitter VALUES (
        NULL,
        '$judul',
        '$isi'
    )");

if ($insert) {
    echo "<script>
            window.location.href='index.php';
        </script>";
} else {
    echo "<script>
            alert('Data Gagal Ditambahkan');
            window.location.href='index.php';
        </script>";
}
?>