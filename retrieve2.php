<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
</style>


<?php
include_once 'db_connection.php';
$result = mysqli_query($conn,"SELECT * FROM myusers");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Product Picture</td>
    <td>Product Description</td>
    <td>Product Price</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["productPicture"]; ?></td>
    <td><?php echo $row["productDescription"]; ?></td>
    <td><?php echo $row["productPrice"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>

