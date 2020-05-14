<?php


$moviesIndiana = [
    'Indiana Jones et le Royaume du Crâne de Cristal' => ['Harrison Ford', 'Cate Blanchett', 'Karen Allen'],
    'Indiana Jones et la Dernière Croisade' => ['Harrison Ford', 'Sean Connery', 'Denholm Elliott'],
    'Indiana Jones et le Temple maudit' => ['Harrison Ford', 'Kate Capshaw', 'Jonathan Ke Quan']
];

foreach ($moviesIndiana as $movie => $actorsMovie) {
    echo "Dans le film " . $movie . ", les principaux acteurs sont : ";
    foreach ($actorsMovie as $actor) {
        echo $actor . ", ";
    }
    echo PHP_EOL;
}

?>
