<?php
require_once './models/Movie.php';
require_once './models/Genre.php';
require_once './Data/db.php';

//var_dump($movies);

// Esempio------->stampare tutti i film con i loro generi
// echo "<h2>Lista Film:</h2>";
// foreach ($movies as $movie) {
//     echo "<h3>" . $movie->title . "</h3>";
//     echo "Durata: " . $movie->getMovieDuration() . "<br>";
//     echo "Generi: ";
//     foreach ($movie->getGenres() as $genre) {
//         echo $genre;
//     }
//     echo "<br><br>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Collezione di Film</h1>
        </header>

        <!-- Movies -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($movies as $movie): ?>
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg duration-300 hover:scale-105 transition-all cursor-pointer">
                    <div class="flex justify-between items-start">
                        <h2 class="text-xl font-bold text-gray-800 mb-2"><?= htmlspecialchars($movie->title) ?></h2>
                        <span class="inline-flex items-center justify-center px-2 py-1 rounded-full bg-yellow-100 text-yellow-800">
                            <?= $movie->rating ?> ★
                        </span>
                    </div>

                    <div class="text-gray-600 mb-4">
                        <p class="mb-1"><span class="font-semibold">Regista:</span> <?= htmlspecialchars($movie->director) ?></p>
                        <p class="mb-1"><span class="font-semibold">Anno:</span> <?= $movie->year ?></p>
                        <p class="mb-1"><span class="font-semibold">Durata:</span> <?= $movie->getMovieDuration() ?></p>
                    </div>

                    <div class="mt-4">
                        <h3 class="text-sm font-semibold text-gray-700 mb-2">Generi:</h3>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($movie->getGenres() as $genre): ?>
                                <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                    <?= $genre ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>