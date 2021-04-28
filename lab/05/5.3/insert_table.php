<?php
include "conn.php";
$description = $_POST['description'];
$weight = $_POST['weight'];
$cost = $_POST['cost'];
$number = $_POST['number'];

$sql = "INSERT INTO Products (Product_desc, Cost, Weight, Numb) 
    VALUES ('$description', '$weight', '$cost', '$number')";
$insert = mysqli_query($conn, $sql);
echo "The query is $sql <br>";
if($insert)
    echo "success";
else
    echo "error";
