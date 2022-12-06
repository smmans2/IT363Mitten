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
			padding: 16px 24px;;
			text-decoration: none;
			font-size: 23px;
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
       .heading
	   {
            padding-top: 70px;
			padding-bottom:50px;
			width: 100%;
			min-height: 50px;
			font-size: 50px;
			font-family: Impact;
			text-align: center;
			margin: auto;
			background-color: #CFDDC8;
       }
	   body{
		background-color:#CFDDC8;
	   }
		#main-zone
		{
			width:100%;
			height:800px;
			padding-top:100px;
			font-size: 23px;
			float: center;
			background-color: #CFDDC8;
			color: black;
			text-shadow: none;
			border-style:solid;
		}
		

		input[type=text], select, textarea 
        {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
		}

		input[type=submit] 
        {
			background-color: #18453B;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover 
        {
			background-color: #45a049;
		}

        .product
        {
            box-shadow: 0px 10px 50px 15px grey;
            width:25%;
            height: 300px;
            font-size: 23px;
            background-color: white;
		    color: black;
            text-align: center;
            font-family: arial;
            float: left;
        }
        .sidespace
        {
            width:6.25%;
            height: 300px;
            float:left;
        }
        .rightSpace
        {
            width:6.25%;
            height: 300px;
            float:left;
        }
        .midSpace
        {
            width:100%;
            height:25px;
            float:left;
        }
        .moveRight
        {
            width:5%;
            height:100%;
            float:left;

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
            <a href="Products.php"style="background:white; font-size:23px;color: #18453B;">Products</a>
            <a href="Review.php">Reviews</a>
      	</div>
        <div class ="heading">
		
			<b> Our Products<b>
			
		</div>
<?php
$conn = mysqli_connect("localhost", "admin", "admin","mitten");
$length=0;

if (mysqli_connect_errno())
{
    echo "Connection Error" . mysqli_connect_error();
}

$tableSize = "SELECT * FROM products";
$tableResult = mysqli_query($conn,$tableSize);
if($tableResult->num_rows > 0)
{
	while($tableRow = $tableResult->fetch_assoc())
	{
		$length++;
	}
}
$count=0;
$sql = "SELECT * FROM test";
$result = mysqli_query($conn,$sql);
if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            ?>
            <div class="sidespace">
        </div>
        
            <div class="product">
            <?php echo '<img src="data:image/png;base64,'.base64_encode($row["pic"]).'alt="Picture" style="width:75%" "/>';?>
            <h2><?php echo $row["productDescription"]?></h2>
            <p><?php echo $row["productPrice"]?></p>
            </div>
            <?php
            $count ++;
            if($count%3==0)
            {
                ?>
                <div class="rightSpace">
                </div>
                <div class="midSpace">
                </div>
                <?php
            }
        }
        

    }?>

</table>
</body>
</html>
