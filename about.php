<?php
  include 'nav-bar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title> Aggie Coding Club </title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
	<link rel='icon' href='Images/Logo.png'></link>
</head>
<body>

  <div class="container">
  	<?php echo $nav_bar; ?>
  </div>

<main>
	<div class="container">
		<h2> About Us </h2>
		<p> Officers</p>
		<center>
		<table class="table">
			<tr>
				<td><img src="Images/about-us-photos/Michael.JPG" height="200"/></td>
				<td><img src="Images/about-us-photos/Dawson.JPG" height="200"/></td>
				<td><img src="Images/about-us-photos/Liam.jpeg" height="200"/></td>
				<td><img src="Images/about-us-photos/Colton.jpeg" height="200"/></td>
				<td><img src="Images/about-us-photos/Will.JPG" height="200"/ title = "Will Smells"></td> <!--Important mouseover test please don't remove"-->
				<td><img src="Images/about-us-photos/Alyssa.JPG" height="200"/></td>
			</tr>
			<tr>
				<td><h4><center>Michael M.</center></h4></td>
				<td><h4><center>Dawson T.</center></h4></td>
				<td><h4><center>Liam M.</center></h4></td>
				<td><h4><center>Colton W.</center></h4></td>
				<td><h4><center>Will O.</center></h4></td>
				<td><h4><center>A.A. Tyler.</center></h4></td>
			</tr>
			<tr>
				<td><p>Chief Student Leader</p></td>
				<td><p>Treasurer</p></td>
				<td><p>Project Coordinator</p></td>
				<td><p>Community Officer</p></td>
				<td><p>Project Coordinator</p></td>
				<td><p>Media Coordinator</p></td>
			</tr>
		</table>
	</center>
	</div>
</main>
</body>
</html>
