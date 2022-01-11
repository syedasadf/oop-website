<?php
class base {
    public $name ="father";
    public function calculation($a,$b){
        return $a*$b;
    }
    
}
class derived extends base{
    public $name ="son"; 
    
}
$find =new derived();
echo $find->calculation(10,5); 
?>