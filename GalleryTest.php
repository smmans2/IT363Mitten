<!DOCTYPE html>
<html>

<!doctype html>
<html lan="en"><head>
		<meta charset="utf-8">
		<title>Mitten Distribution</title>
		<style type ="text/css">
		*
		{
			margin:0px;
			padding:0px;
			
			
		}
		.navigation
		{
			overflow: hidden;
			background-color: #18453B;
			position: fixed;
			top: 0;
			width: 100%;
		}
		.navigation a
		{
			float: left;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 19px;
		}
		.navigation a:hover
		{
			background-color: white;
			color: black;
		}
		
		.naviagation a:active 
		{
			background-color: #04AA6D;
			color: white;
			height: 1500px;
		}
		.card {
			padding: 4rem;
			box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
			max-width: 300px;
			margin: auto;
			text-align: center;
			font: Impact, fantasy;
			float: left;
			
			
		}



		.card button 
		{
			border: none;
			outline: 0;
			padding: 12px;
			color: white;
			background-color: #000;
			text-align: center;
			cursor: pointer;
			width: 100%;
			font-size: 18px;
		}

		.card button:hover {
			opacity: 0.7;
		}
			</style> 
		
	</head>

<body>
<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "admin";
 $dbpass = "admin";
 $db = "product_information";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
  
?>
      <div class="navigation">
            <a class="active" href="homepage.html">Home</a>
            <a href="Contact.html">Contact</a>
            <a href="Gallery.html">Products</a>
            <a href="Survey.html">Survey</a>
      </div>
	  
	  <div class="card"></div>
		
		
	
	   