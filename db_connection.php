<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "admin";
 $dbpass = "admin";
 $db = "product_information";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>