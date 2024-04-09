<?php
require "Database.php";
require "Validator.php";
$config = require("config.php");
$validators = new Validator();
$db = new Database($config);



if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];
    if(!Validator::string($_POST["name"], min: 2, max: 50)) {
    $errors["name"] = "da name should be from 2 - 50 characters";
}


if(!Validator::number($_POST["calories"], min:1)) {
    $errors["calories"] = "da calories are needed and must be a number you bucket head";
}


    if(empty($errors)){

        $query = "UPDATE fruits 
                SET name = :name, calories = :calories
                WHERE id = :id";

        $params = [
            ":name" => $_POST["name"],
            ":calories" => $_POST["calories"],
            ":id" => $_POST["id"]

        ];

    $db->execute($query, $params); 
    header("location: /");
    die();
}
}


$query = "SELECT * FROM fruits WHERE id = :id ";

$params = [":id" => $_GET["id"] ];

$fruit = $db->execute($query, $params)->fetch();

require "views/update.view.php";