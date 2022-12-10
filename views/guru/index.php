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
    
    else {
        include __DIR__ . '../../../views/guru/baca.php';
    }