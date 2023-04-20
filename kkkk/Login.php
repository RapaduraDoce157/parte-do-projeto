<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="ps.css">
    <link rel="stylesheet" href="/bootstrap/bootstrap.css">
</head>
<body class="bg-dark"> 
    <?php
    $mensagem = "";
    if($_POST)
    {
        include_once('conexao.php');

        $loginCliente = $_POST['txtLogin'];
        $senhaCliente = $_POST['txtSenha'];
        
        $sql = $conn->query(
            "select * from CadastrarCliente where
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
                
                header('Location:sistema.php');
            }
            else
            {
                $mensagem = '<div class="col-sm-12 p-2"><p>Usuário ou senha inválido</p></div>';
            }
        }
        ?>
<div class="container mt-4">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form action="" class="form-control" method="POST">
                    <div class="row">
                        <div class="col-sm-12 p-3">
                            <div class="card imgLogin bg-dark">
                                
                            </div>
                        </div>
                        <div class="col-sm-12 p-2">
                            <input type="text" name="txtLogin" id="txtLogin"placeholder="Informe seu Login" class="form-control" required>
                        </div>
                        <div class="col-sm-12 p-2">
                            <input type="password" name="txtSenha" id="txtSenha" placeholder="Informe seu Login" class="form-control" required>
                        </div>
                        
                        <?=$mensagem?>
                        
                        <div class="col-sm-4 p-2"></div>
                        <div class="col-sm-4 p-2">
                            <button name="btoOK" id="btoOK" class="btn btn-primary form-control" formaction="sistema.php">Entrar</button>
                        </div>
                        <div class="col-sm-4 p-2"></div>
                    </div>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
        
    </div>

</body>
</html>