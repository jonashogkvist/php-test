<?php
require "functions.php";
require "router.php";
require "Database.php";

$config = require "config.php";


$db = new Database($config['database'], $config['username'], $config['password']);
$posts = $db->query("select * from posts where id = 2")->fetchAll();


foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}