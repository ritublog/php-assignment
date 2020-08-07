<?php
//Define class 
class Animal
{
  //declaring properties
  
  public $name = 'Ritu';
  protected $color = 'Black';
  private $breed = 'Bulldog';
  
  // define methods
  
  public function show()
  {
    echo $this->name;
    echo $this->color;
    echo $this->breed;
  }
}

class Dog extends Animal
{
   // We can redeclare the public and protected properties, but not private
   
    public $name = 'Ritu';
    public function show()
  {
    echo $this->name;
    echo $this->color;
    echo $this->breed;
  }
}

$dog = new Animal();
$dog1 = new Dog();
echo $dog->name;
echo $dog->color;
echo $dog->breed;
$dog1->show();

?>
