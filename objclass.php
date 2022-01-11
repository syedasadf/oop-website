<?php

class calculation
{

public $a , $b, $c;

function sum()
{

$this->c= $this->a + $this->b;
return $this->c;

}
function sub()
{

$this->c= $this->a - $this->b;
return $this->c;
}
}

$c1 = new calculation();
$c1->a=30;
$c1->b=10;



$c2 = new calculation();
$c2->a=30;
$c2->b=10;



echo $c1->sum() .   "\n";
echo $c2->sub();
?>