<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conditional Test</title>
</head>
<body>
    <?php
    $first = $_GET["firstName"];
    $middle = $_GET["middleName"];
    $last = $_GET["lastName"];
    echo "Hi $first! Your full name is $last $middle $first <br>";
    if($first == $last) {
        echo "$first and $last is equal";
    }
    if($first < $last) {
        echo "$first is less than $last";
    }
    if($first > $last) {
        echo "$first is greater than $last";
    }
    echo "<br>";
    $grade1 = $_GET["grade1"];
    $grade2 = $_GET["grade2"];
    $final = (2 * $grade1 + 3 * $grade2) / 5;
    if($final > 89){
        printf("Your final grade is %.1f. You got an A. Congratulation!", $final);
        $rate = "A";
    }
    elseif($final > 79){
        printf("Your final grade is %.1f. You got an B.", $final);
        $rate = "B";
    }
    elseif($final > 69){
        printf("Your final grade is %.1f. You got an C.", $final);
        $rate = "C";
    }
    elseif($final > 59){
        printf("Your final grade is %.1f. You got an D.", $final);
        $rate = "D";
    }
    elseif($final >= 0){
        printf("Your final grade is %.1f. You got an F.", $final);
        $rate = "F";
    }
    else{
        printf("Illegal grade less than 0. Final grade = %.1f", $final);
        $rate = "Illegal";
    }
    echo "<br>";

    switch ($rate){
        case "A": echo "Excellent!"; break;
        case "B": echo "Good!"; break;
        case "C": echo "Not bad!"; break;
        case "D": echo "Normal!"; break;
        case "F": echo "You have to try again!"; break;
        default: echo "Illegal grade!"; break;
    }
    ?>
</body>
</html>
