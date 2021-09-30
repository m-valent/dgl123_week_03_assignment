<!DOCTYPE html>
<html lang="en">

<?php
/*
Title:      Week 03 Assignment

Student:    Misko Valent
Due Date:   Sept 22, 2021
Filename:   confirmation.php

Class:      DGL 123 - Introduction to PHP
Semester:   2021 Fall North Island College
Instructor: Brad Best

NOTE:  I know I do not require the extra HTML code, but for now am including it
unless you wish to just focus on the PHP and ignore the added HTML?
*/
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGL 123 - Week 03 Assignment pg2</title>
</head>
<body>

<?php

/*  Although there are many values getting passed on with the POST, I am only outputting
the assignment required output as requested in #8 of the expected details so only these
*/

$name = $_POST['customer_name'];
$email = $_POST['customer_email'];
$phone = $_POST['customer_phone'];
$size = $_POST['pizza_size'];
$quantity = $_POST['howMany'];
$pizza = $_POST['pizza_type'];

?>

<h1>Order confirmation</h1>

<strong>Name: </strong><?php echo $name ?><br>
<strong>Email: </strong><?php echo $email ?><br>
<strong>Cell: </strong><?php echo $phone ?>

<p>
<?php

echo "Your " . $quantity . " " . $size . " " . $pizza . " pizza(s) have been ordered and will be available shortly.";
echo "<p>Thank you " . $name . " for your business!</p>";

?>
</p>

</body>
</html>