<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">

    <style>

        
    </style>

</head>
<body class="body">
    <Form class="form" name="Form" action="login-back.php" method="POST">

        <h1>Logar com a M̷̭̬͂͊u̵͕̞͖̇̋̅ͅg҉͔̭̲̽́e҉̬̒̍ͅǹ̶̗͇̂ k̴͖͉̭̙̗̄̓͂̏ȗ̴̝̮͍͋͒̎ȓ̶̦̭̳͈̪͌̎̽̈́o҈̱̗̅̔͑̀̚<</h1> <br><br>
    
        <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
            <div>
                <p>ERRO! Usuario ou senha inválidos.</p>
            </div>
        <?php 
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>

            <div class="text">
                <label for="usuario">Usuario</label> <br>
                <input type="text" usuario="usuario" size="50" maxlength="30" required id="usuario">
            </div>

            <div class="text">
                <label for="senha">Senha:</label> <br>
                <input type="password" name="senha" maxlength="10" required id="senha">
            </div>
        
            <div class="text hover" >
                <label for="termos de uso">Termos de uso</label> 
                <input type="checkbox" name="concordo"required id="termoDeUso">
                <p id="tu">Ao marcar esta caixa você concorda com nossos termos de <a href="termos.html"> termos de uso</a></p>
            </div>

            <div id="supsubmit">
                <input type="submit" value="Enviar" id="submit">
            </div>

            
                <p class="text borda">Não possue uma conta na Mugen Kuro? <br> <a href="\Mugen Kuro\cadastro\cadastro.php" class="acor" > Clique aqui </a > para fazer o cadastro</p>
            


    </Form>
</body>
</html>