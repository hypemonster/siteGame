<?php
include("Função.php");
include("conexão.php");

$id = $_GET['id_user'];
if(excluir($conn, $id)){
    header("Location: pageListRegister.php");
     die();
}
?>