<?php include("header.php");?>



<link rel="stylesheet" href="style.css">
<div id="main-content" >
    <div id="index" style="width: 80%;  " >
    <h2 style="text-align: center;" >ALL RECORD</h2>

<?php
include("connection.php");

$query ="SELECT * FROM member JOIN memberclass WHERE member.sclass = memberclass.cid";
 $result = mysqli_query($conn,$query) or die("query unsucessful");         //data come from database store in $result variable

 if(mysqli_num_rows($result)>0){             // how many rows select from database

 
?>
<div style="display: flex; justify-content: center; align-items: center; " >
 <table  border="2px" cellpadding="10" style="width: 80%;" >
        <thead>
            <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>CLASS</th>
            <th>PHONE</th>
            <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
<?php 
while($row = mysqli_fetch_assoc($result)){

?>

                <tr>
                    <td><?php echo $row['id'] ; ?></td>
                    <td><?php echo $row['sname'] ; ?></td>
                    <td><?php echo $row['saddress'] ; ?></td>
                    <td><?php echo $row['cname'] ; ?></td>
                    <td><?php echo $row['sphone'] ; ?></td>
                    <td>
                         <a style="text-decoration:none; color:white; "   href='update.php'><input type='submit' value="Edit" class="edit"> </a></>
                         <a href="delete_inline.php?id=<?php echo $row['id'] ; ?>"> <input type='submit' value="Delete" class="delete"> </a>
                </td>
                </tr>

                <?php } ?>
            </tbody>
            
    </table>
    </div>

    <?php }?>

    </div>
</div>