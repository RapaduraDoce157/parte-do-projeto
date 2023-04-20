<?php

// sleep(3);

////print_r($_POST);
//return;
include_once('conexao.php');

if($_POST)
{
    $status_Cliente = $_POST['txtStatus'];
    $nome_Cliente = $_POST['txtNome'];
    $cpf_Cliente = $_POST['txtCPF'];
    $login_Cliente = $_POST['txtLogin'];
    $senha_Cliente = $_POST['txtSenha'];
    $cep_Cliente = $_POST['txtCEP'];
    $logradouro_Cliente = $_POST['txtLogradouro'];
    $numero_Cliente = $_POST['txtNumero'];
    $bairro_Cliente = $_POST['txtBairro'];
    $cidade_Cliente = $_POST['txtCidade'];
    $email_Cliente = $_POST['txtEmail'];
    $uf_Cliente = $_POST['txtUF'];
    $complemento_Cliente= $_POST['txtComplemento'];
    $telefone1_Cliente = $_POST['txtTelefone1'];
    $telefone2_Cliente = $_POST['txtTelefone2'];
    $obs_Cliente = $_POST['txtOBS'];
        
    try {
            $sql = $conn->prepare(
                "insert into CadastroCliente
                (
                status_Cliente,
                nome_Cliente,
                cpf_Cliente,
                login_Cliente,
                senha_Cliente,
                cep_Cliente,
                logradouro_Cliente,
                numero_Cliente,
                bairro_Cliente,
                cidade_Cliente,
                email_Cliente,
                uf_Cliente,
                complemento_Cliente,
                telefone1_Cliente,
                telefone2_Cliente,
                obs_Cliente
                )

                values
                ( 
                :status_Cliente,
                :nome_Cliente,
                :cpf_Cliente,
                :login_Cliente,
                :senha_Cliente,
                :cep_Cliente,
                :logradouro_Cliente,
                :numero_Cliente,
                :bairro_Cliente,
                :cidade_Cliente,
                :email_Cliente,
                :uf_Cliente,
                :complemento_Cliente,
                :telefone1_Cliente,
                :telefone2_Cliente,
                :obs_Cliente)"
            );

            $sql->execute(array(
                ':status_Cliente'=>$status_Cliente,
                ':nome_Cliente'=> $nome_Cliente,
                ':cpf_Cliente'=> $cpf_Cliente,
                ':login_Cliente'=>$login_Cliente,
                ':senha_Cliente'=>$senha_Cliente,
                ':cep_Cliente'=>$cep_Cliente,
                ':logradouro_Cliente'=>$logradouro_Cliente,
                ':numero_Cliente'=> $numero_Cliente,
                ':bairro_Cliente'=>$bairro_Cliente,
                ':cidade_Cliente'=>$cidade_Cliente,
                ':email_Cliente'=>$email_Cliente,
                ':uf_Cliente'=>$uf_Cliente,
                ':complemento_Cliente'=>$complemento_Cliente,
                ':telefone1_Cliente'=> $telefone1_Cliente,
                ':telefone2_Cliente'=>$telefone2_Cliente,
                ':obs_Cliente'=>$obs_Cliente
            ));

            if($sql->rowCount() > 0)
            {
                echo "<p>Dados cadastrados com sucesso</p>";
                echo "<p>Id Gerado: ".$conn->lastInsertId()."</p>";
                echo '<a href="Sistema.php?Tela=Usuario">Voltar</a>';
            }
        
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }   
    else
    {
        //header('Location:index.php');
    }

    ?>

