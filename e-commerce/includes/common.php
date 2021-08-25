<?php
    $conn = mysqli_connect("localhost", "root", "root", "store") or die(mysqli_error($conn));
    
    if(!isset($_SESSION)){
        session_start();
    }
?>