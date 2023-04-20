<?php
include_once('conexao.php');


$id_Cliente="";
$status_Cliente="";
$data_Cliente="";
$nome_Cliente="";
$cnpj_Cliente="";
$email_Cliente="";
$telefone1_Cliente="";
$telefone2_Cliente="";
$login_Cliente="";
$senha_Cliente="";
$confirmarSenha_Cliente="";
$logradouro_Cliente="";
$numero_Cliente="";
$complemento_Cliente="";
$bairro_Cliente="";
$cidade_Cliente=""; 
$uf_Cliente="";
$cep_Cliente="";
$obs_Cliente="";

if($_POST)
{
    $id_Cliente =$_POST['txtID'];
    try
    {   
        $teste = 'select * from Cliente where id_Cliente='.$id_Cliente;
        $sql = $conn->query($teste);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $id_Cliente=$linha[0];
                $status_Cliente=$linha[1];
                $data_Cliente=$linha[2];
                $nome_Cliente=$linha[3];
                $cnpj_Cliente=$linha[4];
                $email_Cliente=$linha[5];
                $telefone1_Cliente=$linha[6];
                $telefone2_Cliente=$linha[7];
                $login_Cliente=$linha[8];
                $senha_Cliente=$linha[9];
                $confirmarSenha_Cliente=$linha[10];
                $logradouro_Cliente=$linha[11];
                $numero_Cliente=$linha[12];
                $complemento_Cliente=$linha[13];
                $bairro_Cliente=$linha[14];
                $cidade_Cliente=$linha[15];
                $uf_Cliente=$linha[16];
                $cep_Cliente=$linha[17];
                $obs_Cliente=$linha[18];
            }
            // echo"
            // <p>id_Cliente: <span id='idGerado'>$id_Cliente</span></p>
            // <p>nome_Cliente: <span id='PesquisaNome'>$nome_Cliente</span></p>
            // <p>login_Cliente: <span id='PesquisaLogin'>$login_Cliente</span></p>
            // <p>senha_Cliente: <span id='PesquisaSenha'>$senha_Cliente</span></p>
            // <p>confirmarSenha_Cliente: <span id='PesquisaConfirmarSenha'>$confirmarSenha_Cliente</span></p>
            // <p>email_Cliente: <span id='PesquisaEmail'>$email_Cliente</span></p>
            // <p>dataNasc_Cliente: <span id='PesquisaDataNasc'>$dataNasc_Cliente</span></p>
            // <p>cpf_Cliente: <span id='PesquisaCpf'>$cpf_Cliente</span></p>
            // <p>genero_Cliente: <span id='PesquisaGenero'>$genero_Cliente</span></p>
            // <p>telefone1_Cliente: <span id='PesquisaTelefone1'>$telefone1_Cliente</span></p>
            // <p>telefone2_Cliente: <span id='PesquisaTelefone2'>$telefone2_Cliente</span></p>
            // <p>logradouro_Cliente: <span id='PesquisaLogradouro'>$logradouro_Cliente</span></p>
            // <p>cidade_Cliente: <span id='PesquisaCidade'>$cidade_Cliente</span></p>
            // <p>uf_Cliente: <span id='PesquisaUF'>$uf_Cliente</span></p>
            // <p>cep_Cliente: <span id='PesquisaCep'>$cep_Cliente</span></p>
            // <p>cadastro_Cliente: <span id='PesquisaCadastro'>$cadastro_Cliente</span></p>
            // <p>status_Cliente: <span id='PesquisaStatus'>$status_Cliente</span></p>
            // <p>obs_Cliente: <span id='PesquisaObs'>$$obs_Cliente</span></p>
            
            // ";
        } 
        else
        {
                echo "<p>Erro, dados não encontrado</p>";
        }

    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }

}

?>