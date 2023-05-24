<?php
     include '../../koneksi.php';

    $kategori_post = $_POST['kategori_post'];

    $insert = mysqli_query($koneksi, "INSERT INTO kategori VALUES (
        NULL,
        '$kategori_post'
    )");

    if($insert){
        echo "<script>
            window.location.href='index.php';
        </script>";
    }else{
        echo "<script>
            alert('Data Gagal Ditambahkan');
            window.location.href='index.php';
        </script>";
    }
?>
