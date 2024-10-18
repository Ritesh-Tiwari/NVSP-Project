<?php
  $con=mysqli_connect("localhost","root");
  if(!$con)                                    //checking connection
  {
      die("could not connect:".mysql_error());
  }
  mysqli_select_db($con,"nvsp");
extract($_POST);
if(isset ($_POST['a'])){
    $sql = "INSERT INTO `numbers` (`Mobile_no`) VALUES ('$a');";
    // $sql1 = "INSERT INTO `register` (`Mobile_No`) VALUES ('$a');";
    
    mysqli_query($con,$sql);
    //  mysqli_query($con,$sql1);
    
}
else{
    echo"<center><h3 style='color:red'> this number is all ready used...</h3></center>";
}

?>