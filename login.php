<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = mysqli_query($conexao, "select nome, usuario_id, senha, usuario  from usuario where usuario = '{$usuario}' and senha = md5('{$senha}' )" );

$bd = mysqli_fetch_assoc($sql);


if (!empty($bd)) {
    $_SESSION["nome"]  = $bd["nome"];
    $_SESSION["usuario_id"]    = $bd["usuario_id"];
    $_SESSION["senha"]  = $bd["senha"];
    $_SESSION["usuario"]  = $bd["usuario"];
    header('location:confirmaAlteracao.php');
}

else{
    header('location:index.php');
}
?>