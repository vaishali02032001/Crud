<?php

 $id =$_POST['id'];
 $sname = $_POST['sname'];                 //data ko lekar aaye
 $sadd = $_POST['saddress'];
 $sclass = $_POST['sclass'];
 $sphone = $_POST['sphone'];

include("connection.php");  

$sql ="UPDATE  member SET sname='{$sname}',  saddress='{$sadd}',  sclass='{$sclass}',   sphone ='{$sphone}' WHERE id='{$id}'";      //data inserted into database
 $result = mysqli_query($conn,$sql) or die("query unsucessful");                    //for connection pass the query

 header("Location:  http://localhost/CRUD3/index.php");              //for redirect page

 mysqli_close($conn);


?>














