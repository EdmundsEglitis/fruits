<?php
require "Database.php";
$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM fruits WHERE id = :id";

$params = [":id" => $_GET["id"] ];

$fruit = $db->execute($query, $params)->fetch();

require "views/show.view.php";