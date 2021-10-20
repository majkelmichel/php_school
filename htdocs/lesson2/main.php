<?php
    session_start();
    require_once 'utils/sql_con.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (!isset($_SESSION['logged'])) {
            header('Location: index.php');
        } else {
            $conn = new mysqli($host, $db_user, $db_password, $db_name);

            $result = $conn->query("SELECT * FROM users");
            var_dump($result->fetch_all());
        }

    ?>


JESTES ZALOGOWANY
</body>
</html>