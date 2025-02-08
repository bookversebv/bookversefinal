<?php
session_start();
session_destroy(); // Encerra a sessão
header('Location: LoginPage.php'); // Redireciona para a página de login
exit();
?>
