
<?php 

    include __DIR__ . '../../../config/database.php';
        
    $get_id = $_GET['id'];
    
    $sql = "DELETE FROM buku_kas_umum WHERE id =$get_id";
    $result = $conn->query($sql);

    if($result === TRUE){
        header('location: ../../?page=buku-kas-umum');
    } else {
        echo "Gagal!";
    }