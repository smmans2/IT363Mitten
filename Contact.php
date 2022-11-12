<!DOCTYPE html>
<html>

<!doctype html>
<html lan="en">

<head>
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
			padding: 16px 24px;
			text-decoration: none;
			font-size: 23px;
		}
		.navigation a:hover
		{
			background-color: white;
			color: black;
		}
		
		.naviagation a:active {
			background-color: #04AA6D;
			color: white;
			height: 1500px;
		}
		* {box-sizing: border-box;}

		input[type=text], select, textarea {
			width: 50%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
			text-align:center;
		}

		input[type=submit] {
			background-color: #18453B;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			text-align:center;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}
		body{
			background-color: #CFDDC8;
		}

		.container 
		{
			height:100%;
			background-color: #CFDDC8;
			padding: 50px;
			text-align:center;
		}
		.header
		{
			padding-top: 20px;
			width: 100%;
			min-height: 50px;
			font-size: 50px;
			font-family: Impact;
			text-align: center;
			margin: auto;
			
			
		}
		.subtext
		{
			padding-top: 10px;
			padding-bottom:20px;
			width: 100%;
			font-size: 25px;
			font-family: Impact;
			text-align: center;
			margin: auto;
			
			
		}
		
			</style> 
		
	</head>

<body>

 
       <div class="navigation">
            <a class="active" href="homepage.php">Home</a>
            <a href="Contact.php"style="background:white; font-size:23px;color: #18453B;">Contact Us</a>
            <a href="Products.php">Products</a>
            <a href="Review.php">Reviews</a>
	</div>

	  
	  <div class="contactmessage">

		<body>
		<fieldset>
		<div class="container">
		<div class="header">
			<b>Get a quote</b>
		</div>
		<div class="subtext">
			<b>Please provide the information below and we will get back to you with a quote as soon as possible</b>
		</div>
			<form name = "frmContact" method="post" action="contact.php">
				<label for="fname">First Name</label><br>
				<input type="text" id="fname" name="fname" placeholder="First name"><br>

				<label for="lname">Last Name</label><br>
				<input type="text" id="lname" name="lname" placeholder="Last name"><br>
				
				<label for="email">Email</label><br>
				<input type="text" id="email" name="email" placeholder="Email"><br>
				
				<label for="pnumber">Phone Number</label><br>
				<input type="text" id="pnumber" name="pnumber" placeholder="Phone Number"><br>
				
				<label for="services">Types of services needed:</label><br>
				<input type="text" id="services" name="services" placeholder="Services"><br>

			

				<label for="subject">Usefull Information</label><br>
				<textarea id="subject" name="subject" placeholder="Provide us any further information you think is important" style="height:200px"></textarea><br>

			<input type="submit" name="Submit" ad="Submit" value="Submit">
			</form>
			</fieldset>
		
<?php
$conn = mysqli_connect("localhost", "admin", "admin","mitten");
if (mysqli_connect_errno())
{
    echo "Connection Error" . mysqli_connect_error();
}
// get the post records
@$txtfname = $_REQUEST['fname'];
@$txtlname = $_REQUEST['lname'];
@$txtemail = $_REQUEST['email'];
@$txtpnumber = $_REQUEST['pnumber'];
@$txtservices = $_REQUEST['services'];
@$txtsubject = $_REQUEST['subject'];
// database insert SQL code
$sql = "INSERT INTO contactInformation  VALUES ('$txtfname', '$txtlname', '$txtemail', '$txtpnumber', '$txtservices', '$txtsubject')";
if(mysqli_query($conn, $sql))
{
	echo "Submitted!";
}
else 
{
	echo "Error";
}
?>

</div>
	</div>

</body>
</html>




