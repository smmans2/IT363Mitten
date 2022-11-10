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
            <a href="adminAdd.php">Add Products</a>
            <a href="adminRemove.php">Remove Products</a>
			<a href="adminUpdate.php">Update Products</a>
            <a href="adminRView.php">View Reviews</a>
            <a href="adminOView.php">View Orders</a>
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
            <div class="card">
            <img src="<?php echo $row["productPicture"]?>" alt="Picture: " style="width:30%">
            <h2><?php echo $row["productDescription"]?></h2>

            <p><?php echo $row["productPrice"]?></p>
            </div>
            <?php
        } 
        
    }

?>
	  