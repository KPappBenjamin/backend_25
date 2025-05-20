<?php
use Foo\Bar\Tablet;

require __DIR__ . '/vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

include("data.php");

$megjelenes = "fooldal";
if(!empty($_GET['megjelenes'])){
    $megjelenes = $_GET['megjelenes'];
    if(!in_array($megjelenes, ["tablazat","racs"])){
        $megjelenes = 404;
    }
}

$title = "Tabletek";

if("tablazat" == $megjelenes){
    usort($tablets, fn ($a, $b) => ($a->price <=> $b->price));
}
else if("racs" == $megjelenes){
    usort($tablets, fn ($a, $b) => ($a->storage <=> $b->storage)* -1);
}

if(404 == $megjelenes){
    $title = 404;
    header("HTTP/1.1 404 Not Found");
}

//echo $tablets[3]->getImagePath();

ob_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tablet.css">
</head>
  <body>
    <?php include("menu.php")?>

    <?php
        if("fooldal" == $megjelenes){
            include("fooldal.php");
        }
        else if("tablazat" == $megjelenes){
            include("tablazat.php");
        }
        else if("racs" == $megjelenes){
            include("racs.php");
        }
        else if("404" == $megjelenes){
            include("404.php");
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>

<?php

ob_end_flush();