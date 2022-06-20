<?php
    session_start();//inicia sessões
if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)){
    //se a variável da sessão login e senha não forem verdadeiras(existir). faça:
    header('location:index.php');//direciona pro site

}

$logado = $_SESSION['login'];//joga a variável pra uma sessão
?>

<html>
    <head>
        <title>SESSÃO LOGADA</title>
    </head>
    <body>
        <?php echo "usuário logado: " . $logado; ?>
        <form  action="deslogar.php" method="POST">
            <button type="submit" name="sair">Sair</button>
       </form>
    </body>
</html>           