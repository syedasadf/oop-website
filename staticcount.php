<?php
  
class cal {
      
    static $count;
      
    public static function getCount() {
        return self::$count++;
    }
}
  
cal::$count = 1;
  
for($i = 0; $i < 5; ++$i) {
    echo 'The next value is: '. 
   
    cal::getCount();
    echo "<br>";
}
  
?>