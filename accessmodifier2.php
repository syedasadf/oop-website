<?php
 
class person {
 
  private $model;
 
  public function setModel($model)
  {
    $this -> model = $model;
  }
  
  public function getModel()
  {
    return "The  model is  " . $this -> model;
  }
}
 
$mercedes = new person();
$mercedes -> setModel("eshaal fatima");
echo $mercedes -> getModel();
 
?>
