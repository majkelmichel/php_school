<?php
require_once "../utils/sql_conn.php";

$connection = new mysqli($host, $db_user, $db_password, $db_name);

if ($connection->connect_errno != 0) {
    echo $connection->connect_errno;
} else {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
    $result = $connection->query($query);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
    } else {
        header("Location: ../insert.html");
    }

    $result->close();
    $connection->close();
}