<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Download</title>
</head>
<body>
    <header>
        <nav class="navBar">
            <a href="mainPage.php">Home</a>
            <!-- Aqui só será direciona para o download caso o usuário estiver cadastrado -->
            <a href="downloadPage.php">Download</a>
            <a href="gameAboutPage.php">Sobre</a>      
        </nav>
    </header>
    <main>
        <h1>DOWNLOAD THE GAME</h1>
        <div class="svgIMG">
            <div class="desktop">
                <img src="IMG-SVG/desktop-computer-svgrepo-com.svg" alt="Cellphone">
                <p>Download HERE the<br>
                desktop version</p>
                <button type="submit">
                    DOWNLOAD
                </button>
            </div>

            <div class="cellphone">
                <img src="IMG-SVG/cell-phone-svgrepo-com.svg" alt="Desktop">
                <p>Download HERE the<br>
                cellphone version</p>
                <button type="submit">
                    DOWNLOAD
                </button>
            </div>
        </div>
    </main>
</body>
</html>