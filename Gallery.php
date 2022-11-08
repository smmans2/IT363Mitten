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
		
		.naviagation a:active 
		{
			background-color: #04AA6D;
			color: white;
			height: 1500px;
		}
		.card {
			padding: 4rem;
			box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
			max-width: 300px;
			margin: auto;
			text-align: center;
			font: Impact, fantasy;
			float: left;
			
			
		}



		.card button 
		{
			border: none;
			outline: 0;
			padding: 12px;
			color: white;
			background-color: #000;
			text-align: center;
			cursor: pointer;
			width: 100%;
			font-size: 18px;
		}

		.card button:hover {
			opacity: 0.7;
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
<?php
//include_once '1db_connection.php';

$conn = mysqli_connect("localhost", "admin", "admin","mitten");
if (mysqli_connect_errno())
{
    echo "Fail lol" . mysqli_connect_error();
}
echo "Good Job"."<br><br><br><br>";
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
</body>
</html>