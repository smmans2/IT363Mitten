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
        background-color: #CFDDC8;
        padding: 50px;
        text-align:left;
        }
        .prodCont {
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
        .formleft
		{
			padding-top:10%;
			padding-left:5%;
			width:45%;
            height:50%;
			float: left;
            
		}
		.confirm
		{
            padding-top:50%;
            width:40%;
            padding-right:5%;
            float:right;
            border-style:solid;
            overflow:scroll;
        }
		
			</style> 
		
	</head>

<body>

 
	<div class="navigation">
		<a href="adminAdd.php">Add Products</a>
		<a href="adminRemove.php">Remove Products</a>
		<a style="background:white; font-size:23px;color: #18453B;" href="adminUpdate.php">Update Products</a>
		<a href="adminRView.php">View Reviews</a>
		<a href="adminOView.php">View Orders</a>
  </div>



<div class="container">
<div class="formleft">
  <form name = "frmSurvey" method="post" action = "review.php">
	<label for="firstName">ID number of product to edit</label><br>
	<input type="text" id="firstName" name="firstName" placeholder="First name"><br><br><br><br>

    <label for="name">Product Name</label><br>
	<input type="text" id="name" name="name" placeholder="Product Name"><br>
	
	<label for="path">File Path (Must use \\)</label><br>
	<input type="text" id="path" name="path" placeholder="File Path"><br>
	
	<label for="price">Product Price</label><br>
	<textarea id="comment" name="price" placeholder="Product Price" style="height:200px"></textarea><br>

	<input type="submit" name="Submit" ad="Submit" value="Submit">
    </form>
</div>
    <div class="confirm">
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
			<div class="prodCont">
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
	
	  
    </div>
</div>