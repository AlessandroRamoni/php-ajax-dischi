<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-ajax-dischi</title>
</head>
<body>

<?php
include __DIR__  . '/database.php';
?>


<?php
foreach($dischi as $copertina){
    ?>
    
    <div id="contenitore">
        <div id="copertina">
            <div>
                <?= '<img src="' . $copertina["poster"] . '">'?>
            </div>
            
            <?= "<h2>" . $copertina["title"] . "</h2>"?>
            <?= "<h4>" . $copertina["author"] . "</h4>"?>
            <?= "<p>" . $copertina["genre"] . "</p>"?>
            <?= "<p>" . $copertina["year"] . "</p>"?>
        </div>
    </div>


    <?php
    // include __DIR__ . '/card.album.php';
}


?>


</body>
</html>