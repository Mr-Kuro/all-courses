<?php
    session_start();
    // print_r($_SESSION);exit;
    include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2> clique em <a href="logout.php">Sair</a> para fazer logout</h2> 
