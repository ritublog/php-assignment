# inheritence

<?php
// Base class or Super class
class Box
{
  public $a;
  public $b;
  function getvalue($x,$y)
  {
    $this->a = $x;
    $this->b = $y;
  }
}

//Subclass or Derived Class

 class NewBox extends Box
 {
  function display()
  {
    echo "value of A: $this->a <br>";
    echo "value of B: $this->b <br>";
  }
 }
 $obj = new NewBox;
 $obj = getvalue(5,10);
 $obj = display();
 ?>
