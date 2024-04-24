<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php
    $books = [
            "Do Androids Dream of Electric Sheep",
            "The Langoliers",
            "Hail Mary"
    ]
?>

    <h1>
        Recommended Books
    </h1>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li> <?= $book ?> </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>