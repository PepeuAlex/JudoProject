<?php
session_start();
include("conexao.php");

echo "Bem vindo, ".$_SESSION["nome"];

$usuariologado = $_SESSION["usuario_id"];

$nome 				= mysqli_real_escape_string($conexao, trim($_POST['nome']));
$senha 				= mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$usuario 			= mysqli_real_escape_string($conexao, trim($_POST['usuario']));

$sql2 = "UPDATE usuario SET nome = '$nome', usuario = '$usuario', senha = '$senha' WHERE usuario_id = '$usuariologado' ";


if($conexao->query($sql2) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();


header('Location: painel.php');



exit;




?>