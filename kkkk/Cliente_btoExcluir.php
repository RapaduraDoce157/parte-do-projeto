<?php
include_once('conexao.php');

    if($_POST)
    {
            $id_Cliente = $_POST['txtID'];
        
        try 
        {
        
            $sql = $conn->prepare (
                'DELETE FROM Cliente WHERE id_Cliente = :id_Cliente');
            
            $sql->execute(array(

                ':id_Cliente'=>$id_Cliente

            ));
            if($sql->rowCount()==1)
            {
                echo"<p>Dados excluidos com Sucesso</p>";
            }
            
        } 
        catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

?>