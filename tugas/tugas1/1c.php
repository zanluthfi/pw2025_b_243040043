<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1c</title>
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
            background-color: lightblue;
            justify-content: center;
            align-items: center;
            font-size: 50px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">1</div>
        </div>
        <div class="row">
            <div class="col">2</div>
            <div class="col">2</div>
        </div>
        <div class="row">
            <div class="col">3</div>
            <div class="col">3</div>
            <div class="col">3</div>
        </div>
    </div>
</body>
</html>