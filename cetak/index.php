
<?php 
    session_start();
    if(!isset($_SESSION['username']) || $_SESSION['username'] == '') {
        header('Location: ./welcome.php');
        exit;
    }
 

    if(isset($_GET['data']) && $_GET['data'] == 'guru'){
        
        include __DIR__ . '../../views/guru/cetak.php'; 

    } else {

        include __DIR__ . './views/404.php';

        // header('location: login.php');

    }