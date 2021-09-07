<!--<pre>--><?php
//    var_dump($_POST);
//    ?>
<!--</pre>-->
<?php
$lb1 = $_POST['lb1'];
$lb2 = $_POST['lb2'];
$znak = $_POST['znak'];

if ($znak === '/' and $lb2 === 0) {
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