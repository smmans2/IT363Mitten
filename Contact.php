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
			padding: 14px 16px;
			text-decoration: none;
			font-size: 19px;
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
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
		}

		input[type=submit] {
			background-color: #18453B;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

		.container {
		
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 50px;
			}
		
			</style> 
		
	</head>

<body>

 
       <div class="navigation">
            <a class="active" href="homepage.php">Home</a>
            <a href="Contact.php">Contact</a>
            <a href="Gallery.php">Products</a>
            <a href="Survey.php">Survey</a>
      </div>
	  
	  <div class="contactmessage">

		<body>

		<h3>Contact Form</h3>
		
		<fieldset>
		<div class="container">
			<form name = "frmContact" method="post" action="contact.php">
				<label for="fname">First Name</label>
				<input type="text" id="fname" name="fname" placeholder="Your name">

				<label for="lname">Last Name</label>
				<input type="text" id="lname" name="lname" placeholder="Your last name">
				
				<label for="email">Email</label>
				<input type="text" id="email" name="email" placeholder="Your email">
				
				<label for="pnumber">Phone Number</label>
				<input type="text" id="pnumber" name="pnumber" placeholder="Your phone number">
				
				<label for="services">Types of services needed:</label>
				<input type="text" id="services" name="services" placeholder="Services">

			

				<label for="subject">Usefull Information</label>
				<textarea id="subject" name="subject" placeholder="Anything we should know" style="height:200px"></textarea>

			<input type="submit" name="Submit" ad="Submit" value="Submit">
			</form>
			</fieldset>
</div>
<?php
$conn = mysqli_connect("localhost", "admin", "admin","mitten");
if (mysqli_connect_errno())
{
    echo "Fail lol" . mysqli_connect_error();
}
echo "Good Job"."<br><br><br><br>";
// get the post records

$txtfname = $_REQUEST['fname'];
$txtlname = $_REQUEST['lname'];
$txtemail = $_REQUEST['email'];
$txtpnumber = $_REQUEST['pnumber'];
$txtservices = $_REQUEST['services'];
$txtsubject = $_REQUEST['subject'];
echo $txtfname, $txtlname;
// database insert SQL code
$sql = "INSERT INTO contactInformation  VALUES ('$txtfname', '$txtlname', '$txtemail', '$txtpnumber', '$txtservices', '$txtsubject')";
if(mysqli_query($conn, $sql))
{
	echo "New Record Added";
}
else 
{
	echo "Error";
}

// insert in database 

?>



</body>
</html>




