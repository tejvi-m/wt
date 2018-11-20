<!DOCTYPE html>
<html>
<head>
	<meta name="viewport">
	<title>SuperDesi- One stop e-destination for all you need</title>


<style>
	body{
		background-image: url("project pix/bg3.jpg");
	}
	#homepage_link{
		position:absolute;
		left:550px;
	}
	ul{
		list-style-type:none;
		border:0;
		margin:0;
		overflow:hidden;
		background-color: #333333;
		position:relative;
		top:60px;

	}
	li,
	.products{
		float:left;
	}
	li,
	.products{
		display:block;
		text-align:center;
		color: white;
		padding: 16px;
		text-decoration: none;
		cursor: pointer;
		overflow: hidden;
	}
	.productsbtn, .products{
		font-size:16px;
		font-family: Times-New-Roman;
		border:none;
		outline:none;
		color:white;
		background-color: inherit;
	}
	li a{
		display:block;
		text-align:center;
		color: white;
		text-decoration: none;
	}
	.null:hover,
	#search:hover{
		background-color: #333333;
		cursor:default;
	}

	li:hover,
	.products:hover .productsbtn{
		background-color: #696969;
	}

	.products-content{
		display:none;
		position:absolute;
		background-color:#f9f9f9;
		min-width:160px;
		box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index:1;
	}

	.products-content a{
		float:none;
		color:black;
		padding:12px 16px;
		text-decoration: none;
		display: block;
		text-align: left;
	}

	.products-content a:hover{
		background-color: #ddd;
	}

	.products:hover .products-content{
		display:block;
	}
	*{
		box-sizing: border-box;
	}

	.slideshow{
		position: relative;
		top:100px;
		left:200px;
	}

	.image{
		height:250px;
		-webkit-animation-name: fade;
  		-webkit-animation-duration: 1.5s;
  		animation-name: fade;
  		animation-duration: 1.5s;
	}
	@-webkit-keyframes fade {
  		from {opacity: .4}
  		to {opacity: 1}
	}

	@keyframes fade {
  		from {opacity: .4}
  		to {opacity: 1}
  	}

  	.dot {
  		height: 15px;
  		width: 15px;
  		margin: 0 2px;
  		background-color: #bbb;
  		border-radius: 50%;
  		display: inline-block;
  		transition: background-color 0.6s ease;
  		position:relative;
  		top: 315px;
	}
	.active {
  		background-color: #717171;
}
	.left,
	.right{
		position:absolute;
		top:300px;
		width:auto;
		color:white;
		padding:16px;
		margin-top: -50px;
		font-size: 20px;
		cursor:pointer;
		border-radius: 0 3px 3px 0;
		user-select: none;
		-webkit-user-select:none;
	}

	.image{
		display:none;
	}

	.left{
		left:0px;
	}
	.right{
		right:420px;
		border-radius: 3px 0 0 3px;
	}
	.left:hover,
	.right:hover{
		background-color: rgba(0,0,0,0.4);
	}


	.full{
		position:relative;

	}

	.spam{
		position:relative;
		top:330px;
		left:115px;
	}


</style>
</head>

<script>
	var slidepos=1;
	moveslide(slidepos);
	auto(slidepos);

	function nextslide(n){
		moveslide(slidepos+=n)
	}

	function auto(slidepos){
		slidepos++;
		moveslide(slidepos);
		setTimeout(auto(slidepos), 1000);
	}

	function moveslide(n){
		var i;
  		var slides = document.getElementsByClassName("full");
  		var dots = document.getElementsByClassName("dot");
 		if (n > slides.length) {slidepos = 1;}
  		if (n < 1) {slidepos = slides.length;}
  		for (i = 0; i < slides.length; i++) {
    		slides[i].style.display = "none";
  		}
  		for (i = 0; i < dots.length; i++) {
        	dots[i].className = dots[i].className.replace(" active", "");
    	}
  		slides[slidepos-1].style.display = "block";
  		dots[slidepos-1].className += " active";
	}
	/*

	function myFunction() {
    	document.getElementById("prod_list").classList.toggle("show");
	}

	window.onclick = function(event) {
   		if (!event.target.matches('.prodcts')) {

    	var dropdowns = document.getElementsByClassName("products");
    	var i;
    	for (i = 0; i < dropdowns.length; i++) {
      		var openDropdown = dropdowns[i];
      		if (openDropdown.classList.contains('show')) {
        		openDropdown.classList.remove('show');
      		}
    	}
  	}
}
*/
</script>

<body onload="moveslide(1)">
<div class="slideshow">
	<div class="image full">
		<img src="homepagead_1.jpg" style="width:68%" onclick="window.location='./categorypage.php?category=Fashion'">
	</div>
	<div class="image full">
		<img src="homepagead_2.jpg" style="width:68%" onclick="window.location='./categorypage.php?category=electronics'">
	</div>

	<div class="left pointer" onclick="nextslide(-1)">&#10094;</div>
	<div class="right pointer" onclick="nextslide(1)">&#10095;</div>

</div>
<br/>
<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
</div>
<div class="ad">
	<img class="spam" src="./spam_1.jpg" style="width:40%" onclick="location.href = 'spam.html';">
	<img class="spam" src="./spam_1.jpg" style="width:40%" onclick="location.href = 'spam.html';">
</div>
</body>
</html>
