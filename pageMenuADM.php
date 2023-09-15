<?php
include("Função.php");
include("conexão.php");
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styleADM.css">
    <title>Tela de Menu</title>
</head>
<body>
    <h3>Welcome back, <!-- Aqui coloca o php com o usuario -->!</h3>
    <div class="login-page">
        <div class="options">
            <h4>Register</h4>
            <button>
                <a href="pageRegisterCharacter.php">Register a character</a>
                <div class="arrow-wrapper">
                    <div class="arrow"></div>
                </div>
            </button>

            <h4>Client Management</h4>
            <button>
                <a href="pageListRegister.php">See the registered clients</a>
                <div class="arrow-wrapper">
                    <div class="arrow"></div>
                </div>
            </button>
        </div>
    </div>
</body>
</html>