<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>Login</title>
 
 </head>

<body>
<?php
    $mensagem = "";
    if($_POST)
    {
        include_once('conexao.php');

        $loginCliente = $_POST['txtLogin'];
        $senhaCliente = $_POST['txtSenha'];

        $sql = $conn->query(
            "select * from Cliente where
                login_Cliente = '$loginCliente' and
                senha_Cliente = '$senhaCliente'
            ");

            if($sql->rowCount()==1)
            {
                session_start();
                foreach($sql as $linha)
                {
                    $_SESSION['idCliente'] = $linha[0];
                    $_SESSION['nomeCliente'] = $linha[1];
                    $_SESSION['loginCliente'] = $linha[2];
                }

                header('Location:Login_sistema.php');
            }
            else
            {
                $mensagem = '<div class="col-sm-12 p-2"><p>Usuário ou senha inválido</p></div>';
            }
    }
    ?>
    
<main class="main_content container">
    <div class="container mt-4">
        <div class="row">
            <div class="col-10">
                
                <div class="content">            
                    
                    <div class="box-artigo">
                        
                        <form class="frmLogin" method="post" action="#">
                        
                            <div class="title icon icon-forward-1"> Login</div>
                            
                            <div class="input-container">
                                <input id="txtlogin" class="input" type="text" id="txtLogin" placeholder=""oninput="loginValidacao"/>
                                <div class="legenda-p"></div>
                                <label for="nome" class="label icon icon-user-1"> Nome</label>
                            </div>
                            
                            <div class="input-container">
                                <input id="txtSenha" class="input" type="password"id="txtSenha" placeholder=""/>
                                <div class="legenda-p"></div>
                                <label for="email" class="label icon icon-lock-1"> Senha</label>
                            </div>
                            
                            <?=$mensagem?>


                            <button type="text" class="btn"formaction="Login_sistema.php">Entrar</button>
                            
                        </form>

                    </div>
                
                </div>
            </div>
        </div>
    </div>
</main>

<script src="js/jquery.js"></script>
<script src="js/script.js"></script>

</body>
</html>