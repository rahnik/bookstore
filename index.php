<?php

require_once 'db_connection.php'

$stmt = $pdo->prepare('SELECT title FROM books');
$stmt -> execute();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
    <?php

while ($row = $stmt->fetch())
{
    echo $row['name'] . "\n";
}

    ?>
    </body>
</html>