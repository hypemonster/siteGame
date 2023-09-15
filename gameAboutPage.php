<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/cardStyle.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navBar">
            <a href="mainPage.php">Home</a>
            <!-- Aqui só será direciona para o download caso o usuário estiver cadastrado -->
            <a href="pageLoginUser.php">Download</a>
            <a href="gameAboutPage.php">Sobre</a>      
        </nav>
    </header>

    <main>
        <h1>ABOUT THE GAME</h1>
        <!-- Card dos personagens (utilizar o php e o foreach para mostrar) -->
        <!-- os personagens conforme forem sendo adicionados -->
        <h3>Characters</h3>
        <div class="wrap">
            <div class="box">
                <div class="box-top">
                    <center>
                        <img class="box-image" src="IMG-SVG/Garota.jfif" alt="Girl Eating Pizza">
                    </center>
                    <div class="title-flex">
                        <h3 class="box-name"> Nome: </h3>
                    </div>
                    <p class="description"> Descrição: </p>
                </div>
            </div>
        </div>
        <br>
        <div class="wrap">
            <div class="box">
                <div class="box-top">
                    <center>
                        <img class="box-image" src="IMG-SVG/Semfundo.png" alt="Girl Eating Pizza">
                    </center>
                    <div class="title-flex">
                        <h3 class="box-name"> Nome: </h3>
                    </div>
                    <p class="description"> Descrição: </p>
                </div>
            </div>
        </div>
        <br>
        <div class="wrap">
            <div class="box">
                <div class="box-top">
                    <center>
                        <img class="box-image" src="IMG-SVG/Monstro1.jfif" alt="Girl Eating Pizza">
                    </center>
                    <div class="title-flex">
                        <h3 class="box-name"> Nome: </h3>
                    </div>
                    <p class="description"> Descrição: </p>
                </div>
            </div>
        </div>
        <br>
        <div class="wrap">
            <div class="box">
                <div class="box-top">
                    <center>
                        <img class="box-image" src="IMG-SVG/Monstro2.jfif" alt="Girl Eating Pizza">
                    </center>
                    <div class="title-flex">
                        <h3 class="box-name"> Nome: </h3>
                    </div>
                    <p class="description"> Descrição: </p>
                </div>
            </div>
        </div>

        <div class="history">
            <h3>História:</h3>
            <p>Larói é um centro espacial intergaláctico desenvolvido pela civilização humana há 23000 anos, utilizada para testes entre dimensões paradoxais.<br>
            Nomu, uma estudante responsável pela administração da dimensão F-89, em uma de suas visitas averiguatórias ao portal que estabelece conexão ao centro espacial e a tal dimensão, acaba por encontrar um intruso: um robô lyro; este que é muito conhecido por fazer a limpeza dos dormitórios da base. O que ele estava fazendo em um centro de administração de portais paradoxais? Nomu também gostaria de saber.
Ao terem uma pequena interação, o robô lyro se assusta e entra acidentalmente no portal, levando-o para dentro da dimensão F-89.<br>
Esse mundo é composto por diversas ameaças vivas, e, portanto, ele precisa se livrar delas para escapar pelo portal do outro lado do mapa. Será que ele dará conta?</p>
        </div>
    </main>
</body>
</html>