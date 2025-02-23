<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
        }
        .row {
            display: flex;
        }
        .col {
            display: flex;
            width: 100px;
            height: 100px;
            background-color: salmon;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            font-size: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            for ($i = 10; $i >= 1; $i--) {
                echo "<div class=\"row\">";
                for ($j = 1; $j <= $i; $j++) {
                    echo "<div class=\"col\">$j</div>";
                }
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>