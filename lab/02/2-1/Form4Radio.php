<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A Simple Form</title>
</head>
<body>
    <font size="5">Thank you: Got your input.</font>
    <?php
    $email = $_GET["email"];
    $contact = $_GET["contact"];
    print "<br>Your email address is $email";
    print "<br>Contact preference is $contact";
    ?>
</body>
</html>
