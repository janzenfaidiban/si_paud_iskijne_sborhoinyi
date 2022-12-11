<?php 

    include __DIR__ . '../../../config/database.php';

    $id = $_POST['id'];

    $jenis_surat = 'Masuk';
    $tanggal_diterima = $_POST['tanggal_diterima'];
    $tanggal_surat = $_POST['tanggal_surat'];
    $nomor_surat = $_POST['nomor_surat'];
    $pengirim = $_POST['pengirim']; 

    // ===========================================
    // FUNGSI UPLOAD GAMBAR
    // ===========================================

    if(isset($_FILES['file']['tmp_name']) && $_FILES['file']['tmp_name'] == TRUE) {

        // ambil data file
        $namaSementara = $_FILES['file']['tmp_name'];

        // tentukan lokasi file akan dipindahkan
        $dirUpload = "../../surat/masuk/";

        // buat nama file
        $time = time();
        $surat = strtolower(str_replace(' ', '', 'surat-masuk-'.$time.'-.pdf'));

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
        header('location: ../../?page=surat-masuk&action=detail&id='.$id);
    } else {
        echo "Gagal!";
    }