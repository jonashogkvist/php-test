<?php
require "config.php";
require "functions.php";
require "router.php";


$dsn = "mysql:host=localhost;port=33061;dbname=myapp;charset=utf8mb4;user=$DB_USERNAME;password=$DB_PASSWORD";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}