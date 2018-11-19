<html>
<head>
  <style type = "text/css">

  body{
    background: url("./as3.jpg");
    background-size: cover;
  }
  div.meh{
    position: absolute;
    left: 400px;
    width: 700px;
    height: 100px;
    position:relative;
    top:20px;
    color: #ffffff;
    font-size: 18px;
    font-family: serif;
    background-color: #212d3f;
    background-size: cover;
  }

  div.imgDiv{
    position: absolute;
    left: 20px;
    height:400px;
    width: 700px;
    position: relative;
    top: 30px;
  }

  div.desc{
    position: absolute;
    left: 500px;
    top:30px;
    width:100px;
  }

    div.navbar{
      text-align: center;
      position: fixed;
      font-style: serif;
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
      width: 160px;
    }

    div.nav{
      padding:13px;
      height:30px;
      font-style: serif;

    }
    div.nav:hover{
      background-colobackground-size: cover;
      background-position: center;
      background-color: #067c74;
    }


  div.total{
    position:relative;
    left: 900px;
    font-size: 20px;
    font-family: sans;

    top: 70px;
    color:#000000;
  }
  #buy{
    background-color: #067c74;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;


  }

  </style>
</head>

<body>
  <?php
  $cat = "electronics";//$_GET['category']

  $conn = new mysqli("localhost", "admin", "admin4321", "WTproject");

  $mysqlquery = "SELECT * FROM cart";
  $result = $conn -> query($mysqlquery);

  //echo $conn -> error;
  $sum = 0;
    while($row = $result -> fetch_assoc()){
      //print_r($row);
      $link = $row['pname'];
      $descr = $row['price'];
      $sum = $sum + $descr;
    echo "<div class = \"meh\"><div class = \"imgDiv\">$link";
    echo "</div><div class = \"desc\"> $descr </div> </div>";

    echo "<br><br>";
  }


   ?>

   <div class = "meh" style="background-color:#000000;height:380px;">
   <div class = "imgDiv">total amount: </br></br>   <span style="text-align:right"> <?php echo "Rs. ".$sum?> </span>


    <form action="buy.php" method="post">
    </br></br>
    Name: &nbsp;&nbsp;&nbsp;<input type="text" style="width:500px;background-color:#d3d3d3" name="name"><br></br></br>
    Address: <input type="text" style="height:100px;width:500px;background-color:#d3d3d3" name="address"><br></br>
    <input id= "buy" value = "Buy" type="submit">
    </form>
</div>
      <div class = "navbar" style="font-style:serif;">

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
