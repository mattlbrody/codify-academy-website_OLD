<?php
$name = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phonenumber'];


$formcontent="From: $name \n Email: $email \n Phone: $phone";

$recipient = 'admissions@codifyacademy.com'; //my email

$date = $_POST['date'];
$mailheader = "From: $email \r\n";
mail($recipient, $date, $formcontent, $mailheader) or die("Error!");
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
  header('Location: ' . $home_url);
?>