<?php    
$id =$_GET['id'];
include("connection.php");
//$conn =mysqli_connect("localhost","root","","crud3") or die("connection failed");
$sql ="DELETE FROM member WHERE id = {$id}";
$result =mysqli_query($conn,$sql) or die("query unsuccessful");

header("Location: http://localhost/crud3/index.php");

mysqli_close($conn);

?>