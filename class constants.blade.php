<?php

//Define class constant

class Animal
{
  //declaring properties
  
  public const NAME = 'Ritu';
  public const COLOR = 'Black';
  protected $breed = 'Bulldog';
  
  // define methods
  
  public function getcolor()
  {
    return self::COLOR;
  }
}

$dog = new Animal;
echo Animal::NAME;
echo "<br>";
echo $dog->getcolor();

?>
