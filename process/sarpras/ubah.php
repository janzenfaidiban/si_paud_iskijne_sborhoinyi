<?php 

    // menghubungkan file koneksi database
    include __DIR__ . '../../../config/database.php';

    // membuat variabel
    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $kondisi_baik = $_POST['kondisi_baik'];
    $kondisi_tidak_baik = $_POST['kondisi_tidak_baik'];
    $letak_barang = $_POST['letak_barang'];

    // perintah sql untuk mengubah data
    $sql = "UPDATE sarpras SET nama_barang = '$nama_barang', jumlah = '$jumlah', kondisi_baik = '$kondisi_baik', kondisi_tidak_baik = '$kondisi_tidak_baik', letak_barang = '$letak_barang' WHERE id = $id ";

    // kondisi berhasil atau gagal
    if($conn->query($sql) === TRUE){
        // mengalihkan halaman ketika berhasil
        header('location: ../../?page=sarpras&action=detail&id='.$id);
    } else {
        // memunculkan pesan gagal
        echo "Gagal!";
    }