<?php
require_once './models/Movie.php';
require_once './models/Genre.php';


$actionGenre = new Genre();
$actionGenre->genre = "azione";

$interstellar = new Movie("interstellar", "pippo", $actionGenre, 2019, 198, "efhjwfoiewfoswefj", 4.5);

var_dump($interstellar);

echo $interstellar->getMovieDuration();


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>