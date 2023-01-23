<?php

/*

la variable `$compositeursItaliens` est un tableau simple contenant une liste de compositeurs italiens
écire une boucle foreach qui affiche chacun des noms dans la console

source des données : [Liste de compositeurs de la période classique — Wikipédia](https://fr.wikipedia.org/wiki/Liste_de_compositeurs_de_la_p%C3%A9riode_classique)

*/

$compositeursItaliens = array(
    'Rinaldo di Capua (1710-1770)',
    'Niccolò Jommelli (1714-1774)',
    'Pietro Nardini (1722-1793)',
    'Francesco Antonio Uttini (1723-1795)',
    'Pasquale Anfossi (1727–1797)',
    'Niccolò Vito Piccinni (1728–1800)',
    'Giuseppe Sarti (1729–1802)',
    'Antonio Sacchini (1730-1786)',
    'Gian Francesco de Majo (1732-1770)',
    'Giacomo Tritto (1733–1824)',
    'Antonio Tozzi (1736–1812)',
    'Vincenzo Manfredini (1737–1799)',
    'Giovanni Paisiello (1740-1816)',
    'Andrea Luchesi (1741-1801)',
    'Luigi Boccherini (1743-1805)',
    'Domenico Cimarosa (1749-1801)',
    'Antonio Salieri (1750-1825)',
    'Muzio Clementi (1752-1832)',
    'Niccolò Zingarelli (1752–1837)',
    'Giovanni Battista Viotti (1755–1824)',
    'Luigi Cherubini (1760-1842)',
    'Valentino Fioravanti (1764-1837)',
    'Ferdinando Carulli (1770-1841)',
    'Stefano Pavesi (1779-1850)',
);



// boucle avec qtr_split/strlen :
echo "Par qtr_split/ strlen \n";
foreach ($compositeursItaliens as $key ) {

    $key=str_split($key, strlen($key)-13);
    echo $key[0]."\n";

   
}

// boucle avec subster :
Echo "Par SUBSTER \n";

foreach ($compositeursItaliens as $key ) {
    $sub=substr($key, 0, -13);
    echo $sub."\n";
}

?>

