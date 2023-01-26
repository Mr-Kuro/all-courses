<?php
    session_start();
    include('D:\Kuro Premium\Downloads\Programas e Aplicativos\rodando\Ampps\Ampps\www\Mugen Kuro\login\conexao.php');

    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
    $senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

    $sql = "seclect count(*) as total from user where user = '$usuario'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_array($result);

    if($row['total'] == 1) {
        $_SESSION['usuario_existe'] = true;
        header('Location: cadastro.php');
        exit;
    }
    
    $sql = "INSERT INTO usuario (nome, user, pass, data_cadastro) values ('$nome', '$usuaruario', '$senha', NOW())";

    if($conexao ->query($sql) === TRUE) {
        $_SESSION['status_cadastro'] == true;
    }

    $conexao->close();
    header('Location: cadastro.php');
    exit;
?>