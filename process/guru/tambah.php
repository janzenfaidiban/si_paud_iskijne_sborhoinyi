<?php 

    include __DIR__ . '../../../config/database.php';

    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat_email = $_POST['alamat_email'];
    $nomor_hp = $_POST['nomor_hp'];
    $alamat_lengkap = $_POST['alamat_lengkap'];

    // ===========================================
    // FUNGSI UPLOAD GAMBAR
    // ===========================================

    if(isset($_FILES['file']['tmp_name']) && $_FILES['file']['tmp_name'] == TRUE) {

        // ambil data file
        $namaSementara = $_FILES['file']['tmp_name'];

        // tentukan lokasi file akan dipindahkan
        $dirUpload = "../../images/guru/";

        // buat nama file
        $time = time();
        $foto = strtolower(str_replace(' ', '', $time.'-'.$nama_lengkap.'.jpg'));

        // pindahkan file
        $terupload = move_uploaded_file($namaSementara, $dirUpload.$foto);

        $sql = "INSERT INTO guru (nama_lengkap, alamat_email, nomor_hp, alamat_lengkap, foto) VALUES ('$nama_lengkap','$alamat_email','$nomor_hp','$alamat_lengkap','$foto')";

    } else {

        $sql = "INSERT INTO guru (nama_lengkap, alamat_email, nomor_hp, alamat_lengkap) VALUES ('$nama_lengkap','$alamat_email','$nomor_hp','$alamat_lengkap')";

    }

    // ===========================================
    // END FUNGSI UPLOAD GAMBAR
    // ===========================================

    if($conn->query($sql) === TRUE){
        header('location: ../../?page=guru');
    } else {
        echo "Gagal!";
    }