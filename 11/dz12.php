<?php

if (array_key_exists('attach', $_FILES)&&$_FILES['attach']['arrors']==0){

    if ($_FILES['attach']['type']=='text/plain'){
    move_uploaded_file($_FILES['attach']['tmp_name'], $_FILES['attach']['name']);
    $s=file_get_contents($_FILES['attach']['name']);
    } else {
        echo 'Invalid file';
    }
  /*  echo 'ok'.$s;
} else {
    echo 'no ok';*/
}

$array =explode("\n", $s);

foreach ($array as $v) {
    $user = explode(';', trim($v));
    $users[]=$user;}


echo '<table border="1">';

foreach ($users as $v){
    echo '<tr>';
    echo '<td>'.$v[0].'</td>';
    echo '<td>'.$v[1].'</td>';
    echo '<td>'.$v[2].'</td>';
    echo '<td>'.$v[3].'</td>';
    echo '</tr>';
}
echo '</table>';

//echo '<a href="/12/glob1.php">Back to start</a>';
//echo "<pre>";
//var_dump($_POST, $_FILES);