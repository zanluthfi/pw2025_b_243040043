<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6a</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: lightblue;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            border: 1px solid black;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <label for="input">Masukkan Angka : </label>
        <input type="number" name="angka" id="input" min=0>
        <button type="submit" name="submit">Mulai!</button>
    </form>

    <?php
    if (isset($_POST['angka'])) {
        for ($i = $_POST['angka']; $i >= 1; $i--) {
            for ($j = $i; $j >= 1; $j--) {
                echo "<div class=\"kotak\">$i</div>";
            }
            echo "<div class=\"clear\"></div>";
        }
    } else {
        echo "angka belum dimasukkan";
    }
    ?>
</body>

</html>