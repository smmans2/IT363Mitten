<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:loginPage.php");
}

?>
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
<?echo $_SESSION["username"];?>

 
	<div class="navigation">
		<a style="background:white; font-size:23px;color: #18453B;" href="adminAdd.php">Add Products</a>
		<a href="adminRemove.php">Remove Products</a>
		<a href="adminUpdate.php">Update Products</a>
		<a href="adminRView.php">View Reviews</a>
		<a href="adminOView.php">View Orders</a>
		<a style="font-size:23px;color:white;float:right;"href="loginpage.php">Log Out</a>
	 </div>

  <div class="contactmessage">

	<body>

	<h3>Contact Form</h3>
	
	<fieldset>
	<div class="container">
		<form name = "addprod" method="post" action="adminadd.php">
			<label for="idNumber">ID Number</label><br>
			<input type="text" id="idNumber" name="idNumber" placeholder="Enter ID Number"><br>

			<label for="prodPic">Product Picture</label><br>
			<input type="text" id="prodPic" name="prodPic" placeholder="Ex: \\ProductPics\\woodPallet.png  MUST USE DOUBLE SLASH ( \\ )"><br>
			
			<label for="prodName">Product Name</label><br>
			<input type="text" id="prodName" name="prodName" placeholder="Enter Product Name"><br>
			
			<label for="prodPrice">Product Price</label><br>
			<input type="text" id="prodPrice" name="prodPrice" placeholder="Ex: $10.00"><br>
			

		<input type="submit" name="Submit" ad="Submit" value="Submit">
		</form>
		</fieldset>
</div>
<?php
$conn = mysqli_connect("localhost", "admin", "admin","mitten");
if (mysqli_connect_errno())
{
    echo "Connection Error" . mysqli_connect_error();
}
// get the post records
@$idNumber = $_REQUEST["idNumber"];
@$prodPic = $_REQUEST["prodPic"];
@$prodName = $_REQUEST['prodName'];
@$prodPrice = $_REQUEST['prodPrice'];
// database insert SQL code
$sql = "INSERT INTO products VALUES ('$idNumber', '$prodPic', '$prodName', '$prodPrice')";
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

	  