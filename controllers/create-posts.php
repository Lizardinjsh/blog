<?php

require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //dd("Post is called");

    $query = "INSERT INTO posts (title, category_id) 
                VALUE (:title, :category_id);";
    $params = [
        ":title" => $_POST["title"],
        ":category_id" => $_POST["category_id"]
    ];  
    $db->execute($query, $params);
    
    header("Location: /");
    die();
};

$title = "Create a Post";
require "views/posts-create.view.php";