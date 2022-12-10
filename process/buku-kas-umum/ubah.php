<?php 

    include __DIR__ . '../../../config/database.php';

    $id = $_POST['id'];

    $tanggal = $_POST['tanggal'];
    $uraian = $_POST['uraian'];
    $penerimaan = $_POST['penerimaan'];
    $pengeluaran = $_POST['pengeluaran'];

    $sql = "UPDATE buku_kas_umum SET tanggal = '$tanggal', uraian = '$uraian', penerimaan = '$penerimaan', pengeluaran = '$pengeluaran' WHERE id = $id ";

    if($conn->query($sql) === TRUE){
        header('location: ../../?page=buku-kas-umum&action=detail&id='.$id);
    } else {
        echo "Gagal!";
    }