<!DOCTYPE html>

<html>



	<head>
		<title>Domestica's</title>

		<meta charset="utf-8">
		<link rel="stylesheet" href="css/styles.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,400" rel="stylesheet">  
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="styles.css" />

	</head>


	<body>
			          

			<div class = "capa">

				<div class = "profile-title">
					<h1>Dados </h1>
				<div class = "formulario">
					<h4> Deseja atualizar dados? </h4>

					<br>
							<div class = "forms">
							<form action="alterar.php" method="POST">

							<?php 
							session_start();
							include("conexao.php");
							echo "   <br><br>

							    <label for='lname'>Deseja alterar </label><br>
								<input type='text' name='nome' value='".$_SESSION['nome']."'><br><br>

								<label for='lname'>Novo nome de usuario</label><br>
								<input type='text' name='usuario' value='".$_SESSION['usuario']."'><br><br>

								<label for='lname'>Sugira valor para o serviço:</label><br>
								<input type='password' name='senha' value='".$_SESSION['senha']."'><br><br>

							    <button type='submit'>Atualizar dados</button> <br><br> ";
?>
								<button onclick="location.href='painel.php'" type="button">Manter dados atuais</button>
							</form>
							

						     

							 </form>
							</div>

							  


							


			  </div> 


	    </div> 
	    </div>	
		

	</body>

</html>