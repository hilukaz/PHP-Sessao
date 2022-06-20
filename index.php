<html>
    <head>
        <title>Sessão PHP</title>
    <head>
    <body>
        <form method="post" action="ope.php" id="formlogin" name="formlogin"><!--Formulário-->
        <!--action qual página vai processar essas informações-->
           <label>NOME : </label><!--Texto-->
           <input type="text" name= "login" id= "login"><br><br><!--Campo-->
           <label>SENHA :</label>
           <input type="passaword" name ="senha" id="senha"><br><br>
           <input type="submit" value = "LOGAR"><!--Botão-->
           <!--Sessão significa ter uma variável que possa sempre existir independente da página que esteja-->
           <!--é muito útil pois significa que ao colocar uma valor nela, será armazenada em todos os sites -->
        </form>
    </body>
</html>        
