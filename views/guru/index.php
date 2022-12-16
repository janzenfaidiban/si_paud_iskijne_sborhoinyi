<?php 

    if(isset($_GET['action']) && $_GET['action'] == 'tambah') {
        include __DIR__ . '../../../views/guru/tambah.php';
    }

    elseif(isset($_GET['action']) && $_GET['action'] == 'detail') {
        include __DIR__ . '../../../views/guru/detail.php';
    }

    elseif(isset($_GET['action']) && $_GET['action'] == 'ubah') {
        include __DIR__ . '../../../views/guru/ubah.php';
    }

    elseif(isset($_GET['action']) && $_GET['action'] == 'cetak') {
        include __DIR__ . '../../../views/guru/cetak.php';
    }
    
    else {
        include __DIR__ . '../../../views/guru/baca.php';
    }