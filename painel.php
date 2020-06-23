<?php
session_start();

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Javascript CRUD</title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

        <!-- Biblioteca Google Fonts: tipografia do site -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <!-- Bibliotecas de Bootstrap: Estilos do site -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- Estilo do site -->
        <link rel="stylesheet" href="style.css" />

        <!-- funções Javascript -->
        <script type="text/javascript" src="functions.js"></script>

    </head>
    <body>

        <!-- Cabeçalho -->
        <div class="page-header">
            <h1>Campeonato de Judô</h1>

             <h2>Olá, <?php echo $_SESSION['nome'];?></h2>
        </div>

        <!--Formulario de entrada de dados-->
        <div class="container">
            <form id="frmPerson" class="form-horizontal">
                <div class="form-group">
                    <label for="txtID" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-4">
                        <input type="text" id="txtID" class="form-control" placeholder="ID">
                    </div>
                </div>                    
                <div class="form-group">
                    <label for="txtName" class="col-lg-2 control-label">Nome do competidor</label>
                    <div class="col-sm-4">
                        <input type="text" id="txtName" class="form-control" placeholder="Nome">
                    </div>
                </div>
				<div class="form-group">
                    <label for="txtName" class="col-lg-2 control-label">Nome da academia</label>
                    <div class="col-sm-4">
                        <input type="text" id="txtAcademia" class="form-control" placeholder="Academia">
                    </div>
                </div>	
                <div class="form-group">
                    <label for="txtPhone" class="col-lg-2 control-label">Telefone</label>
                    <div class="col-sm-4">
                        <input type="text" id="txtPhone" class="form-control" placeholder="Telefone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtEmail" class="col-lg-2 control-label">E-mail</label>
                    <div class="col-sm-4">
                        <input type="email" id="txtEmail" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-sm-4">
                        <input type="submit" value="Inserir" id="btnSave" class="btn btn-success"/>
                    </div>
                </div>
            </form>
        </div>      


        <div class="container">
            <table id="tblList" class="table table-bordered"></table>
        </div>

   
        <div id="footer">
            <div class="container">
                <p class="text-muted credit">Pedro Alexandre</p>
            </div>
        </div>

     



        <h2><a href="torneio.php">Veja os torneios</a></h2>


		<h2><a href="logout.php">Sair</a></h2>

    </body>
</html>


