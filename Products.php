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

        table, td, th 
        {  
        border: 1px solid #ddd;
		align: center;
		background-color: #CFDDC8;
        }

        .container
        {
			
            padding-left:5%;
            padding-right:5%;
			padding-bottom:150px;
            padding-top:100px;
            width:90%;
			background-color: #CFDDC8;
			
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
        padding-left:50px;
        box-shadow: 0px 10px 50px 15px grey;
        width: 25%;
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

        .card2 {
        width: 7.5%;
		height: 300px;  
		padding-top:3%;
		background-color: #CFDDC8;
		color: black;
	    text-shadow: none;
        text-align: center;
        font-family: arial;
        float: left;
		
        }
		.card3 {
        width: 100%;
		height: 15px;  
		background-color: #CFDDC8;
		color: black;
	    text-shadow: none;
        text-align: center;
        font-family: arial;
        float: left;
		
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
		<div clas="fullpage">
        <div class ="heading">
		
			<b> Our Products<b>
			
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
            <div class="container">
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
            	<div class="card2">
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
            <div class="card2">
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
			<div class="card3">
		</div>
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
