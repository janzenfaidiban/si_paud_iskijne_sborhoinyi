<?php 

    include __DIR__ . '../../../config/database.php';

    $tanggal = $_POST['tanggal'];
    $uraian = $_POST['uraian'];
    $penerimaan = $_POST['penerimaan'];
    $pengeluaran = $_POST['pengeluaran'];

    $sql = "INSERT INTO buku_kas_umum (tanggal, uraian, penerimaan, pengeluaran) VALUES ('$tanggal','$uraian','$penerimaan','$pengeluaran')";

    if($conn->query($sql) === TRUE){
        header('location: ../../?page=buku-kas-umum');
    } else {
        echo "Gagal!";
    }