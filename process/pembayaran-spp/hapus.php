
<?php 

    include __DIR__ . '../../../config/database.php';
        
    $get_id = $_GET['id'];
    
    $sql = "DELETE FROM pembayaran_spp WHERE id =$get_id";
    $result = $conn->query($sql);

    if($result === TRUE){
        header('location: ../../?page=pembayaran-spp');
    } else {
        echo "Gagal!";
    }