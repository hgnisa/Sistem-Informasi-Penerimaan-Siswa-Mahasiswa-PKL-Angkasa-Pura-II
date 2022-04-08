<?php 
    if (isset($_GET['foto'])) {
    $foto    = $_GET['foto'];

    $back_dir    ="../../download/";
    $file = $back_dir.$_GET['foto'];
     
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; foto='.basename($file));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: private');
            header('Pragma: private');
            header('Content-Length: ' . filesize($file));
            ob_clean();
            flush();
            readfile($file);
            
            exit;
        } 
        else {
            $_SESSION['pesan'] = "Oops! File - $foto - not found ...";
            header("location:lihatsiswamagang.php");
        }
    }
?>