<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$nama_sosial_post = $_POST['nama_social_post'];
$link_post = $_POST['link_post'];

//simpan data ke database
$insert = mysqli_query($koneksi, "INSERT INTO tb_social VALUES (
        NULL,
        '$nama_sosial_post',
        '$link_post'
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