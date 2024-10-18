<html>
    <head>
<?php

$id=$_POST["email"];
$pass=$_POST["password"];
$con=mysqli_connect("localhost","root","","nvsp") or die("database not be connceted");
$query="select *from register where Email='$id' and Password='$pass';";
$result=mysqli_query($con,$query);
$no=mysqli_num_rows($result);
if($no>=1)
{
  header("location:nvsp.php?id=$id");
   ?>
                                              
<!-- <script type="text/javascript">
window.location.href = '../nvsp.php?a=$id';
</script> -->
<?php 

}
else
{
    ?>
                                              
<script type="text/javascript">
window.location.href = 'login.html';
</script>
<?php 
}
?>
</head>
</html>