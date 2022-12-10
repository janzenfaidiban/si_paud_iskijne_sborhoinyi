<?php 

    if(isset($_GET['action']) && $_GET['action'] == 'tambah') {
        include __DIR__ . '../../../views/siswa/tambah.php';
    }

    elseif(isset($_GET['action']) && $_GET['action'] == 'detail') {
        include __DIR__ . '../../../views/siswa/detail.php';
    }

    elseif(isset($_GET['action']) && $_GET['action'] == 'ubah') {
        include __DIR__ . '../../../views/siswa/ubah.php';
    }
    
    else {
        include __DIR__ . '../../../views/siswa/baca.php';
    }