<?php
$conn = new mysqli("localhost", "admin", "admin4321", "WTproject");

//$conn -> query("CREATE TABLE products(id INT(6) NOT NULL,dept VARCHAR(20) NOT NULL, pName VARCHAR(50) NOT NULL,
//price1 VARCHAR(15) NOT NULL, price2 VARCHAR(15) NOT NULL, description VARCHAR(300) NOT NULL, imglink VARCHAR(40) NOT NULL)");


//$conn -> query("CREATE TABLE cart(id INT(6) NOT NULL, pname VARCHAR(30) NOT NULL, price INT(15) NOT NULL)");
$conn -> query(" TRUNCATE products");
$conn -> query(" TRUNCATE cart");
$x = $conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(1, 'Phones', 'Razer Phone', '120,000', '90,000', '64 GB memory<br>8 GB RAM<br>Black<br>', './raz.jpg')");
if ($x !== TRUE){
  echo $conn -> error;
}

$conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(2, 'Phones', 'Iphone', '120,000', '70,000', 'its a laptop  i dont really care though', './as7.jpg')");
if ($x !== TRUE){
  echo $conn -> error;
}


$conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(45, 'Books', 'Born A Crime by Trevor Noah', '400', '250', 'bleh', './images/tn.jpg')");

$conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(46, 'Books', 'Surely Youre Joking Mr Feynman', '499', '310', 'bleh', './images/feyn.jpg')");

$conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(15, 'Phones', 'Lenovo Z5 Pro', '9000', '8475', '16MP+8MP camera<br>6 GB RAM<br>Black<br>', './images/len.bmp')");
$conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(16, 'Phones', 'Panasonic P85 NXT', '10000', '8600', '16 GB memory<br>2 GB RAM<br>Black<br>', './images/pan.bmp')");
$conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(17, 'Fashion', 'Leather Jacket', '8000', '7200', 'Pure Leather<br>Front Zip<br>Black<br>', './images/lj.jpg')");
$conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(18, 'Fashion', 'Flared Pants', '1599', '1200', 'Red<br>Two pockets<br>97% Polyester and 3% spandex <br>', './images/fp.jpg')");
$conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(19, 'electronics', 'Speakers', '5000', '4260', 'Red<br>Speakers<br>Bluetooth connectivity <br>', './images/speaker.png')");
$conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(20, 'electronics', 'Pen Drive', '500', '293', 'San Disk<br>USB<br>16 GB <br>', './images/pendrive.jpg')");
$conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(21, 'Books', 'The Day of the Locust', '430', '380', 'Nathanael West  <br>', './images/locust.jpg')");
$conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(22, 'Books', 'Ask The Dust', '513', '490', 'John Fante  <br>', './images/dust.jpg')");
$conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(23, 'Beauty', 'MAC Ruby Woo', '1500', '1250', 'Red Lipstick  <br>', './images/rubywoo.jpg')");
$conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(24, 'Beauty', 'Lakme Mascara', '360', '300', 'Black Mascara  <br>', './images/mascara.jpg')");
$conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(25, 'Accessories', 'Oxidised Black Necklace', '999', '399', 'Silver toned black necklace  <br>', './images/neck.jpg')");
$conn -> query("INSERT INTO products(id, dept, pName, price1, price2, description, imglink) VALUES
(26, 'Accessories', 'Metal Necklace', '700', '594', 'metal  <br>', './images/neck1.jpg')");

$result = $conn -> query("SELECT * FROM products");
while($row = $result -> fetch_assoc()){
  print_r($row);
}/**/
 ?>
