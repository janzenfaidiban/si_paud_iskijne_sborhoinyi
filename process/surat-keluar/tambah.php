<?php 

    include __DIR__ . '../../../config/database.php';

    $jenis_surat = 'Keluar';
    $tanggal_diterima = $_POST['tanggal_diterima'];
    $tanggal_surat = $_POST['tanggal_surat'];
    $nomor_surat = $_POST['nomor_surat'];
    $tujuan = $_POST['tujuan'];

    $sql = "INSERT INTO surat (jenis_surat, tanggal_diterima, tanggal_surat, nomor_surat, tujuan) VALUES ('$jenis_surat','$tanggal_diterima','$tanggal_surat','$nomor_surat','$tujuan')";

    if($conn->query($sql) === TRUE){
        header('location: ../../?page=surat-keluar');
    } else {
        echo "Gagal!";
    }