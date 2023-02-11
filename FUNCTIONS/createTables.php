<?php
require_once 'CreateDb.php';

// create instance of Createdb class
// $database = new CreateDb("Productdb", "Producttb");

/* $sql = "DROP TABLE IF EXISTS student;
"; */
$statements = [];
$sql1 = "CREATE TABLE IF NOT EXISTS student1 (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(25) NOT NULL
)";
$sql2 = "CREATE TABLE IF NOT EXISTS student22 (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(25) NOT NULL
)";
$sql3 = "CREATE TABLE IF NOT EXISTS student3 (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(25) NOT NULL
)";
$sql4 = "CREATE TABLE IF NOT EXISTS student45 (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(25) NOT NULL
)";

$statements[] = $sql1;
$statements[] =  $sql2;
$statements[] =  $sql3;
$statements[] =  $sql4;
// print_r($statements);
foreach ($statements as $s) {
    // echo $s;
    $sql = $s;
    $database = new CreateDb("Productdb", "test", $sql);
}
// success message if the table is created
// echo "Table is created or already exists.";

// $database = new CreateDb("Productdb", "student", $sql);