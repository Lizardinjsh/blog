<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    dd("Post is called");

    $query = "INSERT INTO posts (title, category_id) 
                VALUE (:title, :category_id";
}
$title = "Create a Post";
require "views/posts-create.view.php";