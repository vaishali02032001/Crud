<?php  include 'header.php';

if(isset($_POST['id'])){
    include("connection.php");
//$conn =mysqli_connect("localhost","root","","crud3") or die("connection failed");
$id =$_POST['id'];
$sql ="DELETE FROM students WHERE id = {$id}";
$result = mysqli_query($conn,$sql) or die ("query unsuccessful");
header("Location: http://localhost/crud3/index.php");
mysqli_close($conn);

}
?>

<html>
<style>

.post-form{
    border:1px solid;
     width:400px;
    height:100px; 
    justify-content: center;
    align-items: center;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    background-color: rgb(244, 240, 240);
    
}
.form-group{
    margin: 20px 50px;
}
.submit{
margin-left: 40%;
padding: 5px 20px;
color: white;            
box-shadow: 0 0 20px #eee;
border-radius: 10px;
background-image: linear-gradient(to right, #73C8A9 0%, #373B44  51%, #73C8A9  100%);
text-transform: uppercase;
transition: 0.5s;
background-size: 200% auto;

}
.submit:hover {
        background-position: right center; /* change the direction of the change here */
        color: #fff;
        text-decoration: none;
      }
      

</style>

<body>
<div  id="main-content">
    <h2 style="margin-left:20%">Delete Record</h2>
    <form class="post-form"  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>ID :</label>
            <input type="text" name="id" style="margin-left:20px;padding-right:30px">
        </div>
        <input class="submit"  type="submit" name="deletebtn" value="Delete">
    </form>
</div>
</body>
</html>









