<?php
// Namespaces are declared at the beginning of a file using the namespace keyword:
namespace Html;
class Table {
  public $title = "",$numRows = 0;;
  public function msg() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html>
<body>

<?php
$table->msg();
?>

</body>
</html>

