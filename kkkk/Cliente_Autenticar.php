<?php
session_start();

if($_SESSION &&($_SESSION['idCliente'])&& isset($_SESSION['nomeCliente'])&& isset($_SESSION['loginCliente']))

{
    $idCliente=$_SESSION['idCliente'];
    $nomeCliente=$_SESSION['nomeCliente'];
    $loginCliente=$_SESSION['loginCliente'];
}
else{
    header('location:index.php');
}
?>