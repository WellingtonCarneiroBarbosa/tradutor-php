<?php include_once __DIR__ . "/language/translate.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--titulo da pagina-->
    <h1><?php echo $keyword["title"]; ?></h1>
    <!-- subtitulo da pagina--> 
    <h2><?php echo $keyword["subtitle"]; ?></h2>
    <br>
    <a href="?language=pt-br">Portugues</a>
    <a href="?language=en-us">Ingles</a>
    <a href="?language=es-mx">Espanhol</a>
</body>
</html>