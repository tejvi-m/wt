<html>
<head>
  <style type = "text/css">
  div.titlebar{
    position: fixed;
    top : 0px;
    height:50px;
    z-index: 1;
    color:white;
    width: 100%;
    text-align: center;
    background-color: black;
    font-size: 30px;
    font-family: serif;
  }


  div.meh{
    padding: 10px;
    width: 310px;
    left: 10px;
    height: 450px;
    position:relative;
    top:10px;
    background-color:#000000;
    color: white;
text-align: center;
    border: 2px solid #00000;
  }

  div.bleh{
    position: relative;
    left:350px;
    top:50px;
    height:451px;
    width:900px;

  }
div.main{
  position: absolute;
  height: 100%;
  width: 100
}
  div.meh1{
    color: white;
    padding:10px;
    width: 310px;
    right: 10px;
    height:450px;
    position:absolute;
    top:10px;
    background-color:#000000;
    text-align: center;
    border: 2px solid #000000;
  }
  div.imgDiv{

    padding:10px;
  }

  div.desc{
        position: absolute;
    left:100px;
    text-align:center;
    top:420px;
  }

  div.navbar{
    text-align: center;
    position: fixed;
    left: 0px;
    top: 0px;
    width: 160px;
    height: 700px;
    color:white;
    background: black;
    z-index: 2;
    }

  .link1{
    text-decoration: none;
    color: white;
  }

  div.nav{
    padding:13px;
    height:30px;

  }
  div.nav:hover{
    background-colobackground-size: cover;
    background-position: center;
    background-color: #067c74;
  }
  #image{
    position: fixed;
    background-size: cover;

  }
  </style>
</head>
<body>
  <div class = "titlebar"><?php
  $cat = $_GET["category"];
 echo $cat;
?>
</div>
  <img src = "./as3.jpg" id="image"> </img>



  <?php
  $cat = $_GET["category"];

  echo $cat;
  $conn = new mysqli("localhost", "admin", "admin4321", "WTproject");

  $mysqlquery = "SELECT * FROM products WHERE dept = \"$cat\"";
  $result = $conn -> query($mysqlquery);

  //echo $conn -> error;
  $index = 0;
    while($row = $result -> fetch_assoc()){
      //print_r($row);
      $link = $row['imglink'];
      $descr = $row['pName'];
      $id = $row['id'];


    if($index % 2 == 0){
    echo "<div class =\"bleh\"><div class = \"meh\"><div class = \"imgDiv\"><img src = '$link' height=\"400px\" width=\"300px\"></img>";
    echo "</div><div class = \"desc\"> </br><a class=\"link1\" href = \"./productpage1.php?item=$id\">$descr</a> </div> </div>";
  }
  else{
    echo "<div class = \"meh1\"><div class = \"imgDiv\"><img src = '$link' height=\"400px\" width=\"300px\"></img>";
    echo "</div><div class = \"desc\"> </br><a class=\"link1\" href = \"./productpage1.php?item=$id\">$descr</a></div> </div></div><br><br>";
  }
  $index += 1;

  }
  if($index % 2 == 1){
    echo "</div>";
  }


   ?>


   <script>
   console.log(<?php echo $cat?>);
   </script>
  <div class = "navbar">

    <div class="nav"><a class = "link1" href = "./homepage.html">Home</a></div></br>
    <div class="nav"><a class = "link1" href = "./aboutus.html">About Us</a></div>
  </br>
    <div class="nav"><a class = "link1" href = "./categorypage.php?category=electronics">Laptops</a></div>
  </br>
    <div class="nav"><a class = "link1" href = "./categorypage.php?category=Phones">Phones</a></div>
  </br>
    <div class="nav"><a class = "link1" href = "./categorypage.php?category=Books">Books</a></div>
  </br>
    <div class="nav"><a class = "link1" href = "./categorypage.php?category=Beauty">Health and Beauty</a></div>
  </br>
    <div class="nav"><a class = "link1" href = "./categorypage.php?category=Accessories">Accessories</a></div>
  </br>
  <div class="nav"><a class = "link1" href = "./categorypage.php?category=Fashion">Fashion</a></div>

</br>
  <div class = "nav"><a class = "link1" href = "./cart.php">Cart</a></div>
  </br>
  <div class = "nav"><a class = "link1" href = "./contact.php">Contact</a></div>
  </br>

  </div>


</html>
