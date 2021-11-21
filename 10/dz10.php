<?php

$userstxt = file_get_contents('dz7.txt');
$users =explode("\n", $userstxt);

$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$age=$_POST['age'];
$gender=$_POST['gender'];

$users[]=$firstname.';'. $lastname.';'.$age.';'.$gender;
file_put_contents('dz7.txt', implode("\n",$users));
//echo 'ok!';
//var_dump ($users);


foreach ($users as $v) {
    $user = explode(';', trim($v));
    $usersarray[]=$user;}

echo '<table border="1">';

foreach ($usersarray as $v){
    echo '<tr>';
    echo '<td>'.$v[0].'</td>';
    echo '<td>'.$v[1].'</td>';
    echo '<td>'.$v[2].'</td>';
    echo '<td>'.$v[3].'</td>';
    echo '</tr>';
}
echo '</table>';
//var_dump($_GET, $_POST);