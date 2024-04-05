<?php

require "Validator.php";
require "Database.php";
$config = require("config.php");
$db = new Database($config);


//if ($_SERVER["REQUEST_METHOD"] == "POST" && trim($_POST["title"]) != "" && $_POST["category_id"] <= 3 && $_POST["title"] <= 255) {
    //dd("Post is called");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errors = [];

        if(!Validator::string($_POST["title"])) {
            $errors["title"] = "Title cannot be empty";
        }

        if(strlen($_POST["title"]) > 255) {
            $errors["title"] = "Title too long";
        }

        if($_POST["category_id"] < 1 || $_POST["category_id"] > 3) {
            $errors["category_id"] = "Category ID is invalid";
        }

        if (empty($errors)) {
            $query = "UPDATE posts
                      SET title = :title, category_id = :category_id
                      WHERE id = :id";
            $params = [
            ":title" => $_POST["title"],
            ":category_id" => $_POST["category_id"],
            ":id" => $_POST["id"],
        ];  
        $db->execute($query, $params);

        header("Location: /");
        die();
        }


   
}


$title = "Create a Post";
require "views/posts/create.view.php";