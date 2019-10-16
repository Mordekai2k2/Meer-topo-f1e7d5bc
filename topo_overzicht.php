<?php
$omegalol = array();
echo "Ey yo wuzzup, hoeveel landen toevoegen gappie?\n";
$hoeveelheid = readline();
for ($i = 1; $i <= $hoeveelheid; $i++) {
    echo "Cmon dawg, nu je land?\n";
    $land = readline();
    echo "En welke hoofdstad heeft ". $land . " bro?\n";
    $hoofdstad = readline();
    $omegalol[$land] = $hoofdstad;
}
echo "Badabing badaboom, Nu jeb je hier je shizzle:\n";
foreach ($omegalol as $land => $hoofdstad) {
    echo "$land, $hoofdstad\n";
}
echo "i know its magic <,<";