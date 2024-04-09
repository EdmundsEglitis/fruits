
<?php
require "Database.php";
$config = require "config.php";




$query = "SELECT * FROM fruits"; 
$params = [];
$db = new Database($config);
$fruits = $db->execute($query, $params)->fetchALL();


if (isset($_GET["calories"]) && $_GET["calories"] != 0) {
    $calories = $_GET["calories"];
    $params[":calories"] = $calories;
    $query = "SELECT * FROM fruits WHERE calories <= :calories; ";
  }
  $fruits = $db
  ->execute($query, $params)
  ->fetchAll();

require "views/index.view.php";
//  var_dump($events);