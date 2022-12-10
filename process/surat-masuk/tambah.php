<?php 

    include __DIR__ . '../../../config/database.php';

    $jenis_surat = 'Masuk';
    $tanggal_diterima = $_POST['tanggal_diterima'];
    $tanggal_surat = $_POST['tanggal_surat'];
    $nomor_surat = $_POST['nomor_surat'];
    $pengirim = $_POST['pengirim'];

    $sql = "INSERT INTO surat (jenis_surat, tanggal_diterima, tanggal_surat, nomor_surat, pengirim) VALUES ('$jenis_surat','$tanggal_diterima','$tanggal_surat','$nomor_surat','$pengirim')";

    if($conn->query($sql) === TRUE){
        header('location: ../../?page=surat-masuk');
    } else {
        echo "Gagal!";
    }