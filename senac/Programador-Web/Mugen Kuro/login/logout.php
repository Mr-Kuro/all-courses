<?php
    session_start();
    // unset($SESSION['NOMEDASESSAO']);
    session_destroy();
    header('Location: site.php');
    exit();