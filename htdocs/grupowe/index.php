<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Strona główna</title>
</head>
<body>
<h2>Strony klubów:</h2>
<ul>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'ekstraklasa');

    $kluby = mysqli_query($conn, "SELECT Id_k, Nazwa FROM kluby;");

    foreach ($kluby as $item) {
        $nazwa = $item['Nazwa'];
        $id = $item['Id_k'];
        echo "<li><a href='./team.php?id=$id'>$nazwa</a></li>";
    }
    ?>
</ul>

<a href="insert.html">Dodawanie danych</a>
</body>
</html>