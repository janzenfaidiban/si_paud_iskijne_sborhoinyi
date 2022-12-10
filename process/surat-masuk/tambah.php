<?php 

    include __DIR__ . '../../../config/database.php';

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

        $sql = "INSERT INTO surat (jenis_surat, tanggal_diterima, tanggal_surat, nomor_surat, pengirim, surat) VALUES ('$jenis_surat','$tanggal_diterima','$tanggal_surat','$nomor_surat','$pengirim','$surat')";

    } else {

        $sql = "INSERT INTO surat (jenis_surat, tanggal_diterima, tanggal_surat, nomor_surat, pengirim) VALUES ('$jenis_surat','$tanggal_diterima','$tanggal_surat','$nomor_surat','$pengirim')";

    }

    // ===========================================
    // END FUNGSI UPLOAD GAMBAR
    // ===========================================

    if($conn->query($sql) === TRUE){
        header('location: ../../?page=surat-masuk');
    } else {
        echo "Gagal!";
    }