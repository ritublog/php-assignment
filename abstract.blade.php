<?php

// Abstract Class

abstract class New
{
 public function disp()
 {
  echo "simple method";
 }
  // Declare Method
  abstract function absmethod();
}
class Old extends New
{
  public function absmethod()
  {
    echo "abstract method";
   }
 }
 $obj = new Old;
 $obj = absmethod();
 ?>
  
