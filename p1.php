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
       .title
	   {
			text-align: center;
			font-family: Impact;
			padding-top: 60px;
			padding-bottom: 40px;
			font-size: 20px;
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
		}
		* {box-sizing: border-box;}

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

        table, td, th 
        {  
        border: 1px solid #ddd;
		align: center;
		background-color: #CFDDC8;
        }
		.box 
        {
            float: left;
            width: 33.33%;
            padding: 50px;
            padding-top: 100px;
			font-size: 23px;
			background-color: #CFDDC8;
			color: black;
			text-shadow: none;
        }

        .clearfix::after 
        {
            padding-top: 400px;
			font-size: 23px;
			padding-left: 5%;
			padding-right:5%;
			background-color: #CFDDC8;
			color: black;
			text-shadow: none;
            content: "";
            clear: both;
            display: table;
			float:center;
	
        }
        .card {
        box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2);
        width: 400px;
		height: 300px;  
		padding-top:3%;
        font-size: 23px;
		background-color: white;
		color: black;
	    text-shadow: none;
        text-align: center;
        font-family: arial;
        float: left;
		

        }

        .price 
        {
            color: black;
            font-size: 22px;
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

        .card button:hover 
        {
            opacity: 0.7;
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
        <div class ="title">
		
			<h1> Our Products</h1>
			
		</div>
<?php
$conn = mysqli_connect("localhost", "admin", "admin","mitten");
$i=1001;
$length=19;
if (mysqli_connect_errno())
{
    echo "Connection Error" . mysqli_connect_error();
}
$sql = "SELECT * FROM products WHERE productID = $i";
$result = mysqli_query($conn,$sql);
                
    if($result->num_rows > 0)
    {
        for($j=0; $j<=$length; $j++)
        {
            ?>
            <table>
                <tr>
                    <?php
            $sql = "SELECT * FROM products WHERE productID = $i";
            $result = mysqli_query($conn,$sql);
            $row = $result->fetch_assoc();
            ?>
            <div class="clear-fix">
            <div class="card">
                <img src="<?php echo $row["productPicture"]?>" alt="Picture" style="width:30%">
                <h2><?php echo $row["productDescription"]?></h2>
                <p><?php echo $row["productPrice"]?></p>
            </div>
            </div>
        </tr>
            <?php
            $i++;
            $j++;


            $sql = "SELECT * FROM products WHERE productID = $i";
            $result = mysqli_query($conn,$sql);
            $row = $result->fetch_assoc();
            ?>
            <div class="clear-fix">
            <div class="card">
                <img src="<?php echo $row["productPicture"]?>" alt="Picture" style="width:30%">
                <h2><?php echo $row["productDescription"]?></h2>
                <p class="price"><?php echo $row["productPrice"]?></p>
            </div>
            </div>
            <?php
            $i++;
            $j++;

            $sql = "SELECT * FROM products WHERE productID = $i";
            $result = mysqli_query($conn,$sql);
            $row = $result->fetch_assoc();
            ?>
            <div class="clear-fix">
            <div class="card">
                <img src="<?php echo $row["productPicture"]?>" alt="Picture" style="width:30%">
                <h2><?php echo $row["productDescription"]?></h2>
                <p class="price"><?php echo $row["productPrice"]?></p>
            </div>
            </div>
            <?php
            $i++;
            $j++;


        }
        
            
        
    }   
        ?>

</table>
</body>
</html>
