<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style2.css" />
    <script src='https://code.jquery.com/jquery-3.5.0.min.js'>  </script>
    <title>Campeonato de Judo</title>

</head>

<body>
    <section class="body">
        <div class="form">
            
                
                    <h3>Campeonato de Judo</h3>
                    
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <form action="login.php" method="POST" >
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>

                            <div class="field">
								<p class="message"> Não é registrado? <a href="cadastro.php">Registre-se</a></p>
                            </div>
                            <button type="submit" >Entrar</button>
                        </form>
                    </div>
                
            
        </div>
    </section>
	
		<script>
	$('.message a').click(function(){
	$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
	});
	</script>
</body>

</html>