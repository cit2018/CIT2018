
<!DOCTYPE HTML>
<HTML lang="en">
<HEAD>
<title>GAP HARDWARE Validation page</title>
		<meta charset="UTF-8">
		<link rel ="stylesheet" type="text/css" href ="style1.css">

</HEAD><!--Head-->
<body>

<?php

	session_name('users');
	session_start(); 
	
	if (empty($_GET['username']) || empty($_GET['password']) || empty($_GET['password']))
	die("You need to enter a abn , username and a password."); 
	$abn=$_GET['abn']; 
	$username=$_GET['username'];
	$password=$_GET['password'];
	
	
	//open the server connection
	require 'dbConnectHardwarestore.php'; 
	//Check to see if a valid username & password exists
	$sql = "SELECT username FROM users WHERE  username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql) or die("Error reading users - ".mysqli_error($conn));
	$numrows = mysqli_num_rows($result);
	//there should be exactly one row with the correct abn, username and password
	if ($numrows == 1)
	{
		//get the username
		 $row = mysqli_fetch_array($result);
		 
		
		$_SESSION['username'] = $username;
		
		
		/* echo "<a href=\"./Products.html?username=$username\">Products</a>"; */
	}
	else
	{
		echo 'The id or password was incorrect';
		
	}

	
?>

<div class="content"> 
	<header>

		 <div class ="logo"> 
		<img id ="logoimg" src=".\Images\GAPHardware.png" alt="AHlogo" style="width:110px"> 
		 
		</div> <!--logo--> 
		
		
		<div class ="menu">
			
			<nav>
					
					<a href ="./home.html">Home</a >
					<a href="./AboutUs.html">About Us</a>
					<a href="./ContactUs.html"> Contact Us</a>
					<a href="./all-products.html">Products</a> 
					<a href="./Help.html"> Help</a>
					<a href="./Login.html" style="float:right;"> Login</a>
					
				
			</nav>
		</div><!--menu-->

	</header>
<div class="middle"> <p> </p><div><p> </p><div><p> <div></div></p>  <div> <p> </p></div><p></p><p> </p>  </div></div><p></p>
<!-- middle div-->

<div class="paraclass">
				<div id ="border">
				<p align="center"> 
				<a href="./General_Hardware.html">GeneralHardware</a><br/>
					<br/><br/>
					<span>StanleyClawHammer $48.90</span><img src="./Images/StanleyClawHammer.jpg" alt="StanleyClawHammer" style="width:20%" /></a> <br/>
					<span>Stanley20pc $28.99</span><img src="./Images/Stanley20pc.jpg"  alt="Stanley20pc" style="width:20%" /><br/>
					
					<span>StanleyBitSet $29.80</span><img src="./Images/StanleyBitSet.jpg"  alt="StanleyBitSet" style="width:20%" /><br/>
					<span>TrojanWrench $17.99</span><img src="./Images/TrojanWrench.jpg"  alt="TrojanWrench" style="width:20%" /><br/>
					</p>
					<p align="center">
					<a href="./Power_Tools.html">Power Tools</a><br/>
					<br/><br/>
					<span>RyobiImpact $153.00</span><img src="./Images/RyobiImpact.jpg"  alt="RyobiImpact" style="width:20%" /><br/>
					<span>RyobiCircular $115.00</span><img src="./Images/RyobiCircular.jpg"  alt="RyobiCircular" width="20%" /><br/>
					<span>RyobiJigsaw $89.00</span><img src="./Images/RyobiJigsaw.png"  alt="RyobiJigsaw" style="width:20%" /><br/>
					<span>RyobiBandsaw $279.00</span><img src="./Images/RyobiBandsaw.jpg"  alt="RyobiBandsaw" style="width:20%" /><br/>
					</p>
					<p align="center">
					<a href="./Garden_Tools.html">Garden Tools</a><br/>
					<br/><br/>
					<span> RyobiBlowerVac $44.00</span><img src="./Images/RyobiBlowerVac.png"  alt="RyobiBlowerVac" style="width:20%" /><br/>
					<span>RyobiBrushcutter $219.00</span><img src="./Images/RyobiBrushcutter.jpg"  alt="RyobiBrushcutter"style="width:20%" /><br/>
					<span>RyobiPruner $173.00</span><img src="./Images/RyobiPruner.png"  alt="RyobiPruner" style="width:20%" /><br/>
					<span>VictaLawnmower $702.00</span><img src="./Images/VictaLawnmower.jpg"  alt="VictaLawnmower" style="width:20%" /><br/>
					</p>
			</div>
			</p>
			
				<a href="#top" target="_self" >Back to top</a>
			</p>
			
</div><!-- paraclass div-->
		
	
<footer >

	<div class ="bottom">

		<p style="background-color:rgb(67,70,75); color:white;"> &copy; All Copy rights reserved
		<!-- <p> &copy; All Copy rights reserved</p> -->
		<img src="./Images/twitter.jpg" alt="twitter" style="width:30px"/>&emsp;<img src="./Images/fb.jpg" alt="fb" style="width:30px"/></p>
	</div>
</footer><!--footer-->

</div>
</div>
</BODY>
</HTML>
