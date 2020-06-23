<?php
define('HOST', 'judo-app-001-271f2b5ac2');
define('USUARIO', 'kappa');
define('SENHA', 'Ped09ale');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>