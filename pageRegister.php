<?php
include("conexão.php");
if($_POST){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $pass = $_POST['senha'];
    $passconf = $_POST['confirmarSenha'];
    if($pass == $passconf){
        $query = "INSERT INTO usuario(nome, email, senha ) VALUES('$nome', '$email', '$pass')";
        $caduser = mysqli_query($conn,$query);
        header("Location: downloadPage.php");
    } else {
        echo '<script> alert ("Senha Diferentes!!")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Register</title>
</head>
<body>
    <header>
        <nav class="navBar">
            <a href="mainPage.php">Home</a>
            <!-- Aqui só será direciona para o download caso o usuário estiver cadastrado -->
            <a href="pageRegister.php">Download</a>
            <a href="gameAboutPage.php">Sobre</a>      
        </nav>
    </header>

    <main>
        <h1>DO YOUR REGISTER</h1>
        <div class="divForm">
            <form class="form" method="post">
                <div class="formRegister">
                    <p>Name:</p>   <input type="text" name="nome">
                    <p>E-Mail:</p> <input type="text" name="email">
                    <p>Senha:</p>  <input type="password" name="senha">
                    <p>Confirme sua senha:</p>  <input type="password" name="confirmarSenha"><br>
                </div>

                <center>
                    <button type="submit" href="downloadPage.php">
                        ENVIAR
                    </button>
                </center>
            </form>
        </div>
    </main>
</body>
</html>