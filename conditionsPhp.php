<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)];

if ($opponentWeapon == 'fists'){
    $indyWeapon = 'gun';}
    elseif ($opponentWeapon == 'whip'){
        $indyWeapon = 'fists';}
    else {
        $indyWeapon = 'gun';
    }


?>
