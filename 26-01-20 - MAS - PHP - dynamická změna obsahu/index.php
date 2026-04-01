<?php include "zmena.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TWS<?php echo $titulek;?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php" class="<?php if ($url == "index.php" || $url == "") { echo "aktivni";} else { echo "";}?>">Domů</a></li>
            <li><a href="html.php" class="<?php if ($url == "html.php") { echo "aktivni";} else { echo "";}?>">HTML</a></li>
            <li><a href="css.php" class="<?php if ($url == "css.php") { echo "aktivni";} else { echo "";}?>">CSS</a></li>
            <li><a href="php.php" class="<?php if ($url == "php.php") { echo "aktivni";} else { echo "";}?>">PHP</a></li>
        </ul>
    </nav>
    <h1>Tvorba webových stránek SČMSD Humpolec</h1>
</body>
</html>