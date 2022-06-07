<?php
include_once __DIR__ . "/afficher-menu.php";
include_once __DIR__ . "/footer.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generateur de menu</title>
</head>

<body>

    <h1>Liste de lien</h1>

    <?php afficher_menu(["Google" => "http://google.fr", "Yahoo" => "http://yahoo.fr"]); ?>



</body>

<footer>

    <?php afficher_footer("Moncieu", "Adrien", "email@gmail.com"); ?>

</footer>

</html>