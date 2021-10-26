<pre>
    <?php
    var_dump($_POST);
    session_start();
    require_once "../utils/sql_con.php";
    ?>
</pre>

<?php
if (isset($_POST["login"], $_POST["name"], $_POST["lastname"], $_POST["password"], $_POST["age"]) and
    $_POST["login"] !== "" and
    $_POST["name"] !== "" and
    $_POST["lastname"] !== "" and
    $_POST["password"] !== "" and
    $_POST["age"] !== "") {
    $login = $_POST["login"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $password = $_POST["password"];
    $age = intval($_POST["age"]);
    $connection = @new mysqli($host, $db_user, $db_password, $db_name);
    if ($connection->connect_errno != 0) {
        echo "nie udalo sie";
    } else {
        $query = "SELECT login FROM users";
        $result = $connection->query($query);
        $unique = true;
        foreach ($result as $item) {
            $a = $item["login"];
            echo "$a - $login";
            if ($a == $login) {
                $unique = false;
            }
        }

        if ($unique) {
            $connection->query("INSERT INTO users (login, password, name, lastname, role, age) VALUES ('$login', '$password', '$name', '$lastname', 'user', $age)");
            echo "zarejestrowano $login";
        } else {
            echo "Login: $login już istnieje.";
        }
    }
}