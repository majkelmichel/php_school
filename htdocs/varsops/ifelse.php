<html lang="pl">
<body>
<?php
$x=4;
$y=3;
$z=5;
$arr = [abs($x), abs($y), abs($z)];
sort($arr);
if ($arr[0] + $arr[1] > $arr[2] && $arr[1] + $arr[2] > $arr[0] && $arr[0] + $arr[2] > $arr[1]) {
    if ($arr[0] ** 2 + $arr[1] ** 2 == $arr[2] ** 2) {
        echo "tak<br>";
        $pole = $arr[0] * $arr[2] / 2;
        echo "pole: $pole<br>";
        $obw = $arr[0] + $arr[1] + $arr[2];
        echo "obwod: $obw";
    } else {
        echo "nie";
    }
} else {
    echo "nie trojkat";
}

?>
</body>
</html>


