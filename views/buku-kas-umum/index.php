<?php 

    if(isset($_GET['action']) && $_GET['action'] == 'tambah') {
        include __DIR__ . '../../../views/buku-kas-umum/tambah.php';
    }

    elseif(isset($_GET['action']) && $_GET['action'] == 'detail') {
        include __DIR__ . '../../../views/buku-kas-umum/detail.php';
    }

    elseif(isset($_GET['action']) && $_GET['action'] == 'ubah') {
        include __DIR__ . '../../../views/buku-kas-umum/ubah.php';
    }
    
    else {
        include __DIR__ . '../../../views/buku-kas-umum/baca.php';
    }