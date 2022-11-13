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

		.container {
		
			border-radius: 5px;
			background-color: #CFDDC8;
			padding: 50px;
			text-align:center;
			}
		
		
		.commentsection {
			font-size: 50px;
			padding: 30px;
			background-color: #CFDDC8;
			text-align: center;
		}

		.commentname {
			font-size: 35px;
			padding: 10px;
			background-color: #CFDDC8;
			text-align: center;
			float: left;
			font-family: Impact;
			width: 100%;
		}

		.commentcontent {
			font-size: 25px;
			padding: 15px;
			background-color: #CFDDC8;
			text-align: center;
			float: left;
			font-family: Impact;
			width: 100%;
		}
		.header
		{
			padding-top: 20px;
			width: 100%;
			min-height: 50px;
			background-color: #CFDDC8;
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

		.logo{
            padding: 0.5rem;
            float: right;
            width: 54px;
            margin-right: 0.75rem;
            
            
            
		}
		
		
			</style> 
		
	</head>

<body>

 
       <div class="navigation">
            <a class="active" href="homepage.php">Home</a>
            <a href="Contact.php">Contact Us</a>
            <a href="Products.php">Products</a>
			<a href="Review.php"style="background:white; font-size:23px;color: #18453B;">Reviews</a>

           
      </div>
	  
	 
		<div class="contactmessage">

		<body>

        <fieldset>
		<div class="container">
		<div class="header">
			<b>Leave a review</b>
		</div>
		<div class="subtext">
			<p>And read reviews from members of our community</p>
		</div>  
			<form name = "frmSurvey" method="post" action = "review.php">
				<label for="firstName">First Name</label><br>
				<input type="text" id="firstName" name="firstName" placeholder="First name"><br>

				<label for="lastName">Last Name</label><br>
				<input type="text" id="lastName" name="lastName" placeholder="Last name"><br>
				
				<label for="email">Email</label><br>
				<input type="text" id="email" name="email" placeholder="Email"><br>
				
				<label for="comment">Comment</label><br>
				<textarea id="comment" name="comment" placeholder="Please leave your comment here" style="height:200px"></textarea><br>

                <input type="submit" name="Submit" ad="Submit" value="Submit">
			</form>
			</fieldset>
			
</div>

<div class = "commentsection">

	<body>
	
	<h4> Our Community </h4>
</div>

<div class = "commentname">
	<h5>Debi, Michigan<br></h5>	
</div>
<div class = "commentcontent">
	<p>"Mitten had the best customer service I have ever experienced in this industry! Cole was awesome!"<br> </p>
	
</div>



<div class = "commentname">
	<h5>David, Indiana<br></h5>	
</div>
<div class = "commentcontent">
	<p>"Chris was able to expedite delivery of my bulk containers and keep our production line up and running!"<br> </p>
	
</div>



<div class = "commentname">
	<h5>John, Michigan<br></h5>	
</div>
<div class = "commentcontent">
	<p>"What a difference Ryan made when switching to a new vendor for Gaylord boxes. He was very informative during our decision making process."<br> </p>
	
</div>








<?php
$conn = mysqli_connect("localhost", "admin", "admin","mitten");
if (mysqli_connect_errno())
{
    echo "Connection Error" . mysqli_connect_error();
}
// get the post records
@$txtfname = $_REQUEST['firstName'];
@$txtlname = $_REQUEST['lastName'];
@$txtemail = $_REQUEST['email'];
@$txtcomment = $_REQUEST['comment'];
// database insert SQL code
$sql = "INSERT INTO survey  VALUES ('$txtfname', '$txtlname', '$txtemail', '$txtcomment')";
if($txtfname != "")
{
	if(mysqli_query($conn, $sql))
	{
		echo "Submitted!";
	}
	else 
	{
		echo "Error";
	}
}
?>
</body>
</html>