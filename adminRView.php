<!-- Create session -->
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


		#main-zone .box
		{
			padding-top: 60px;
			width: 100%;
			min-height: 50px;
			font-size: 50px;
			text-align: left;
			margin: auto;
			
			
		}
		#main-zone .box1
		{
			width: 100%;
			min-height: 50px;
			font-size: 25px;
			text-align: left;
			margin: auto;
			padding-bottom: 100px;
			
		}
		.container {
		
			border-radius: 5px;
			background-color: lightgrey;
			float:left;
			width:100%;
			height:100%;
			padding-top:100px;
			padding: 50px;
			border-style:solid;
			}
		
		.commentname {
			font-size: 25px;
			padding: 10px;			
			float: center;			
			width: 100%;
		}

		.commentcontent {
			font-size: 20px;
			padding: 15px;
			float: center;	
			width: 100%;
		}
		.commentsection {
			font-size: 30px;
			padding: 15px;
			background-color: lightgray;
			text-align: center;
		}
		
			</style> 
		
	</head>

<body>
<?echo $_SESSION["username"];?>

 <!-- admin nav bar -->
<div class="navigation">
            <a href="adminAdd.php">Add Products</a>
            <a href="adminRemove.php">Remove Products</a>
			<a href="adminUpdate.php">Update Products</a>
            <a style="background:white; font-size:23px;color: #18453B;" href="adminRView.php">View Reviews</a>
            <a href="adminOView.php">View Orders</a>
			<a style="font-size:23px;color:white;float:right;"href="logout.php">Log Out</a>
      </div>
	  <!-- Connect to DB -->
<?php
$conn = mysqli_connect("localhost", "admin", "admin","mitten");
if (mysqli_connect_errno())
{
    echo "Connection Error" . mysqli_connect_error();
}
$sql = "SELECT * FROM survey";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            ?>
			<!-- Get entries from DB and display to user -->
			<div class="container">
				<div class = "commentname">
					<h2><?php echo $row["sFirstName"]?> , <?php echo $row["sLastName"]?></h2>
					<p><?php echo $row["sEmail"]?></p>
				</div>
				<div class = "commentcontent">
					<p>Comment: <?php echo $row["sComments"]?></p>
				</div>
		</div>
		<?php
        } 
        
    }

?>
	  