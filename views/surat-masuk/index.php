<?php 

    if(isset($_GET['action']) && $_GET['action'] == 'tambah') {
        include __DIR__ . '../../../views/surat-masuk/tambah.php';
    }

    elseif(isset($_GET['action']) && $_GET['action'] == 'detail') {
        include __DIR__ . '../../../views/surat-masuk/detail.php';
    }

    elseif(isset($_GET['action']) && $_GET['action'] == 'ubah') {
        include __DIR__ . '../../../views/surat-masuk/ubah.php';
    }
    
    else {
        include __DIR__ . '../../../views/surat-masuk/baca.php';
    }