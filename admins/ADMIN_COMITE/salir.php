<?php 
    session_start();

    unset($_SESSION["sw"]);
    unset($_SESSION["user"]);

    session_destroy();
    
    header('Location: C:\xampp\htdocs\proyectoDes7\estudianteTemplate\index.php');
?>