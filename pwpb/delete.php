<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['nis'])) {
        include 'lib/library.php';

        $nis = $_GET['nis'];
        $mysqli->query("DELETE FROM siswa WHERE nis = '$nis'") or die ($mysqli->error);

        header('location: index.php');
    }


?>