<html>
<head>
</head>
<body>

<form action="insertsks.php" method="post">

    <h1>Dopisz zawodnika</h1>
    Imię: <input type="text" name="imie"><br>
    Nazwisko <input type="text" name="nazwisko"><br>
    <input type="submit">
</form>


<?php

if (isset($_POST["imie"]) && trim($_POST["imie"]) != "" && isset($_POST["nazwisko"]) && trim($_POST["nazwisko"]) != "") {

    // Create connection
    $conn = mysqli_connect('localhost', 'root', 'root', 'sks');

    // Check connection
    $err = mysqli_error($conn);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_set_charset($conn, "utf8");
    $sql = "INSERT INTO zawodnicy (imie, nazwisko) VALUES ('" . $_POST['imie'] . "', '" . $_POST['nazwisko'] . "')";
    if (mysqli_query($conn, $sql)) {
        echo $_POST["imie"] . " " . $_POST['nazwisko'] . " " . " został wpisany na listę zawodników";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}


?>

<h1>Aktualnie zapisani zawodnicy</h1>
<ol>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'sks');

    $err = mysqli_error($conn);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_set_charset($conn, "utf8");
    $result = mysqli_query($conn, 'Select * from zawodnicy');
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li>' . $row["imie"] . " " . $row["nazwisko"] . '</li>';
    }

    mysqli_close($conn);


    ?>
</ol>


</body>
</html>