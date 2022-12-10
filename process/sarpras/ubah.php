<?php 

    include __DIR__ . '../../../config/database.php';

    $id = $_POST['id'];

    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $kondisi = $_POST['kondisi'];

    $sql = "UPDATE sarpras SET nama_barang = '$nama_barang', jumlah = '$jumlah', kondisi = '$kondisi' WHERE id = $id ";

    if($conn->query($sql) === TRUE){
        header('location: ../../?page=sarpras&action=detail&id='.$id);
    } else {
        echo "Gagal!";
    }