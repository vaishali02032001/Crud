<?php include('header.php');
 include("connection.php");
?>



<style>

    .post-form{
    border:1px solid;
    /* margin-top:10px;  */
     width:300px;
    height:100px; 
    justify-content: center;
    align-items: center;
    position:absolute;
    top:38%;
    left:50%;
    transform:translate(-50%,-50%);
    background-color: rgb(244, 240, 240);
    }

    .form-group{
        margin-top: 7%;
        margin-left:10%;
        
    }
    .submit{
        background-image: linear-gradient(to right, #73C8A9 0%, #373B44  51%, #73C8A9  100%);
        margin-left: 25%;
        margin-top: 2%;
         padding: 10px 20px;
        color: white;            
        box-shadow: 0 0 20px #eee;
        border-radius: 10px;
        display: block;
      }

      .submit:hover {
        background-position: right center; /* change the direction of the change here */
        color: #fff;
        text-decoration: none;
      }

      .show-page{
     border:1px solid;
    margin-top:10px;  
     width:300px;
    height:200px; 
    justify-content: center;
    align-items: center;
    position:absolute;
    top:70%;
    left:50%;
    transform:translate(-50%,-50%);
    background-color: rgb(244, 240, 240);
      }
      .post{
        margin-top: 20px;
        margin-left: 20px;
      }
      #add{
        padding: 5px;
      }
    
</style>


<div id="main-content">
    <h2 style="margin-left:20%">Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>"  method="post">
        <div class="form-group">
            <label>ID</label>
            <input type="text" name="id" >
 </div>
 <input class="submit"  type="submit" name="btn" value="show">
    </form>


<?php 
if(isset($_POST['btn'])){
    $id =$_POST['id'];

    $query ="SELECT * FROM member  WHERE id = {$id}";
    $result = mysqli_query($conn,$query) or die("query unsucessful");  


 if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
 ?>
  <div class="show-page">
   <form class="post" action="updatedata.php" method="post">
     <input type="hidden" name="id" value="<?php echo $id; ?>">




 <div id="add">
<label>NAME</label>
    <input style="margin-left:35px"  type="text"  placeholder="username" name="sname" value="<?php echo $row['sname']; ?>">
    </div>
    <div id="add">
    <label>Address</label>
    <input style="margin-left:30px" type="text"  placeholder="address" name="saddress" value="<?php echo $row['saddress']; ?>">
</div>
<div id="add">
<label>class</label>

<?php        
$sqli = "SELECT * FROM memberclass";
$result= mysqli_query($conn,$sqli) or die('query unsuccessful.');

if(mysqli_num_rows($result)>0)  {
    echo'<select name ="sclass">';
    while($row1 = mysqli_fetch_assoc($result)) {
        if($row['sclass'] == $row1['cid']) {
            $select = "selected";
        }else{
            $select = " ";
        }
        echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
    }
    echo '</select>';
}
?>




    </div>
<div id="add">
<label>phone</label>
    <input style="margin-left:40px" type="text"  placeholder="phone.no" name="sphone" value="<?php echo $row['sphone']; ?>">
</div>
<input class="submit" type="submit" value="update">
</form>

<?php
 }
}
}

 ?>
 </div>
</div>








