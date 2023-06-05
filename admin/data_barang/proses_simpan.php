<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$nama_barang_post = $_POST['nama_barang_post'];
$deskripsi_post = $_POST['deskripsi_post'];
$kategori_post = $_POST['kategori_post'];
$harga_post = $_POST['harga_post'];

//proses upload gambar
$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = './gambar/';
move_uploaded_file($source, $folder . $nama_file);

//simpan data ke database
$insert = mysqli_query($koneksi, "INSERT INTO data_barang VALUES (
        NULL,
        '$nama_barang_post',
        '$kategori_post',
        '$deskripsi_post',
        '$harga_post',
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