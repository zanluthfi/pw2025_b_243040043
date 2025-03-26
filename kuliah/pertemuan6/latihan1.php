<?php
    $array = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: greenyellow;
            text-align: center;
            line-height: 30px;
            float: left;
            margin: 3px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php foreach ($array as $a) : ?>
    <?php foreach ($a as $b) : ?>
        <div class="kotak"><?= $b ?></div>
    <?php endforeach ?>
    <div class="clear"></div>
<?php endforeach ?>

</body>
</html>