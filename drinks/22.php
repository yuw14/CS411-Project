<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
?>
<html >
	<head>
		<title>Winter Melon Tea Cap</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main2.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>


	<body id="top" >

		<!-- Header -->
				<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="../assets/images/avatar.jpg" alt="" /></a>
					<h1><strong>Hi <?php Print "$user"?>!</br></br></h1>
					<h2><a href="../select.php" style="text-decoration:none;">Search</strong></a></h2>
					<h2><a href="../edit.php" style="text-decoration:none;">Setting</strong></a></h2>
					<h2><a href="../rate.php" style="text-decoration:none;">Rate</strong></a></h2>
					<h2><a href="../recommendations.php" style="text-decoration:none;">Recommend</strong></a></h2>
					<br><br><br>

 				 	<h5><a href="../index.php">Log out</strong></a></h5>
 				</div>
			</header>

		<!-- Main -->
			<div id="main">

					<!-- One -->
					<section id="one">
						<header class="major">
							<h2>Winter Melon Tea Cap<br />
							 </h2>
						</header>

									<div class="12u$"><span class="image fit"><img src="../assets/images/thumbs/22.png" alt="" /></span></div>
									
								
						</section>


	<section>
	<div class="table-wrapper">
		<table class="alt">
			<thead>
				<tr>
					<th>Store</th>
					<th>Price</th>
				</tr>
			</thead>
		<tbody>
			<?php
				
					$link = mysqli_connect("localhost", "root", "", "first_db");
					$result = mysqli_query($link, "select distinct storeName, location, price from sells natural join stores where drinkID = 1"); 
					while($row = mysqli_fetch_array($result)){
						Print "<tr>";
						Print '<td align="center">'. $row['storeName']."</td>";
						Print '<td align="center">'. $row['location']."</td>";
						Print '<td align="center">'. $row['price']."</td>";
						Print "</tr>";
					}
				
			?>
									</tbody>
									
								</table>
							

			</section>


	<section>
						<h2>Recipe</h2>

						
							<h4>Step 1</h4>
							<p>Wash the winter melon carefully and then remove the skins. Then cut the left part into small cubes. Throw them into a large pot.</p>
							<h4>Step 2</h4>
							<p>Spread brown sugar powder and give a big stir to mix them evenly. Set aside for around 1 hour until there is a thin layer of water in the bottle.</p>
							<h4>Step 3</h4>
							<p>Use high fire to bring everything in the pot to a boiling and then add rock sugar. (I would suggest adding the skins and seeds back in this step. But it is totally up to you) Slow down the fire to simmer for 1.5 hours to 2 hours based on your cooking ware until the winter melon is totally transparent. Turn off the fire and wait to cool down.</p>
							<h4>Step 4</h4>
							<p>Strain the juice out. And press the winter melon with heavily during the process to get as more juice as possible. Or you can use gauze to wrap the winter melon and squeeze the juice out.</p>
							<h4>Step 5</h4>
							<p>How to store: store in airtight container and refrigerate up to 2 weeks, as there is no preservatives in our homemade version.</p>
							<h4>Step 6</h4>
							<p>How to serve: add water three times more than the juice to make an easy winter melon tea whenever you want. Add some iced cubes will make it a perfect summer drink.</p>

	</section>


    <hr style="margin-top: 100px;">
    </div>
			</div>

		
 
	</body>
</html>