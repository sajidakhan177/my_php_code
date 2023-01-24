<?php
$user = "root";
$password = "";
$database = "test_database";
$db = new mysqli('localhost', $user, $password, $database) or die("unable tro load");
echo "connected!!";
?>