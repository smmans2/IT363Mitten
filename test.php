<html>
<head>
<title>Test</title>
</head>
<body>
<?php			
mysql_connect("localhost", "admin", "admin");
mysql_select_db("product_information");
$res=mysql_query("SELECT * FROM products");
echo "<table>";
while($row=mysqli_fetch_array($res))
{
echo "<tr>"
echo "<td>";?><img src="<?php echo $row['pics']; ?>" height="100" width="100"> <?php echo "</td>";
echo "<td>"; echo $row["pics"]; echo "</td>";


echo "</tr>";
}
echo "</table>";
?>
</body>
</html>