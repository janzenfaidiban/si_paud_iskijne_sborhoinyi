
<?php 

    include __DIR__ . '../../../config/database.php';
        
    $get_id = $_GET['id'];
    
    $sql = "DELETE FROM surat WHERE id =$get_id";
    $result = $conn->query($sql);

    if($result === TRUE){
        header('location: ../../?page=surat-masuk');
    } else {
        echo "Gagal!";
    }