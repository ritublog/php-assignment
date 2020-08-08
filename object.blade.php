<?php

class Mobile
{
  public $model; // properties
  
  function showmodel($number)
  {
    $this->model = $number;
    echo "Model no is: $this->model <br>";
  }
}

//create object

$samsung = new Mobile();
$samsung->showmodel(A5);
$oppo = new Mobile();
$oppo->showmodel(A1);
?>
