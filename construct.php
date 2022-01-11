<?php

class data{

public $name , $age , $email;
function __construct($name , $age , $email)
{

$this->name=$name;
$this->age=$age;
$this->email=$email;

}

function show()
{

	echo $this->name . "-" . $this->age . "-" . $this->email . "<br>";
}



}

$d1= new data("sadaf" , 29,"engr_syedasadaf@yahoo.com");
$d2= new data("ali" , 31,"ali@yahoo.com");
$d3= new data("eshaal" , 12,"eshaal@yahoo.com");
$d4= new data("sufian" , 35,"sufian@yahoo.com");

//$d->name="sadaf";
//$d->age=29;

$d1->show();
$d2->show();
$d3->show();
$d4->show();



?>