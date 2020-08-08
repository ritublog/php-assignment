<?php

//create connection

$connection= new mysqli($servername, $usrename, $password, $dbname

// check connection

if ($connection->connect_error) 
{
  die("Connection failed: " . $connection->connect_error);
}

// prepare and bind

$sql = "INSERT INTO People(username,gender, country) VALUES (?, ?,?)";
$stmt = $connection->prepare($sql);

// s = string

$stmt->bind_param("sss", $u, $g, $c); // bind variable

// set parameters and execute

$u = 'Anton';
$g = 'm';
$c = 'sweden';
$stmt->execute() // excute the prepared statment

$u = 'Juhi';
$g = 'm';
$c = 'sweden';
$stmt->execute() // excute the prepared statment again 

$stmt->close();            //close the prepared statment
$stmt->connection();         //close the database connection

?>
