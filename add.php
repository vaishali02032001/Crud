<?php include ("header.php")?>
<?php include ("connection.php") ?>

<link rel="stylesheet" href="addstyle.css">

<div id="content">
    <h2 style="padding-left:10%">ADD NEW RECORD</h2>
    <form class="post-form" action="savedata.php" method="post">
 <div id="add">
<label>NAME</label>
    <input style="margin-left:35px"  type="text"  placeholder="username" name="sname">
    </div>
    <div id="add">
    <label>Address</label>
    <input style="margin-left:30px" type="text"  placeholder="address" name="saddress">
</div>



<div id="add">
<label>class</label>
<select name="sclass" style="margin-left:50px">
    <option value="" selected disabled>select class</option>

    <?php 
// $conn =mysqli_connect("localhost","root","","crud3") or die("connection failed");
$query ="SELECT * FROM  memberclass";                                  //all data fetch from studentclass table from database
 $result = mysqli_query($conn,$query) or die("query unsucessful"); 
 
 while($row = mysqli_fetch_assoc($result)){
?>
 <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname'] ;?></option>

    <?php }?>
</select>
</div>



<div id="add">
<label>phone</label>
<input style="margin-left:40px" type="text"  placeholder="phone.no" name="sphone">
</div>
<input class="submit" type="submit" value="save">
</form>
    </div>