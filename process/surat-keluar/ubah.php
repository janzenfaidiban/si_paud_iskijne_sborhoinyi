<?php 

    include __DIR__ . '../../../config/database.php';

    $id = $_POST['id'];

    $jenis_surat = 'Keluar';
    $tanggal_diterima = $_POST['tanggal_diterima'];
    $tanggal_surat = $_POST['tanggal_surat'];
    $nomor_surat = $_POST['nomor_surat'];
    $tujuan = $_POST['tujuan'];

    // $sql = "INSERT INTO surat (jenis_surat, tanggal_diterima, tanggal_surat, nomor_surat) VALUES ('$jenis_surat','$tanggal_diterima','$tanggal_surat','$nomor_surat')";

    $sql = "UPDATE surat SET jenis_surat = '$jenis_surat', tanggal_diterima = '$tanggal_diterima', tanggal_surat = '$tanggal_surat', nomor_surat = '$nomor_surat', tujuan = '$tujuan' WHERE id = $id ";

    if($conn->query($sql) === TRUE){
        header('location: ../../?page=surat-keluar&action=detail&id='.$id);
    } else {
        echo "Gagal!";
    }