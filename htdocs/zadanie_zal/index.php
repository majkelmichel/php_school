<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
                <?php

                function printTree($print_index, $connection) {
                    $query = "SELECT * FROM classes WHERE parentId = $print_index";
                    $res = $connection->query($query);
                    while($row = $res->fetch_assoc()) {
                        echo "<div class='col'><a href=\"/forms/" . strtolower($row['name']) . ".php\"><div class='image-container'><img width='100' height='auto' src=\"" . $row['imgSrc'] . "\" /><p>" . $row['title'] . "</p></div></a><div class='row no-gutters'>";
                            printTree($row['id'], $connection);
                        echo "</div></div>";
                    }
                }

                $connection = new mysqli("localhost", "root", "", "zaliczenie");

                if($connection->connect_errno != 0) {
                    echo "Nie połączono z bazą!";
                } else {
                    $tree = [];
                    $object_info = [];

                    printTree(1, $connection);
                    $connection->close();
                }
                ?>
        </div>
    </body>
</html>
