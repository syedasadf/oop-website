<?php
   Interface Myinfo {
      public function getName();
      public function getAge();
   }
   class Mydata implements Myinfo{
      public function getName() {
            echo "My name sadaf".'<br>';
      }
      public function getAge(){
            echo "My Age 29";
      }
   }
   $obj = new Mydata;
   $obj->getName();
   $obj->getAge();
?>