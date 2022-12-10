<?php 

    if(isset($_GET['action']) && $_GET['action'] == 'tambah') {
        include __DIR__ . '../../../views/pembayaran-spp/tambah.php';
    }

    elseif(isset($_GET['action']) && $_GET['action'] == 'detail') {
        include __DIR__ . '../../../views/pembayaran-spp/detail.php';
    }

    elseif(isset($_GET['action']) && $_GET['action'] == 'ubah') {
        include __DIR__ . '../../../views/pembayaran-spp/ubah.php';
    }
    
    else {
        include __DIR__ . '../../../views/pembayaran-spp/baca.php';
    }