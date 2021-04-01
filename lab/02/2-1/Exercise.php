<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise</title>
</head>
<body>
<?php
$name = $_POST["name"];
$class = $_POST["class"];
$university = $_POST["university"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$hobby1 = "";
$hobby2 = "";
$hobby3 = "";
$hobby4 = "";
if(isset($_POST["hobby1"])) $hobby1 = $_POST["hobby1"];
if(isset($_POST["hobby2"])) $hobby2 = $_POST["hobby2"];
if(isset($_POST["hobby3"])) $hobby3 = $_POST["hobby3"];
if(isset($_POST["hobby4"])) $hobby4 = $_POST["hobby4"];

echo "Hello $name<br>";
echo "You are stydy at $class, $university<br>";
echo "Your phone is $phone<br>";
echo "Your address is $address<br>";
echo "Your hobby is <br>";
$count = 0;
if($hobby1 !== ""){
    $count++;
    echo "$count. $hobby1<br>";
}
if($hobby2 !== ""){
    $count++;
    echo "$count. $hobby2<br>";
}
if($hobby3 !== ""){
    $count++;
    echo "$count. $hobby3<br>";
}
if($hobby4 !== ""){
    $count++;
    echo "$count. $hobby4<br>";
}
?>
</body>
</html>
