<?php

require_once __DIR__ . '/Models/Movie.php';

$movies = [
    new Movie('Matrix', 'science fiction', 'English', [8, 8.5, 7, 6, 7.5, 9.5]),
    new Movie('The Lord of the Rings', 'science fiction', 'English', [7, 7.5, 8, 6.5, 9.5, 8.5]),
    new Movie('The Wolf of Wall Street', 'Crime/dramatic/comedy', 'English', [9.5, 9, 7, 6.5, 8.5, 8])
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php foreach ($movies as $movie) { ?>
            <li>
                <?php echo $movie->title . '' . $movie->genre . '' . $movie->lang . '' . $movie->avgVote() ?>
            </li>
        <?php } ?>
    </ul>

</body>

</html>