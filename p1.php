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

		#main-zone
		{
			padding-top: 100px;
			width:100%;
            height:1000px;
			font-size: 23px;
			float: center;
			background-color: #CFDDC8;
			color: black;
			text-shadow: none;
		}
		#main-zone .productbox
		{
			padding-top: 60px;
            padding-left:10%;
            padding-right:10%;
			width: 80%;
			height:100%;
			font-size: 50px;
            border-style:solid;
			text-align: center;
			margin: auto;
            
			
			
		}
        .card 
        {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: auto;
            text-align: center;
            font-family: arial;
			width:20%
        }
        .price 
        {
            color: grey;
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

        <div id="main-zone">
            <div class="productbox">
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
            </div>
        </div>






</body>
</html>