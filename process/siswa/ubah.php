<?php 

    include __DIR__ . '../../../config/database.php';

    $id = $_POST['id'];

    $nama_lengkap = $_POST['nama_lengkap'];
    $nim = $_POST['nim'];
    $tmp_tgl_lahir = $_POST['tmp_tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    // ===========================================
    // FUNGSI UPLOAD GAMBAR
    // ===========================================

    if(isset($_FILES['file']['tmp_name']) && $_FILES['file']['tmp_name'] == TRUE) {

        // ambil data file
        $namaSementara = $_FILES['file']['tmp_name'];
    
        // tentukan lokasi file akan dipindahkan
        $dirUpload = "../../images/siswa/";
    
        // buat nama file
        $time = time();
        $foto = strtolower(str_replace(' ', '', $time.'-'.$nama_lengkap.'.jpg'));
    
        // pindahkan file
        $terupload = move_uploaded_file($namaSementara, $dirUpload.$foto);

        $sql = "UPDATE siswa SET nama_lengkap = '$nama_lengkap', nim = '$nim', tmp_tgl_lahir = '$tmp_tgl_lahir', jenis_kelamin = '$jenis_kelamin', foto = '$foto' WHERE id = $id ";

    } else {

        $sql = "UPDATE siswa SET nama_lengkap = '$nama_lengkap', nim = '$nim', tmp_tgl_lahir = '$tmp_tgl_lahir', jenis_kelamin = '$jenis_kelamin' WHERE id = $id ";

    }

    // ===========================================
    // END FUNGSI UPLOAD GAMBAR
    // ===========================================

    

    if($conn->query($sql) === TRUE){
        header('location: ../../?page=siswa&action=detail&id='.$id);
    } else {
        echo "Gagal!";
    }