# The class construct

<?php
class add
{
 public $name;
 function __construct($name) 
 {
  //initializing the class properties 
   $this->name=$name; 
  }
 function show()
 {
  echo "Your Name:".$this->name;
 }
}
$add1 = new add("Ritu Sharma");
$add1 = show();
?>
