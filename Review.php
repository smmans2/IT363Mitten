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
		
		
		.commentsection {
			font-size: 30px;
			padding: 15px;
			background-color: lightgray;
			text-align: center;
		}
		
		.commentcontent {
			font-size: 20px;
			padding: 15px;
			background-color: lightgray;
			float: left;
			font: Impact, fantasy;
			width: 100%;
		}
		
			</style> 
		
	</head>

<body>

 
       <div class="navigation">
            <a class="active" href="homepage.php">Home</a>
            <a href="Contact.php">Contact Us</a>
            <a href="Products.php">Products</a>
            <a href="Review.php">Reviews</a>
      </div>
	  
	 
		<div class="contactmessage">

		<body>

		<h3>Contact Form</h3>

        <fieldset>  
		<div class="container">
			<form name = "frmSurvey" method="post" action = "survey.php">
				<label for="firstName">First Name</label>
				<input type="text" id="firstName" name="firstname" placeholder="Your name">

				<label for="lastName">Last Name</label>
				<input type="text" id="lastName" name="lastname" placeholder="Your last name">
				
				<label for="email">"Email"</label>
				<input type="text" id="email" name="email" placeholder="Your email">
				
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Please leave your comment here" style="height:200px"></textarea>

                <input type="submit" name="Submit" ad="Submit" value="Submit">
			</form>
			</fieldset>
			
</div>

<div class = "commentsection">

	<body>
	
	<h4> Our Community </h4>
</div>

<div class = "commentcontent">

	<h5> Amanda Smith <br></h5>
		<p> I really loved the products that Mitten gave to us! <br> </p>
		
	<h5> Danny Hodge <br> </h5>
		<p> The customer service that I recieved from Mitten blew my socks off.<br> </p>
		
	<h5> Andrew Franklin <br> </h5>
		<p> The cannabis tray that Mitten provided me, revolutionized to my smoking experiences.<br> </p>

</div>
<?php
$conn = mysqli_connect("localhost", "admin", "admin","mitten");
if (mysqli_connect_errno())
{
    echo "Fail lol" . mysqli_connect_error();
}
echo "Good Job"."<br><br><br><br>";
// get the post records
$txtfname = $_REQUEST['firstname'];
$txtlname = $_REQUEST['lastname'];
$txtemail = $_REQUEST['email'];
$txtcomment = $_REQUEST['comment'];
echo $txtfname, $txtlname;
// database insert SQL code
$sql = "INSERT INTO survey  VALUES ('$txtfname', '$txtlname', '$txtemail', '$txtcomment')";
if(mysqli_query($conn, $sql))
{
	echo "New Record Added";
}
else 
{
	echo "Error";
}
?>
</body>
</html>