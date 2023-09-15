<?php
include("conexão.php");
include("Função.php");

$id_user=$_GET['id_user'];
$cliente=busca($conn, $id_user);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterando</title>
</head>
<body>
    <h1>Alterar Usuário</h1>
    <form method="POST" action="verificaAlt.php">
Id:     <?php echo $cliente['id_user'] ?><br>
Nome:   <input type="text" name="nome" value="<?php echo $cliente['nome'] ?>"><br>
Email:  <input type="text" name="email" value="<?php echo $cliente['email'] ?>"><br>
Senha:  <input type="pass" name="senha" value="<?php echo $cliente['senha'] ?>"><br>
        <input type="submit" value="alterar" name="btn"><br>
    </form>
    
</body>
</html>