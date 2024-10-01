 <?php

echo $sname = $_POST['sname'];                 //data ko lekar aaye
echo $sadd = $_POST['saddress'];
echo $sclass = $_POST['sclass'];
echo $sphone = $_POST['sphone'];


include("connection.php");
//$conn = mysqli_connect("localhost","root","","crud3") or die("connection failed");               //connection created

$sql ="INSERT INTO member(sname,saddress,sclass,sphone) VALUES ('{$sname}','{$sadd}','{$sclass}','{$sphone}')";      //data inserted into database
 $result = mysqli_query($conn,$sql) or die("query unsucessful");                    //for connection pass the query

 header("Location:  http://localhost/CRUD3/index.php");              //for redirect page

 mysqli_close($conn);


?>



