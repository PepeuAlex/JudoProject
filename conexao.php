<?php
define('HOST', 'judo-app-001-b2b560715b');
define('USUARIO', 'pepeu');
define('SENHA', 'kappa');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>