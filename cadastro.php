<!DOCTYPE html>
<html>
    
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style2.css" />
    <script src='https://code.jquery.com/jquery-3.5.0.min.js'>  </script>
	<title>Cadastrar competidor</title>
</head>

<body>
    
        <div class="body">
            <div class="form">
                
                    <h3>Cadastro</h3>
                    
                    
                    <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                   
                    
                    
                        <form action="cadastrar.php" method="POST" class = "login-page">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text"  placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text"  placeholder="Usuário">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha"  type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" >Cadastrar</button>
                        </form>
                    
                
            </div>
        </div>
 
</body>

</html>