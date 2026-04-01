<?php 
$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
$url = end($url);

$titulek = "";

switch ($url) {
    case "index.php":
        $titulek = " - Domů";
        break;
    case "html.php":
        $titulek = " - HTML";
        break;
    case "css.php":
        $titulek = " - CSS";
        break;
    case "php.php":
        $titulek = " - PHP";
        break;
    default:
        $titulek = "";
}
?>