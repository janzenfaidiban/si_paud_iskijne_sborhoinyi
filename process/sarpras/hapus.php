
<?php 

    // menghubungkan file koneksi database
    include __DIR__ . '../../../config/database.php';
        
    // menangkap id data
    $get_id = $_GET['id'];
    
    // perintah sql untuk menghapus data
    $sql = "DELETE FROM sarpras WHERE id =$get_id";
    $result = $conn->query($sql);

    // kondisi berhasil atau gagal
    if($result === TRUE){
        // mengalihkan halaman ketika berhasil
        header('location: ../../?page=sarpras');
    } else {
        // memunculkan pesan gagal
        echo "Gagal!";
    }