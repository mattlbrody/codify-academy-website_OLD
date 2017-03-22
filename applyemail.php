<?php
$name = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phonenumber'];
$why = $_POST['why'];
$ability= $_POST['ability'];
$previous = $_POST['previous'];
$anything = $_POST['anything'];



$formcontent="From: $name \n Email: $email \n Phone: $phone \n Why: $why \n Ability: $ability \n previous: $previous \n anything: $anything";

$recipient = 'admissions@codifyacademy.com'; //my email

$date = $_POST['date'];
$mailheader = "From: $email \r\n";
mail($recipient, $date, $formcontent, $mailheader) or die("Error!");
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/applycomplete.php';
  header('Location: ' . $home_url);
?>