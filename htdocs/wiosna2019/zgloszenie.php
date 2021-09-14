<pre>
<?php
var_dump($_POST);
?>
</pre>
<?php
$id = mysqli_connect('localhost', 'root', '', 'wedkarstwo');

$lowisko = intval($_POST['lowisko']);
$data = $_POST['date'];
$sedzia = $_POST['sedzia'];

$query = $id->query("INSERT INTO zawody_wedkarskie (Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES (0, $lowisko, '$data', '$sedzia');");

echo $query;
$id->close();