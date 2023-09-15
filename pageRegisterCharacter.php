<?php
include("conexão.php");

if($_SERVER["REQUEST_METHOD"] == $_POST){

    $imagemjpg = $_FILES['aicon'];
    $nome = $_POST['txtnome'];
    $hist = $_POST['desc'];

    $imgblob = file_get_contents($imagemjpg);

    $query = "INSERT INTO personagem(nome_personagem, historia, img) VALUES('$nome', '$hist', '$imgblob')";
    
    $cad_personagem = mysqli_query($conn,$query);

    if($cad_personagem){
        echo "Personagem Cadastrado";
    }else {
        echo "Não foi possível cadastrar";
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
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>Character info</h1>
    <div class="login-page">
        <div class="formRegister">
            <form method="post" class="login-form" enctype="multipart/form-data">
                <p>Imagem:</p>  <input type="file" name="aicon"/>
                <p>Nome:</p>   <input type="text" name="txtnome" placeholder="Digite Nome"><br>
                <p>Descrição:</p>   <input type="text" name="desc" placeholder="Digite a descrição"><br>
                    
                <button type="submit" name="CadImg" value="Enviar">
                    Send
                    <div class="arrow-wrapper">
                        <div class="arrow"></div>
                    </div>
                </button>
            </form>
        </div>
    </div>
</body>
</html>