<?php

guest();

require "Validator.php";
require "Database.php";
$config = require("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $db = new Database($config);

  $errors = [];

  $query = "SELECT * FROM users WHERE username = :username";
  $params = [
    ":username" => $_POST["username"]
  ];
  $user = $db->execute($query, $params)->fetch();
  if (!$user || !password_verify($_POST["password"], $user["password"])) {
    $errors["username"] = "Kaut kas nav labi";
  }

  if (empty($errors)) {
    $_SESSION["user"] = true;
    $_SESSION["username"] = $_POST["username"];
    header("Location: /");
    die();
  }
}

$title = "Login";
require "views/auth/login.view.php";