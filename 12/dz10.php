<?php

$userstxt = file_get_contents('dz7.txt');

$users =explode("\n", $userstxt);

$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$age=$_POST['age'];
$gender=$_POST['gender'];

$users[]=$firstname.';'. $lastname.';'.$age.';'.$gender;

file_put_contents('dz7.txt', implode("\n",$users));

echo 'ok!';

//echo "<pre>";
//var_dump($_GET, $_POST);