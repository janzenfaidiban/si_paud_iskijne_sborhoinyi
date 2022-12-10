<?php 

    include __DIR__ . '../../../config/database.php';

    $id = $_POST['id'];

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

        $sql = "UPDATE guru SET nama_lengkap = '$nama_lengkap', alamat_email = '$alamat_email', nomor_hp = '$nomor_hp', alamat_lengkap = '$alamat_lengkap', foto = '$foto' WHERE id = $id ";

    } else {

        $sql = "UPDATE guru SET nama_lengkap = '$nama_lengkap', alamat_email = '$alamat_email', nomor_hp = '$nomor_hp', alamat_lengkap = '$alamat_lengkap' WHERE id = $id ";

    }

    // ===========================================
    // END FUNGSI UPLOAD GAMBAR
    // ===========================================

    

    if($conn->query($sql) === TRUE){
        header('location: ../../?page=guru&action=detail&id='.$id);
    } else {
        echo "Gagal!";
    }