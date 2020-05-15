<?php

function writeSecretSentence(string $txt1, string $txt2) : string
{
    $secretSentence = $txt1 . " s'incline face à " . $txt2;
    return $secretSentence;
}

    echo writeSecretSentence('Lion', 'Fire');

?>
