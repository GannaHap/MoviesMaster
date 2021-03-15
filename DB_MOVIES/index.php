<?php
    $do = explode ("/", $_REQUEST['do']);
    $opsi = $do[0];
    $x = define('Project', dirname (__FILE__) . '/');
    switch($opsi) {
            
        default:
            $halaman = $opsi;
            if($halaman == ''){
                $halaman = 'home';
                require_once (Project . 'home.php');    
            }else{
                $namafile = $halaman.'.php';
                if(file_exists($namafile)){
                    require_once (Project . $halaman.'.php');        
                } else{
                    require_once (Project . 'error.php');
                }
            }
    }
?>