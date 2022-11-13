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


			padding: 50px;
			}
        .buffer {
        box-shadow: 0 0 3px;
        width:100%;
        height:150px;
        font-size:35px;
        text-align:center;
        padding: 50px;
        background-color: lightgrey;
        }
		
		
		.commentsection {
			font-size: 30px;
			padding: 15px;
			background-color: lightgray;
			text-align: center;
		}
		.commentname {
			font-size: 25px;
			padding: 10px;
			float: left;		
			width: 100%;
            border-style:solid;
		}

		.commentcontent {
			font-size: 20px;
			padding: 15px;
			float: left;
			width: 100%;
    
		}
		.header {
			
			text-align: center;
			height: 40px;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 50px;
			margin-top: 18px;
			margin-bottom: 18px;
			font-size: 40px;
			
		}
	
		
			</style> 
		
	</head>

	<body>

 
		<div class="navigation">
			<a href="adminAdd.php">Add Products</a>
			<a style="background:white; font-size:23px;color: #18453B;"href="adminRemove.php">Remove Products</a>
			<a href="adminUpdate.php">Update Products</a>
			<a href="adminRView.php">View Reviews</a>
			<a href="adminOView.php">View Orders</a>
	  </div>
	
	  <div class="contactmessage">
	
		<body>
	
		<h3>Contact Form</h3>
		
		<fieldset>
		<div class="container">
			<form name = "addprod" method="post" action="adminRemove.php">
				<label for="idNumber">ID Number</label><br>
				<input type="text" id="idNumber" name="idNumber" placeholder="Enter ID number of product you would like to remove."><br>
	
			<input type="submit" name="Submit" ad="Submit" value="Submit">
			</form>
			</fieldset>
	</div>
    <div class="buffer">
        <p>View product table below</p>
    </div>


	
    <?php
$conn = mysqli_connect("localhost", "admin", "admin","mitten");
if (mysqli_connect_errno())
{
    echo "Connection Error" . mysqli_connect_error();
}
$sql = "SELECT * FROM products";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            ?>
			<div class="container">
				<div class = "commentname">
					<h3>ID Number: <?php echo $row["productID"]?></h3>
					<p>Product Name: <?php echo $row["productDescription"]?></p>
                    <p>Product Price: <?php echo $row["productPrice"]?></p>
				</div>
                <div class="commentcontent">
              </div>
		</div>
		<?php
        } 
        
    }

?>
    <?php

	@$idNumber = $_REQUEST["idNumber"];
	// database insert SQL code
	$sql = "DELETE FROM products WHERE productID = ('$idNumber')";
    
    if(@$idnumber != " ")
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
	
	  