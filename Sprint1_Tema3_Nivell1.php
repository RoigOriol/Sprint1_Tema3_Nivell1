<?php
declare(strict_types=1);

/* Exercici 1
Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un. */

$nums = [1, 2, 3, 4, 5];

foreach ($nums as $num) {
    echo $num . PHP_EOL;
}

/* Exercici 2
$X = array (10, 20, 30, 40, 50,60);
Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). Mostra per última vegada la mida de l’array. */

$X = [10, 20, 30, 40, 50, 60]; // Corregido a valores enteros

echo "Mida inicial de l'array: " . count($X) . PHP_EOL;

unset($X[2]);
$X = array_values($X); 

echo "Mida final de l'array: " . count($X) . PHP_EOL;

/* Exercici 3
Crea una funció que rebi com a paràmetres un array de paraules i un caràter. La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre. */

function checkCharacter(array $words, string $char): bool {
    foreach ($words as $word) {
        if (stripos($word, $char) === false) {
            return false; 
        }
    }
    return true; 
}

$words = ["hola", "Php", "Html"];
$character = "h";

$result = checkCharacter($words, $character);
echo ($result ? "true" : "false") . PHP_EOL;

/* Exercici 4
Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:
- nom
- edat
- email
- menjar favorit */

$selfInfo = [
    "nom" => "Oriol",
    "edat" => 39,
    "email" => "oriol@example.com",
    "menjar_preferit" => "Pizza"
];

foreach ($selfInfo as $key => $value) {
    echo ($key) . ": " . $value . PHP_EOL;
}

?>
