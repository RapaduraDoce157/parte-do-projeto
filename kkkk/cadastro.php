
<script src="jquery-3.6.4.js"></script>
<script src="Script.js"></script>


<link rel="stylesheet" href="../bootstrap/bootstrap.css">


<form action="" class="form-control" method="POST" onsubmit="return false">
    <div class="row">
        <div class="col-sm-12">
            <h1> Tela de Cadastro</h1>
        </div>
    </div>
    <hr>
    <div class="row"><!-- ID / STATUS / datacadastro -->
        <div class="col-sm-2">
            <input type="number" class="form-control" name="txtID" id="txtID" placeholder="ID Cliente">
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2">
            <select name="txtStatus" id="txtStatus" class="form-control">
                <option value="" selected> ->Selecione<-</option>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro">
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="txtSenha" id="txtSenha" placeholder="Digite a Senha">
        </div>
    </div>
   
    <div class="row mt-1"><!-- NOME  / CHPJ  / RAMO -->
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="informe o Nome completo" >
        </div>
        <div class="col-sm-4">
            <input type="txt" class="form-control" name="txtCPF" id="txtCPF" placeholder="Informe o CPF">
        </div>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Informe o Login">            
        </div>
    </div>

    <div class="row mt-2"><!--  email / telefone1 / telefone2 -->
        <div class="col-sm-2">
            <input type="text" class="form-control" name="txtCEP" id="txtCEP" placeholder="Insira o CEP">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtLogradouro" id="txtLogradouro" placeholder="Insira o Logradouro">
        </div>
        <div class="col-sm-3">
            <input type="number" class="form-control" name="txtNumero" id="txtNumero" placeholder="Número da Residência">
        </div>
        
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtConfirmarSenha" id="txtConfirmarSenha" placeholder="Confirme a senha">
        </div>
    </div>

    <div class="row mt-1"><!--LOGIN , SENHA , CONFIRMAR SENHA  -->
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtBairro" id="txtBairro" placeholder="Insira o Bairro">
        </div>
        <div class="col-sm-4">
            <input type="Text" class="form-control" name="txtCidade" id="txtCidade" placeholder="Informe a Cidade">
        </div>
        <div class="col-sm-4">
            <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Insira o Email">
        </div>
    </div>
    
    <div class="row mt-1"><!--LOGRADOURO / NUMERO / COMPLEMENTO-->
        <div class="col-sm-2">
            <input type="text" class="form-control" name="txtUF" id="txtUF" placeholder=" Informe o UF">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtComplemento" id="txtComplemento" placeholder="Informe o Complemento(Opcional)">
        </div>
        <div class="col-sm-3">
            <input type="tel" class="form-control" name="txtTelefone1" id="txtTelefone1" placeholder="Informe o Telefone">
        </div>
        <div class="col-sm-3">
            <input type="tel" class="form-control" name="txtTelefone2" id="txtTelefone2" placeholder=" Informe o Telefone2">
        </div>
    </div>
    <div class="row mt-1"><!-- Observação -->
        <div class="col-sm-11">
            <textarea name="txtObs" id="txtObs" class="form-control" rows="3" placeholder="Insira a observação do cadastro (campo não obrigatório)"></textarea>
        </div>
    </div>

    <div class="row mt-4 mb-4"><!--botoes-->
        <div class="col-sm-12">
                   
            <button name="btoCadastrar" class="btn btn-primary" onclick=" CadastrarCliente()" > Cadastrar </button> 
            <button name="btoSair" class="btn btn-light">Sair</button>
        </div>

        <div class="col-sm-12" id="resultado"></div>

    </div>

</form>