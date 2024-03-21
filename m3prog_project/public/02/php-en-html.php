<?php
$paginaTitel = "Mijn Geweldige Pagina";
$afbeeldingURL = "m3prog_project/public/02/img/2021-11-11 (7).png";
$afbeeldingTitel = "Mijn Poster";
$auteur = "34164";


?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $paginaTitel; ?></title>
</head>
<body>
<img src="<?php echo $afbeeldingURL; ?>" alt="<?php echo $afbeeldingTitel; ?>">
    <p>Afbeelding titel: <?php echo $afbeeldingTitel; ?></p>
    <p>Auteur: <?php echo $auteur; ?></p>
</body>
</html>