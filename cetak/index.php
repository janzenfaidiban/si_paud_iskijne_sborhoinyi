
<?php 
    session_start();
    if(!isset($_SESSION['username']) || $_SESSION['username'] == '') {
        header('Location: ../../welcome.php');
        exit;
    }
    
    // INTEGRASI HEADER
    include __DIR__ . '../../partials/cetak-header.php';  
 

    if(isset($_GET['data']) && $_GET['data'] == 'guru'){
        
        include __DIR__ . '../../views/guru/cetak.php'; 

    } elseif(isset($_GET['data']) && $_GET['data'] == 'siswa'){
        
        include __DIR__ . '../../views/siswa/cetak.php';

    } elseif(isset($_GET['data']) && $_GET['data'] == 'sarpras'){
        
        include __DIR__ . '../../views/sarpras/cetak.php';

    } elseif(isset($_GET['data']) && $_GET['data'] == 'surat-masuk'){
        
        include __DIR__ . '../../views/surat-masuk/cetak.php';

    } elseif(isset($_GET['data']) && $_GET['data'] == 'surat-keluar'){
        
        include __DIR__ . '../../views/surat-keluar/cetak.php';

    } elseif(isset($_GET['data']) && $_GET['data'] == 'pembayaran-spp'){
        
        include __DIR__ . '../../views/pembayaran-spp/cetak.php';

    } elseif(isset($_GET['data']) && $_GET['data'] == 'buku-kas-umum'){
        
        include __DIR__ . '../../views/buku-kas-umum/cetak.php';

    } else {

        include __DIR__ . '../../views/404.php';

        // header('location: login.php');

    }
    
    // INTEGRASI FOOTER
    include __DIR__ . '../../partials/cetak-footer.php';  