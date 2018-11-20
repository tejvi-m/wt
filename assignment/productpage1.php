<html>
<head>
  <style type="text/css">
  div.titlebar{
    position: fixed;
    top : 0px;
    height:50px;
    z-index: 2;
    color:white;
    width: 100%;
    text-align: center;
    background-color: black;
    font-size: 30px;
    font-family: serif;
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
      z-index: -1;
    }

    #cart{
      background-color: #067c74;
      border: none;
      color: white;
      padding: 16px 32px;
      text-decoration: none;
      margin: 4px 2px;
      cursor: pointer;


    }

    body{
      background: url("./as3.jpg");
      background-position: center;
      background-size: cover;
    }
  div.product{
    position: absolute;
    padding:20px;
    top:150px;
    left:400px;
    color: white;
    height: 500px;
    width: 600px;
    background-color: #000000;
  }

  div.image{
    position: absolute;
    padding: 10px;
    top: 80px;
    left: 40px;
  }

  div.description{
    position: absolute;
    top: 200px;
    left:400px;
  }

  #bg{
    background-size: cover;
    background-position: center;
  }
  </style>

  <?php

  $ID = $_GET['item'];
  $conn = new mysqli("localhost", "admin", "admin4321", "WTproject");

  $mysqlquery = "SELECT * FROM products WHERE id = $ID";
  $result = $conn -> query($mysqlquery);
  $row = $result -> fetch_assoc();
  $imgLink = $row['imglink'];
  $productName = $row['pName'];
  $price1 = $row['price1'];
  $price2 = $row['price2'];
  $dept = $row['dept'];
  $description = $row['description'];
   ?>

</head>
<body>

   <div class = "titlebar" style="z-score:2">

     SuperDesi
   </div>

  <div class = "product">
    <div class = "image">
         <img id = "hell" src = "<?php echo $imgLink?>" height = "400px" width = "300px">
    </div>
     <div class = "description">
       <h3> <?php echo $productName?> </h3>
       <?php echo $description ?>
       <br><br><br><br>
       <h4> Rs. <span style="text-decoration:line-through;"> <?php echo $price1?> </span> <?php echo $price2?>  </h4>
   </br>
   <button id="cart"> Add to cart </button>
 </div>

</div>
<script>
  function addToCart(e){
    <?php
    $intprice = (int) str_replace(",", "", $price2);
    $q = "INSERT INTO cart(id, pname, price) VALUES($ID, \"$productName\", $intprice)";
    $conn -> query($q);
    echo $conn -> error;
     ?>
     window.alert('entered to cart');
     console.log("entered to cart i think");

  }
  var ele = document.getElementById("cart");
  ele.addEventListener("click", addToCart);
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
