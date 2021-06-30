<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Astahrr-Nfl-Eagles.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Mercado da Tecnologia</title>
</head>
<body>
    <header>
        <img src="pexels-junior-teixeira-2047905.jpg" id="img" alt=""><h1>Mercado da Tecnologia</h1>
    </header>

       <?php @$pg = $_GET["pg"]; ?> 
    
    <section>
        <nav>
            <?php include "menu.html" ?>
        </nav>

        <article>
            <?php include "conteudo.php" ?>
        </article>
    </section>

    <footer>
        <p>&copy; Mercadod@Tecnologia - all right copyright <?= date('Y'); ?></p>
    </footer>

</body>
</html>