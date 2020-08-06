<?php 
class BaseClass
{
  public function XYZ
  {
    echo "Super Class <br>";
  }
}
  class DerivedClass extends BaseClass
  {
    // override the method XYZ() of base class
    public function XYZ
    {
      echo "Drived Class <br>";
    }
  }
$obj1 = new BaseClass;
$obj1->XYZ();
$obj2 = new DerivedClass;
$obj2->XYZ();
?>
