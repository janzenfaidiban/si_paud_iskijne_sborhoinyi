<?php 

    include __DIR__ . '../../../config/database.php';

    $id = $_POST['id'];

    $jenis_surat = 'Keluar';
    $tanggal_diterima = $_POST['tanggal_diterima'];
    $tanggal_surat = $_POST['tanggal_surat'];
    $nomor_surat = $_POST['nomor_surat'];
    $tujuan = $_POST['tujuan'];
    
    // ===========================================
    // FUNGSI UPLOAD GAMBAR
    // ===========================================

    if(isset($_FILES['file']['tmp_name']) && $_FILES['file']['tmp_name'] == TRUE) {

        // ambil data file
        $namaSementara = $_FILES['file']['tmp_name'];

        // tentukan lokasi file akan dipindahkan
        $dirUpload = "../../surat/keluar/";

        // buat nama file
        $time = time();
        $surat = strtolower(str_replace(' ', '', 'surat-keluar-'.$time.'-.pdf'));

        // pindahkan file
        $terupload = move_uploaded_file($namaSementara, $dirUpload.$surat);

        $sql = "UPDATE surat SET jenis_surat = '$jenis_surat', tanggal_diterima = '$tanggal_diterima', tanggal_surat = '$tanggal_surat', nomor_surat = '$nomor_surat', pengirim = '$pengirim', surat = '$surat' WHERE id = $id ";

    } else {

        $sql = "UPDATE surat SET jenis_surat = '$jenis_surat', tanggal_diterima = '$tanggal_diterima', tanggal_surat = '$tanggal_surat', nomor_surat = '$nomor_surat', pengirim = '$pengirim' WHERE id = $id ";

    }

    // ===========================================
    // END FUNGSI UPLOAD GAMBAR
    // ===========================================

    if($conn->query($sql) === TRUE){
        header('location: ../../?page=surat-keluar&action=detail&id='.$id);
    } else {
        echo "Gagal!";
    }