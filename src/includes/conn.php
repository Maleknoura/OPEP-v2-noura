<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "opep2";

$conn = new mysqli($server, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
