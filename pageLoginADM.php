<?php
include("Função.php");
include("conexão.php");

if($_POST){
    $login=$_POST['txtu'];
    $senha=$_POST['txts'];
    if (efetuarlogin($conn, $login, $senha)){
        session_start();
        $_SESSION['nome']=$login;
        $_SESSION['log']='ativo';
        header("Location: pageMenuADM.php");
            die();
    } else {
        echo("Usuário não encontrado");
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styleADM.css">
    <title>Login</title>
</head>
<body>
    <div class="main">
        <div class="login-page">
            <div class="form">
                <h3>Welcome! Fill the fields to enter!</h3>
                    <form method="post" class="login-form">
                    <p>Usuário:</p> <input type="text" name="txtu" placeholder="Digite login"><br><br>
                    <p>Senha:</p> <input type="text" name="txts" placeholder="Digite senha"><br><br>

                    <button>
                        Sign Up
                        <div class="arrow-wrapper">
                            <div class="arrow"></div>
                        </div>
                    </button>
                </form>
            </div>
        </div>

        <div class="principalImg">
            <div class="tes"></div>
        </div>
    </div>
</body>
</html>