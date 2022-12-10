<?php 

    include __DIR__ . '../../../config/database.php';

    $bulan = $_POST['bulan'];
    $iuran = $_POST['iuran'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];

    $sql = "INSERT INTO pembayaran_spp (bulan, iuran, tanggal_pembayaran) VALUES ('$bulan','$iuran','$tanggal_pembayaran')";

    if($conn->query($sql) === TRUE){
        header('location: ../../?page=pembayaran-spp');
    } else {
        echo "Gagal!";
    }