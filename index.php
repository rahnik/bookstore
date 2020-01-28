<?php

require_once 'db_connection.php'

?>

<!DOCTYPE html>
<html lang='en'>
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
     echo $row['title'] . "<br>";
     echo $row['release_date'] . "<br>";
}

?>

</body>
</html>