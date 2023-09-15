<?php
function alterar($conn,$nome,$email,$pass,$id_user){
    $sql = "UPDATE usuario SET
            id_user='$id_user',
            nome='$nome',
            email='$email',
            senha= '$pass'";
    return mysqli_query($conn,$sql);
}
function excluir($conn,$id_user){
    $sql = "delete from usuario where id_user= $id_user";
    return mysqli_query($conn,$sql);
}
function listarClientes($conn){
    $clientes = array();
    $resultado = mysqli_query($conn, "SELECT * FROM usuario");
    while ($cliente = mysqli_fetch_assoc($resultado)){
        array_push($clientes, $cliente);
    }
    return $clientes;
}
function busca($conn, $id_user){
    $resultado = mysqli_query($conn, "SELECT * FROM usuario WHERE id_user=$id_user");
    return mysqli_fetch_assoc($resultado);
}
function efetuarlogin($conn,$login,$senha){
    $sql = "SELECT * FROM admin_game WHERE login='{$login}'"." and senha='{$senha}'";
    $resultado=mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($resultado);
}
function efetuarloginUser($conn,$nome,$senha){
    $sql = "SELECT * FROM usuario WHERE nome='{$nome}'"." and senha='{$senha}'";
    $resultado=mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($resultado);
}
?>