<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles&display=swap" rel="stylesheet">
    <title>php-ajax-dischi</title>
</head>
<body>

<style>

    body {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin: 0 auto;
        max-width: 1000px;
        background-color:  #1e2d3b;
        font-family: 'Fuzzy Bubbles', cursive;
    }

    #contenitore {
        width: calc(100% / 5 - 10px);
        padding-top: 50px;
    }

    #copertina {
        text-align: center;
        background-color:  #2e3a46;
        color: #ffffff;
        display: flex;
        flex-direction: column;
        height: 450px;
        line-height: 0.8;
    }

    #copertina div {
        max-width: 100%;
    }

    #copertina div img {
        width: 100%;
    }

   

</style>


<?php

  
include __DIR__  . '/database.php';



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

}


?>


</body>
</html>