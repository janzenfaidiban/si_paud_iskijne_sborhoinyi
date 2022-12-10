<?php 

    include __DIR__ . '../../../config/database.php';

    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $kondisi = $_POST['kondisi'];

    $sql = "INSERT INTO sarpras (nama_barang, jumlah, kondisi) VALUES ('$nama_barang','$jumlah','$kondisi')";

    if($conn->query($sql) === TRUE){
        header('location: ../../?page=sarpras');
    } else {
        echo "Gagal!";
    }