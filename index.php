<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Жестокое обращение с животными</title>
    <style>
        body {
            font-family: sans-serif;
        }
        h1 {
            margin: 0;
        }
        h2 {
            margin: 0 0 0 1em;
        }
        p {
            margin: 0 0 0 3em;
            line-height: 2;
            font-size: 1.1em;
        }
        hr {
            width: 75%;
            margin: 15px auto;
        }
    </style>
</head>
<body>
<?php
$animals_continents = [
    'Africa' => ['Loxodonta', 'Okapia johnstoni', 'Hexaprotodon Liberiensis'],
    'Antarctica' => ['Leptonychotes weddellii', 'Arctocephalus', 'Hydrurga Leptonyx'],
    'Australia' => ['Dendrolagus bennettianus', 'Camelus', 'Chlamydosaurus Kingii'],
    'Eurasia' => ['Wolf', 'Ursus Arctos', 'Apodemus agrarius'],
    'North America' => ['Mammuthus columbi', 'Alligator', 'Dasypus Novemcinctus'],
    'South America' => ['Jaguar', 'Chelonoidis Elephantopu', 'Eunectes murinus']
];
$double_name = [];
$continent = [];
$first_world = [];
$second_word = [];
echo '<h1>Массив животных через запятую</h1>';
foreach ($animals_continents as $continents_key => $animals) {
    $continent[] = $continents_key;
    echo "<h2>$continents_key</h2>";
    echo "<p>$animals[0], $animals[1], $animals[2]</p>";
    foreach ($animals as $two) {
        $rows_two = explode(" ", $two);
        if (count($rows_two) == 2) {
            $double_name[] = $two;
            $first_world[] = $rows_two[0];
            $second_word[] = $rows_two[1];
        }
    }
}
echo '<hr>';
echo '<h2>Массив из двух слов</h2>';
foreach ($double_name as $item) {
    echo "<p>$item</p> <br>";
}
echo '<hr>';
shuffle($second_word);
echo '<h1>Выдуманные животные</h1>';
foreach ($second_word as $last) {
    $first = array_shift($first_world);
    echo "<p>$first $last</p>";
}
?>
</body>
</html>