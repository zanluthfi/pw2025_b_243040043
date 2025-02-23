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
            background-color: white;
            justify-content: center;
            align-items: center;
            font-size: 50px;
            border: 1px solid black;
        }
        .black {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            echo "<div class=\"row\">";
            for ($i = 1; $i <= 25; $i++) {
                if ($i % 2 == 1) {
                    echo "<div class=\"col black\"></div>";
                } else {
                    echo "<div class=\"col\"></div>";
                }
                if ($i == 25) {
                    echo "</div>";
                } else if ($i % 5 == 0) {
                    echo "</div>";
                    echo "<div class=\"row\">";
                }
            }
        ?>
    </div>
</body>
</html>