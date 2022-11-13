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
		<a href="adminAdd.php">Add Products</a>
		<a href="adminRemove.php">Remove Products</a>
		<a href="adminUpdate.php">Update Products</a>
		<a href="adminRView.php">View Reviews</a>
		<a href="adminOView.php">View Orders</a>
  </div>

  <div class="contactmessage">

	<body>

	<h3>Contact Form</h3>
	
	<fieldset>
	<div class="container">
		<form name = "addprod" method="post" action="FilePathTest.php">
			<label for="idNumber">ID Number</label><br>
			<input type="text" id="idNumber" name="idNumber" placeholder="Enter ID Number"><br>

			<label for="prodPic">Product Picture</label><br>
			<input type="text" id="prodPic" name="prodPic" placeholder="Ex: \ProductPics\woodPallet.png"><br>
			

		<input type="submit" name="Submit" ad="Submit" value="Submit">
		</form>
		</fieldset>
</div>
<?php
$conn = mysqli_connect("localhost", "admin", "admin","test");
if (mysqli_connect_errno())
{
    echo "Connection Error" . mysqli_connect_error();
}
// get the post records
@$idNumber = $_REQUEST["idNumber"];
@$prodPic = $_REQUEST["prodPic"];
// database insert SQL code
$sql = "INSERT INTO testSubmission VALUES ('$idNumber', '$prodPic')";
if($idNumber != "")
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

	  