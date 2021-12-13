<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Add objects</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Dodaj Obiekt Ministry</h1>
        <form method="post" action="ministry.php">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Object name">
            </div>
            <div class="form-group">
                <label for="name">Role</label>
                <input type="text" class="form-control" id="role" name="role" placeholder="Object role">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Object location">
            </div>
            <div class="form-group">
                <label for="location">Political party</label>
                <input type="text" class="form-control" id="political_party" name="political_party" placeholder="Object political_party">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add</button>
            <a href="/index.php" class="btn btn-success mt-3">Back</a>
        </form>
        <?php
            require_once('../utils/sql_con.php');
            $connection = new mysqli($host, $db_user, $db_password, $db_name);
            if (
                    !empty($_POST['name']) &&
                    !empty($_POST['location']) &&
                    !empty($_POST['political_party']) &&
                    !empty($_POST['role'])
            ) {
                try {
                    $name = $connection->real_escape_string($_POST['name']);
                    $location = $connection->real_escape_string($_POST['location']);
                    $political = $connection->real_escape_string($_POST['political_party']);
                    $role = $connection->real_escape_string($_POST['role']);

                    if ($connection->connect_errno != 0) {
                        echo "Nie połączono z bazą!";
                    }
                    else {
                        $query = "INSERT INTO ministry_objects VALUES (NULL, '$name', '$location', '$political', '$role')";
                        $connection->query($query);
                        if(!$connection->error): ?>
                            <div class="alert alert-success mt-5" role="alert">
                                Pomyślnie dodano do bazy!
                            </div>
                        <?
                        endif;
                    }
                } catch (Exception $ex) {
                    echo $ex->getMessage();
                }
            }
            else {
                ?>
                <div class="alert alert-danger mt-5" role="alert">
                    Uzupełnij wszystkie pola!
                </div>
        <?
            }
        ?>
    </div>
</body>
</html>