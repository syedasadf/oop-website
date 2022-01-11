<?php
 
class person {
 
  public $model;    
 
  public function getModel()
  {
    return "The  model is " . $this -> model;
  }
}
 
$mercedes = new person ();

$mercedes -> model = "eshaal";

echo $mercedes -> getModel();
?>