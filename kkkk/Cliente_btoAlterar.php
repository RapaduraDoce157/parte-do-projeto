<?php
include_once('conexao.php');
if($_POST)
{
    $id_Cliente = $_POST['txtID'];    
    $status_Cliente = $_POST['txtStatus'];
    $nome_Cliente = $_POST['txtNome'];
    $cpf_Cliente = $_POST['txtCpf'];
    $email_Cliente = $_POST['txtEmail'];
    $telefone1_Cliente = $_POST['txtTelefone1']; 
    $telefone2_Cliente = $_POST['txtTelefone2'];
    $login_Cliente = $_POST['txtLogin'];
    $senha_Cliente = $_POST['txtSenha'];
    $confirmarSenha_Cliente = $_POST['txtConfirmarSenha'];
    $logradouro_Cliente = $_POST['txtLogradouro']; 
    $numero_Cliente = $_POST['txtNumero'];
    $complemento_Cliente = $_POST['txtComplemento'];
    $bairro_Cliente = $_POST['txtBairro'];
    $cidade_Cliente = $_POST['txtCidade']; 
    $uf_Cliente = $_POST['txtUF']; 
    $cep_Cliente = $_POST['txtCep'];
    $obs_Cliente = $_POST['txtObs'];

    try 
    {
       
        $sql = $conn->prepare('update Cliente set
        $nome_Cliente =:nome_Cliente, 
        $status_Cliente=:status_Cliente,
        $nome_Cliente=:nome_Cliente,
        $cpf_Cliente=:cpf_Cliente,
        $email_Cliente=:email_Cliente,
        $telefone1_Cliente=:telefone1_Cliente,
        $telefone2_Cliente=:telefone2_Cliente,
        $login_Cliente=:login_Cliente,
        $senha_Cliente=:senha_Cliente,
        $confirmarSenha_Cliente=:confirmarSenha_Cliente,
        $logradouro_Cliente=:logradouro_Cliente,
        $numero_Cliente=:numero_Cliente,
        $complemento_Cliente=:complemento_Cliente,
        $bairro_Cliente=:bairro_Cliente,
        $cidade_Cliente=:cidade_Cliente,
        $uf_Cliente=:uf_Cliente,
        $cep_Cliente=:cep_Cliente,
        $obs_Cliente=:obs_Cliente
        where id_Cliente=:id_Cliente'
        );   

        $sql->execute(array(
            'id_Cliente'=>$id_Cliente,
            ':status_Cliente'=>$status_Cliente,
            ':nome_Cliente'=>$nome_Cliente,
            ':cpf_Cliente'=>$cpf_Cliente,
            ':email_Cliente'=>$email_Cliente,
            ':telefone1_Cliente'=>$telefone1_Cliente,
            ':telefone2_Cliente'=>$telefone2_Cliente,
            ':login_Cliente'=>$login_Cliente,
            ':senha_Cliente'=>$senha_Cliente,
            ':confirmarSenha_Cliente'=>$confirmarSenha_Cliente,
            ':logradouro_Cliente'=>$logradouro_Cliente,
            ':numero_Cliente'=>$numero_Cliente,
            ':complemento_Cliente'=>$complemento_Cliente,
            ':bairro_Cliente'=>$bairro_Cliente,
            ':cidade_Cliente'=>$cidade_Cliente,
            ':uf_Cliente'=>$uf_Cliente,
            ':cep_Cliente'=>$cep_Cliente,
            ':obs_Cliente'=>$obs_Cliente
        ));
        if($sql->rowCount()==1)
        {
            echo "<p>Dados alterados com sucesso</p>";
        }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }


}
?>
    