<?php
     ini_set('display_errors', 1);
     ini_set('display_startup_errors', 1);
     error_reporting(E_ALL);

     require './db/Db.php';

     Db::connect('localhost','rocnikovy','root','');

     $products = Db::queryAll("SELECT * FROM produkt;");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="books.css">
    <title>Document</title>
</head>
<body>
    <div class="knihy">
        <?php foreach ($products as $item) : ?>
            <div class="kniha">
                <h4><?= $item['nazov'] ?></h4>
                <img id="imgLeft" src="<?= $item['img'] ?>" alt="">
                <p> <?= $item['autor'] ?> </p>
                <p> <?= $item['cena'] ?> </p>
                <p> <?= $item['description'] ?> </p>
                <p> <?= $item['rating'] ?> </p>
            </div>
        <?php endforeach; ?>
    </div>



</body>
</html>