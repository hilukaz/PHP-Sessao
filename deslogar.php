<?php
session_start();

unset($_SESSION["login"]);//limpa a sessão
header('location:index.php');

?>