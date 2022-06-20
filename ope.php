<?php

session_start();//inicia a sessão

$_SESSION['login'] = $_POST['login'];//declara uma sessão e joga o valor do formulário
$_SESSION['senha'] = $_POST['senha'];

header('location:site.php');//direciona pro site.php
?>