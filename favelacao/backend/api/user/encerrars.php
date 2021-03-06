<?php

    if (!isset($_SESSION)) session_start();

    $_SESSION['email']="";
    $_SESSION['senha']="";
    session_destroy();
    header("Location: ../../../frontend/login.php?encerrar=true"); 

?>
