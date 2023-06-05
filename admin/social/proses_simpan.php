<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$nama_sosial_post = $_POST['nama_social_post'];

//proses upload gambar
$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = './gambar/';
move_uploaded_file($source, $folder . $nama_file);

//simpan data ke database
$insert = mysqli_query($koneksi, "INSERT INTO tb_social VALUES (
        NULL,
        '$nama_sosial_post',
        '$nama_file'
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