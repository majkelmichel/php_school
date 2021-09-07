<html lang="pl">
<head>
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        <h2>
            Kalkulator
        </h2>
        <label>
            Pierwsza liczba
            <input name="lb1" type="number" required>
        </label>
        <label>
            Znak
            <select name="znak" id="znak">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </label>

        <label>
            Druga liczba
            <input name="lb2" type="number" required>
        </label>
        <input type="submit" style="align-self: center">
        <b>Zmiana trybu kalkulatora:</b>
        <button id="change">Zaawansowany</button>
    </form>
    <br>
    <br>
    <script src="script.js"></script>
</body>
</html>

<?php
if (isset($_POST['znak'])) {
    $lb1 = $_POST['lb1'];
    $lb2 = $_POST['lb2'];
    $znak = $_POST['znak'];

    if ($znak == '/' and $lb2 == 0) {
        echo "Nie dzielimy przez 0";
    } else {
        switch ($znak) {
            case "+":
                $wynik = $lb1 + $lb2;
                break;
            case "-":
                $wynik = $lb1 - $lb2;
                break;
            case "*":
                $wynik = $lb1 * $lb2;
                break;
            case "/":
                $wynik = $lb1 / $lb2;
                break;
            case "^":
                $wynik = $lb1 ** $lb2;
                break;
            case "log":
                $wynik = log($lb1, $lb2);
                break;
            case "root":
                $wynik = sqrt($lb1);
                break;
        }
        echo "Wynik to $wynik";
    }
}
