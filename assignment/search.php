<!DOCTYPE html>
<html>
<?php
		if(isset($_POST['submit'])){
			if(isset($_GET['go'])){
				if(preg_match("^/[A-Za-z]+/",$_POST['name'])){
					$name=$_POST['submit'];
				}
				$conn = new mysqli("localhost", "admin", "admin4321", "WTproject");
				$prod="SELECT pName,id FROM products WHERE pName LIKE '%".$name."%'";
				$result=mysql_query($prod);
				if (mysql_num_rows($result!=0)){
					$list=mysql_fetch_assoc($result)){
						$pName=$row['pName'];
						$ID=$row['id'];
						$CATEGORY=$row['category'];
					}
					echo "<p>Search Results</p>"
					echo "<ul>\n";
					echo "<li>"."<a href=\"categorypage.php?item=$ID\">".$pName."</a></li>";
					echo "</ul>";
				}
				else{
					echo "<p>Search Results</p>";
					echo "<p>No result found</p>";
				}

			}
		}

?>
<head http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
	ul li{
		list-style-type: none;
	}
	a{
		text-decoration: none;
		color: black;
	}
</style>
</head>
<body>
	<form method="post" action="search.php" id="searchform">
		<input type="text" name="item">
		<input type="submit" name="submit" value="Search">
	</form>
	<p>Search result</p>
</body>
</html>
