<?php

$parfum = [
    [
        "name" => "Chanel No. 5",
        "type" => "Floral, Aldehydic",
        "topNotes" => "Neroli, Ylang-Ylang, Bergamot",
        "middleNotes" => "Jasmine, Rose, Lily of the Valley",
        "baseNotes" => "Sandalwood, Vanilla, Amber, Patchouli"
    ],
    [
        "name" => "Dior Sauvage",
        "type" => "Aromatic Fougere",
        "topNotes" => "Calabrian Bergamot, Pepper",
        "middleNotes" => "Sichuan Pepper, Lavender, Pink Pepper",
        "baseNotes" => "Ambroxan, Cedar, Vetiver"
    ],
    [
        "name" => "Tom Ford Black Orchid",
        "type" => "Oriental Floral",
        "topNotes" => "Truffle, Ylang-Ylang, Bergamot",
        "middleNotes" => "Orchid, Spices, Lotus Wood",
        "baseNotes" => "Vanilla, Amber, Patchouli, Sandalwood"
    ],
    [
        "name" => "Creed Aventus",
        "type" => "Fruity Chypre",
        "topNotes" => "Pineapple, Bergamot, Black Currant, Apple",
        "middleNotes" => "Birch, Patchouli, Jasmine, Rose",
        "baseNotes" => "Musk, Oakmoss, Ambergris, Vanilla"
    ],
    [
        "name" => "Yves Saint Laurent Black Opium",
        "type" => "Oriental Vanilla",
        "topNotes" => "Pink Pepper, Orange Blossom",
        "middleNotes" => "Coffee, Jasmine, Bitter Almond",
        "baseNotes" => "Vanilla, Patchouli, Cedarwood, Cashmere Wood"
    ],
    [
        "name" => "Viktor & Rolf Flowerbomb",
        "type" => "Floral",
        "topNotes" => "Bergamot, Green Tea, Freesia",
        "middleNotes" => "Jasmine, Orange Blossom, Orchid",
        "baseNotes" => "Patchouli, Vanilla, Musk"
    ],
    [
        "name" => "Baccarat Rouge 540",
        "type" => "Amber Woody Floral",
        "topNotes" => "Saffron, Jasmine",
        "middleNotes" => "Amberwood, Ambergris",
        "baseNotes" => "Fir Resin, Cedarwood"
    ],
    [
        "name" => "Giorgio Armani Si",
        "type" => "Chypre Fruity",
        "topNotes" => "Blackcurrant, Green Mandarin, Nectarine",
        "middleNotes" => "Rose, Freesia, May Blossom",
        "baseNotes" => "Patchouli, Vanilla, Musk, Woody Notes"
    ],
    [
        "name" => "Le Labo Santal 33",
        "type" => "Woody Spicy",
        "topNotes" => "Cardamom, Iris, Violet",
        "middleNotes" => "Sandalwood, Papyrus, Cedarwood",
        "baseNotes" => "Leather, Amber, Musk"
    ],
    [
        "name" => "Jo Malone London Lime Basil & Mandarin",
        "type" => "Citrus Aromatic",
        "topNotes" => "Lime, Mandarin, Basil",
        "middleNotes" => "Thyme, Pepper",
        "baseNotes" => "Amberwood, Patchouli"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5a</title>
</head>
<body>
    <h1>Perfumes</h1>
    <?php foreach ($parfum as $a) : ?>
        <ul>
            <img src="img/<?= $a["name"]?>.jpg" alt="">
            <li>Name : <?= $a["name"]?></li>
            <li>Type : <?= $a["type"]?></li>
            <li>Top Notes : <?= $a["topNotes"]?></li>
            <li>Middle Notes : <?= $a["middleNotes"]?></li>
            <li>Base Notes : <?= $a["baseNotes"]?></li>
        </ul>
    <?php endforeach ?> 
</body>
</html>