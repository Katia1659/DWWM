<?php

// creation d'un tirage au sort random pour placer les noms afin d'eviter que les personnes decalent juste d'une place a chaque fois
$numbers = range(1, 16);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ".PHP_EOL;
}
?>