<?php
$konektor = mysqli_connect("localhost", "root", "", "dbrekammedis");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
