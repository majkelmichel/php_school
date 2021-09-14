<?php
$names = ["imie", "nazwisko", "data-ur", "pesel", "nip", "kod-pocztowy", "miasto", "adres", "email", "komorka", "stacjonarny", "plec"];

$regexes = [
    "imie" => "/^[A-ZĆŻŹÓŁŚ][a-ząćżźółęśń]+$/",
    "nazwisko" => "/^[A-ZĆŻŹÓŁŚ][a-ząćżźółęśń]+$/",
    "data-ur" => "/^(19[0-9][0-9]|20[0-9]{2})-([0][1-9]|[1][0-2])-([0][1-9]|[1-2][0-9]|30|31)$/",
    "pesel" => "/^\d{11}$/",
    "nip" => "/^\d{10}$/",
    "kod-pocztowy" => "/^\d{2}-\d{3}$/",
    "miasto" => "/^[A-ZĆŻŹÓŁŚ][a-ząćżźółęśń]+$/",
    "adres" => "/^[A-ZĆŻŹÓŁŚ][a-ząćżźółęśń]+ \d{1,4}$/",
//    "email" => "/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/",
    "komorka" => "/^\+\d{1,2} \d{3} \d{3} \d{3}$/",
    "stacjonarny" => "/^\d{2} \d{3} \d{2} \d{2}$/"
];

$poprawne = true;

foreach ($names as $el) {
    if (array_key_exists($el, $_POST)) {
        $a = $_POST[$el];
        if ($el == "email") {
            if (!filter_var($_POST[$el], FILTER_VALIDATE_EMAIL)) {
                echo "Niepoprawny adres email: <strong>$a</strong><br>";
                $poprawne = false;
            }
        } else {
            if (array_key_exists($el, $regexes)) {
                if (!preg_match($regexes[$el], $_POST[$el])) {
                    $poprawne = false;
                    echo "Pole $el zawiera niepoprawną wartość: <strong>$a</strong><br>";
                }
            }
        }
    }
}

if ($poprawne) {
    echo "Podano następuące dane:<br>";
    foreach ($_POST as $el) {
        echo "$el<br>";
    }
}

echo "<pre>";
var_dump($_POST);
echo "</pre>";