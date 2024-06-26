<?php 
// Pengulangan pada array
// for / foreach
$numbers = [3, 2, 15, 20, 11, 77, 89]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementasi Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {clear: both;}
    </style>
</head>
<body>
    <?php for($i = 0;  $i < count($numbers) ; $i++) { ?>
        <div class="kotak"><?= $numbers[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>
    
    <?php foreach($numbers as $number) { ?>
        <div class="kotak"><?= $number; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($numbers as $number) : ?>
        <div class="kotak"><?= $number; ?></div>
    <?php endforeach; ?>

</body>
</html>