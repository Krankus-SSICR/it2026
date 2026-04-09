<?php 
$url = $_SERVER['REQUEST_URI'];
//echo $url;
$url = explode("/", $url);
//print_r($url);
$url = end($url);
//echo $url;
$titulek = "";

switch ($url) {
    case 'index.php':
        $titulek = "Hlavní stránka";
        break;

    case '':
        $titulek = "Hlavní stránka";
        break;
    case 'about.php':
        $titulek = "Hlavní stránka";
        break;
    case 'kontakt.php':
        $titulek = "Hlavní stránka";
        break;

    default:
        $titulek = "Cokoliv jiného";
        break;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulek;?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php" class="<?php if ($url == "index.php" || $url == "") {echo "aktivni";}?>">Domů</a></li>
            <li><a href="about.php" class="<?php if ($url == "about.php") {echo "aktivni";}?>">O nás</a></li>
            <li><a href="kontakt.php" class="<?php if ($url == "kontakt.php") {echo "aktivni";}?>">Kontakt</a></li>
        </ul>
    </nav>
    <h2>Kontakt</h2>
</body>
</html>