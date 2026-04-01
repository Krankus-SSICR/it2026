<?php 
    $kapr = $_SERVER['REQUEST_URI'];
    
    $kapr_2 = explode("/", $kapr);
    
    $kapr_3 = "";
    $kapr_3 = end($kapr_2);

    switch($kapr_3) {
        case("sauny.php"):
            $titulek = "Wellnes u Buku - Sauny";
            break;
        case("masaze.php"):
            $titulek = "Wellnes u Buku - Masáže";
            break;
        case("koupele.php"):
            $titulek = "Wellnes u Buku - Koupele";
            break;
        case("restaurace.php"):
            $titulek = "Wellnes u Buku - Restaurace";
            break;
        case("rezervace.php"):
            $titulek = "Wellnes u Buku - Rezervace";
            break;
        case("kontakt.php"):
            $titulek = "Wellnes u Buku - Kontakt";
            break;
        case("index.php"):
            $titulek = "Wellnes u Buku";
            break;
        default:
            $titulek = "Wellnes u Buku";
            break;
    }
    
?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulek; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1><a href="index.php">Wellnes U Buku</a></h1>
    <nav>
        <ul>
            <a href="sauny.php" class="<?php if($kapr_3 == "sauny.php") {echo "aktivni";} else {echo "";}?>">
                <li>Sauny</li>
            </a>
            <a href="masaze.php" class="<?php if($kapr_3 == "masaze.php") {echo "aktivni";} else {echo "";}?>">
                <li>Masáže</li>
            </a>
            <a href="koupele.php" class="<?php if($kapr_3 == "koupele.php") {echo "aktivni";} else {echo "";}?>">
                <li>Koupele</li>
            </a>
            <a href="restaurace.php" class="<?php if($kapr_3 == "restaurace.php") {echo "aktivni";} else {echo "";}?>">
                <li>Restaurace</li>
            </a>
            <a href="rezervace.php"class="<?php if($kapr_3 == "rezervace.php") {echo "aktivni";} else {echo "";}?>">
                <li>Rezervace</li>
            </a>
            <a href="kontakt.php"class="<?php if($kapr_3 == "kontakt.php") {echo "aktivni";} else {echo "";}?>">
                <li>Kontakt</li>
            </a>
        </ul>
    </nav>