<?php


function extractText(string $txt): string
{
    $lengthMess1 = strlen($txt);
    $chiffreCle = $lengthMess1 / 2;
    $sousChaine = substr($txt, 5, $chiffreCle); //à partir du 6ème caractère
    $sousChaine = str_replace('@#?', ' ', $sousChaine);

    /////ajout de la fonction native strrev
    $txtSecret = strrev($sousChaine);

    return $txtSecret;
}

$message1 = '0@sn9sirppa@#?ia\'jgtvryko1';
$message2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$message3 = 'aopi?sgnirts@#?sedhtg+p9l!';

echo extractText($message1) . PHP_EOL;
echo extractText($message2) . PHP_EOL;
echo extractText($message3);


?>
