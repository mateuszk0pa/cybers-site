<?php
$name = $_POST['name'];
$email = $_POST['email'];
$type = $_POST['type'];
$textinf = $_POST['textinf'];
$formcontent=" Od: $name \n Mail: $email \n Wiadomość: $textinf";
$recipient = "m.kopaszewski@gmail.com";
$subject = "Maile";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Wypełnij wszystkie pola!");
?>
