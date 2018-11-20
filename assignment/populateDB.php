<?php
$conn = new mysqli("localhost", "admin", "admin4321");

//create a database  first.
//$conn -> query("CREATE DATABASE WTproject;");

$conn->close();

$conn = new mysqli("localhost", "admin", "admin4321", "WTproject");
/*$x = $conn -> query("CREATE TABLE testProducts1(id INT(6) NOT NULL,
name VARCHAR(30) NOT NULL)");
if ($x === TRUE){
  echo "database created successfully";
}
else{
echo "error:".$conn->error;
}
*/
$x = $conn -> query("INSERT INTO testProducts1(id, name) VALUES (2313, 'when will i die')");
$x = $conn -> query("INSERT INTO testProducts1(id, name) VALUES (3153, 'waht the fuc')");
if ($x !== TRUE){
   echo $conn -> error;
 }

//$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn -> query("SELECT * FROM testProducts1");
if ($results !== TRUE){
  echo $conn -> error;
}
echo $result -> mysql_num_rows;
//if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result -> fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["name"]."<br>";
      }
//} else {
//     echo "0 results";*/
//}?>
