<?php


function writeSecretSentence(string $txt1, string $txt2) : string{
    $txt = $txt1 . ' s\'incline face à ' . $txt2 . PHP_EOL;
    return $txt;
}

    echo writeSecretSentence('Lion', 'Feu');
    echo writeSecretSentence('Tigre', 'Lune');

?>
