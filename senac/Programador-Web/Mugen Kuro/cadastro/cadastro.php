<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    
    <?php
    if($_SESSION['status_cadasrto']):
    ?>
    <div>
        <p>Cadastro efetuado com sucesso</p>
        <p>Faça login informando seu usuario e senha <a href="D:\Kuro Premium\Downloads\Programas e Aplicativos\rodando\Ampps\Ampps\www\Mugen Kuro\login\login.php">Clique aqui ^^</a>.</p>
    </div>
    <?php
    endif;
    unset($_SESSION['status_cadastro']);
    ?>
    <?php
    if($_SESSION['usuario_existe']):
    ?>
    <div>
        <p>O usuario escolhido já está cadastrado.</p>
    </div>
    <?php
    endif;
    unset($_SESSION['usuario_existe']);
    ?>

    <form action="cadastro.php" method="post">

        <h1>Cadastre-se na M̷̭̬͂͊u̵͕̞͖̇̋̅ͅg҉͔̭̲̽́e҉̬̒̍ͅǹ̶̗͇̂ k̴͖͉̭̙̗̄̓͂̏ȗ̴̝̮͍͋͒̎ȓ̶̦̭̳͈̪͌̎̽̈́o҈̱̗̅̔͑̀̚<</h1>

        <div>
            <label for="usuario">E-mail / Usuário</label><br>
            <input type="email" name="usuario" id="email" required >
        </div>

        <div>
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" id="nome" maxlength="50" required>
        </div>

        <div>
            <label for="data-de-nascimento">Data de nascimento</label><br>
            <input type="date" name="data-de-nascimento" id="data-de-nascimento" required>
        </div>
        
        <div>
            <label class="label" for="senha">Senha</label><br>
            <input type="password" name="senha" id="senha" minlength="6" required>
        </div>

        <div>
            <label for="confirmar-senha">Confirmar senha</label><br>
            <input type="password" name="confirmar-senha" id="confirmar-senha" minlength="6" required>
        </div>

        <div>
            <label id="tmu" for="termos de uso">Termos de uso</label> 
            <input type="checkbox" name="concordo" required>
            <p>
                Ao marcar esta caixa você concorda com nossos termos de <a href="termos.html"> termos de uso</a>
            </p>
        </div>


        <div id="supsubmit">
            <input type="submit" value="Cadastrar-se" required id="submit">
        </div>

        


    </form>
</body>
</html>