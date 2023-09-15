<?php
include("conexão.php");
include("Função.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$pass = $_POST['senha'];

if (alterar($conn,$nome,$email,$pass,$id_user)){
    echo "Cliente Alterado com sucesso!!";
    header("location: pageListRegister.php");
        die();
} else {
    $msg = mysqli_error($conn);
    echo $msg;
}
?>