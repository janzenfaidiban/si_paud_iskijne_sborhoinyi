<?php 

    // menghubungkan file koneksi database
    include __DIR__ . '../../../config/database.php';

    // membuat variabel
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $kondisi_baik = $_POST['kondisi_baik'];
    $kondisi_tidak_baik = $_POST['kondisi_tidak_baik'];
    $letak_barang = $_POST['letak_barang'];

    // perintah sql untuk memasukan data
    $sql = "INSERT INTO sarpras (nama_barang, jumlah, kondisi_baik, kondisi_tidak_baik, letak_barang) VALUES ('$nama_barang','$jumlah','$kondisi_baik','$kondisi_tidak_baik','$letak_barang')";

    // kondisi berhasil atau gagal
    if($conn->query($sql) === TRUE){
        // mengalihkan halaman ketika berhasil
        header('location: ../../?page=sarpras');
    } else {
        // memunculkan pesan gagal
        echo "Gagal!";
    }