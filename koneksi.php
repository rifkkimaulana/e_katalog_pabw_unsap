<?php
$koneksi = mysqli_connect("localhost", "root", "", "ekatalog");

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>