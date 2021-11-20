<?php

$files = glob('*.txt');
foreach ($files as $v){
    echo'<a href="dz12.php?filename=' . $v .'">'.$v.'</a><br/>';
}