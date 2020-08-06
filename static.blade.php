// static method

# Static methods or properties are declared with the static keyword


<?php
class box {
  public static function New() {
    echo "Hello";
  }
}

// Call static method
box::New();
?>

//static propertise

<?php
class ab {
  public static $value = 3.14159;
}

// Get static property
echo ab::$value;
?>
