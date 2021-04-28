<?php
$servername = "localhost";
$dbname = "mydatabase";
$username = "phppgm";
$pass = "mypasswd";

$conn = mysqli_connect($servername, $username, $pass, $dbname) or die("Connection Fail!");
