<?php
    session_start();
    require_once "utils/sql_con.php";
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
            echo "<h1>" . $_SESSION['user_name'] . " " . $_SESSION['user_lastname'] . "</h1>";
            if ($_SESSION['is_admin']) {
                $connection = @new mysqli($host, $db_user, $db_password, $db_name);
      
                if ($connection->connect_errno != 0) {
                    echo "nie udalo sie";
                } else {            
                    $query = "SELECT * FROM users";
                    $result = $connection->query($query);

                    foreach ($result as $val) {
                        print_r("<pre>");
                        print_r($val);
                        print_r("</pre>");
                    }
                }    
            }
        }

    ?>


JESTES ZALOGOWANY
</body>
</html>