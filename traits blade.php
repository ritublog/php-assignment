<?php
//Traits are declared with the trait keyword.
trait sayWorld {
  public function sayHello() {
    echo "Hello "; 
  }
}

class base {
  use sayWorld;
}

$obj = new base();
$obj->sayHello();
?>
