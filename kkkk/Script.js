/////////////////Cliente///////////


function CadastrarCliente(){

    //alert("teste");

 
    let status_Cliente = $('#txtStatus').val();
    let nome_Cliente = $('#txtNome').val();
    let cpf_Cliente = $('#txtCPF').val();
    let email_Cliente = $('#txtEmail').val();
    let telefone1_Cliente = $('#txtTelefone1').val();
    let telefone2_Cliente = $('#txtTelefone2').val();
    let login_Cliente = $('#txtLogin').val();
    let senha_Cliente = $('#txtSenha').val();
    let confirmarSenha_Cliente = $('#txtConfirmarSenha').val();
    let logradouro_Cliente = $('#txtLogradouro').val();
    let numero_Cliente = $('#txtNumero').val();
    let complemento_Cliente = $('#txtComplemento').val();
    let bairro_Cliente = $('#txtBairro').val();
    let cidade_Cliente = $('#txtCidade').val();
    let uf_Cliente = $('#txtUF').val();
    let cep_Cliente = $('#txtCEP').val();
    let obs_Cliente = $('#txtObs').val();



    let action = 'Cliente_btoCadastrar.php';



    $.ajax({
        url: action,
        type: 'post',
        data: {

         txtStatus: status_Cliente,
         txtNome: nome_Cliente,
         txtCPF: cpf_Cliente,
         txtEmail: email_Cliente,
         txtTelefone1: telefone1_Cliente,
         txtTelefone2: telefone2_Cliente,
         txtLogin: login_Cliente,
         txtSenha: senha_Cliente,
         txtConfirmarSenha: confirmarSenha_Cliente,
         txtLogradouro: logradouro_Cliente,
         txtNumero: numero_Cliente,
         txtComplemento: complemento_Cliente,
         txtBairro: bairro_Cliente,
         txtCidade: cidade_Cliente,
         txtUF: uf_Cliente,
         txtCEP: cep_Cliente,
         txtOBS: obs_Cliente
        },
          beforsend: function () {
            $("#Resultado").html("ENVIANDO...");
        },
        success: function (data, status, xhr) {
            $("#resultado").empty().html(data);
            //$("#txtID").val($(#idGerado).text());
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty('Error ' + errorMessage);
        }

    })
}

/////////////////Cliente///////////
