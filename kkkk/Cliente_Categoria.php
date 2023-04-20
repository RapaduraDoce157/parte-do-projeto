
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <DIV align="center">
        
    <title>Document</title>
</head>
<body>
<form action="" class="form-control" method="POST">
    <div class="row mt-3">
        <div class="col-sm-12  ">

            <h1>Categoria</h1>
        </div>
    </div>
    <hr>
   
    <div class="row mt-4">
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Cliente">
        </div>
        <div class="col-sm-5"></div>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome completo">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-2">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data Cadastro">
        </div>
        <div class="col-sm-8"></div>
        <div class="col-sm-2">
            <select name="txtStatus" id="txtStatus" class="form-control">
                <option value="" selected> Selecione o status </option>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Desativado</option>
            </select>
        </div>
    </div>
    <div class="row mt-6">
        <div class="col-sm-12">
        <h4>Descrição</h4>
            <p></p><textarea name="txtObs" id="txtDescriçao" class="form-control" rows="5" placeholder="Insira a observação do cadastro (campo não obrigatório)"></textarea></p>
        </div>
        <div class="col-sm-12">
            <h4>observação</h4>
            <textarea name="txtObs" id="txtObs" class="form-control" rows="5" placeholder="Insira a observação do cadastro (campo não obrigatório)"></textarea>
        </div>
    </div>
    <div class="row mt-4 mb-4">
        <div class="col-sm-12">
            <button name="btoPesquisa" class="btn btn-primary">Pesquisar</button>
            <button name="btoCadastrar" class="btn btn-success" formaction="Cliente_Cadastrar.php">Cadastrar</button>
            <button name="btoAlterar" class="btn btn-warning" formaction="Cliente_Alterar.php">Alterar</button>
            <a name="btoLimpar" class="btn btn-dark" href="index.php">Limpar</a>
            <button name="btoExcluir" class="btn btn-danger" formaction="Cliente_Excluir.php">Excluir</button>
        </div>
        </div>
    </div>
</form>

</body>
</html>