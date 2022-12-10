
<?php 
    session_start();
    if(!isset($_SESSION['username']) || $_SESSION['username'] == '') {
        header('Location: ./welcome.php');
        exit;
    }
    
    // INTEGRASI HEADER
    include __DIR__ . './partials/header.php';  

    // INTEGRASI NAV
    include __DIR__ . './partials/nav.php';  

    if(isset($_GET['page']) && $_GET['page'] == 'dasbor'){
        
        include __DIR__ . './views/dasbor/index.php'; 

    } elseif(isset($_GET['page']) && $_GET['page'] == 'guru'){
        
        include __DIR__ . './views/guru/index.php'; 

    } elseif(isset($_GET['page']) && $_GET['page'] == 'siswa'){
        
        include __DIR__ . './views/siswa/index.php';

    } elseif(isset($_GET['page']) && $_GET['page'] == 'sarpras'){
        
        include __DIR__ . './views/sarpras/index.php';

    } elseif(isset($_GET['page']) && $_GET['page'] == 'surat-masuk'){
        
        include __DIR__ . './views/surat-masuk/index.php';

    } elseif(isset($_GET['page']) && $_GET['page'] == 'surat-keluar'){
        
        include __DIR__ . './views/surat-keluar/index.php';

    } elseif(isset($_GET['page']) && $_GET['page'] == 'pembayaran-spp'){
        
        include __DIR__ . './views/pembayaran-spp/index.php';

    } elseif(isset($_GET['page']) && $_GET['page'] == 'buku-kas-umum'){
        
        include __DIR__ . './views/buku-kas-umum/index.php';

    } elseif(isset($_GET['page']) && $_GET['page'] == 'informasi-situs'){
        
        include __DIR__ . './views/informasi-situs/index.php';

    } else {

        include __DIR__ . './views/404.php';

        // header('location: login.php');

    }

    // INTEGRASI FOOTER
    include __DIR__ . './partials/footer.php';  