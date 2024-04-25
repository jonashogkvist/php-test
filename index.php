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
            [
                "name" => "Do Androids Dream of Electric Sheep",
                "author" => "Philip K. Dick",
                "releaseYear" => "1968",
                "purchaseUrl" => "https://example.com"
            ],
            [
                "name" => "Project Hail Mary",
                "author" => "Andy Weir",
                "releaseYear" => "2021",
                "purchaseUrl" => "https://example.com"
            ],
            [
                "name" => "The Martian",
                "author" => "Andy Weir",
                "releaseYear" => "2011",
                "purchaseUrl" => "https://example.com",
            ]
        ];


    function filterByAuthor($books, $author): array
    {
        $filteredBooks = [];

        foreach ($books as $book){
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    }
?>

    <ul>
        <?php foreach (filterByAuthor($books, "Andy Weir") as $book) : ?>
            <li>
                <a href="#"> <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>