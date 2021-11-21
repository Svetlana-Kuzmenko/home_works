<?php

class Device {
    public $title_drawing;
    public $specification_number;
    public $drawing_number;
    public $number_of_units;
    public $assembly_workshop;

}
$device1= new Device();
$device1->title_drawing='Plate';
$device1->specification_number=2;
$device1->drawing_number='TA211121';
$device1->number_of_units=1;
$device1->assembly_workshop=50;

$device2= new Device();
$device2->title_drawing='Wall';
$device2->specification_number=3;
$device2->drawing_number='TA211122';
$device2->number_of_units=2;
$device2->assembly_workshop=50;

$device3= new Device();
$device3->title_drawing='Bolt';
$device3->specification_number=1;
$device3->drawing_number='TA211120';
$device3->number_of_units=6;
$device3->assembly_workshop=50;

echo '<pre>';
var_dump($device1, $device2, $device3);
'<br/>';
echo 'Title Drawing device1:'.$device1->title_drawing."\n";
'<br/>';
echo 'Assembly Workshop device2:'.$device2->assembly_workshop."\n";
'<br/>';
echo 'Drawing Number device3:'.$device3->drawing_number."\n";
'<br/>';

