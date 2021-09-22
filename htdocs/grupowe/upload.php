<?php
$conn = mysqli_connect('localhost', 'root', '', 'ekstraklasa');

if (array_key_exists("kluby", $_POST)) {
    $kluby = $_POST['kluby'];
    $kraj = $kluby['kraj'];
    $miasto = $kluby['miasto'];
    $nazwa = $kluby['nazwa'];

    $query = $conn->query("INSERT INTO kluby (Kraj, Miasto, Nazwa) VALUES ('$kraj', '$miasto', '$nazwa');");
}

if (array_key_exists("pilkarze", $_POST)) {
    $pilkarze = $_POST['pilkarze'];
    $imie = $pilkarze['imie'];
    $nazwisko = $pilkarze['nazwisko'];
    $rok = $pilkarze['rok'];
    $id_k = $pilkarze['id'];

    $query = $conn->query("INSERT INTO pilkarze (Imie, Nazwisko, Rok_urodzenia, Id_k) VALUES ('$imie', '$nazwisko', $rok, $id_k);");
}

if (array_key_exists("trener", $_POST)) {
    $trener = $_POST['trener'];
    $imie = $trener['imie'];
    $nazwisko = $trener['nazwisko'];
    $rok = $trener['rok'];
    $id_k = $trener['id'];

    $query = $conn->query("INSERT INTO trener (Imie, Nazwisko, Rok_urodzenia, Id_k) VALUES ('$imie', '$nazwisko', $rok, $id_k);");
}

if (array_key_exists("wypo", $_POST)) {
    $wypo = $_POST['wypo'];
    $id_k = $wypo['klub'];
    $id_p = $wypo['pilkarz'];
    $data = $wypo['data'];
    echo $wypo;

    $query = $conn->query("INSERT INTO wypozyczenia (Id_k, Id_p, Do_kiedy) VALUES ($id_k, $id_p, '$data');");
}
$conn->close();
header('Location: ./insert.html');