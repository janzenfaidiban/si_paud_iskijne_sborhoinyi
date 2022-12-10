<?php 

    include __DIR__ . '../../../config/database.php';

    $id = $_POST['id'];

    $bulan = $_POST['bulan'];
    $iuran = $_POST['iuran'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];

    $sql = "UPDATE pembayaran_spp SET bulan = '$bulan', iuran = '$iuran', tanggal_pembayaran = '$tanggal_pembayaran' WHERE id = $id ";

    if($conn->query($sql) === TRUE){
        header('location: ../../?page=pembayaran-spp&action=detail&id='.$id);
    } else {
        echo "Gagal!";
    }