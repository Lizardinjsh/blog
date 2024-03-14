<?php

require "function.php";
require "Database.php";


$config = require "config.php";

//$id = $_GET["id"];

$query = "SELECT * FROM posts";
$params = [];
if(isset($_GET["id"]) && $_GET["id"] != ""){
    $id = $_GET["id"];
    $query .= " WHERE id=:id";
    $params = [":id" => $id];
};
$db = new Database($config);
$posts = $db
    ->execute($query, $params)
    ->fetchAll();

$title = "Posts";
 require "views/index.view.php";   