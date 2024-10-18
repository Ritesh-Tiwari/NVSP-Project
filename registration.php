<html>
    <head>
<?php

//form save data with EPIC no


if(isset($_POST['submit2'])): 
    
    $con=mysqli_connect("localhost","root");
    if(!$con)                                    //checking connection
    {
        die("could not connect:".mysql_error());
    }
    mysqli_select_db($con,"nvsp");
    
    $epic_no=$_POST["epic_no"];
    // $no=$_POST["mobile_no"];
    $emailid=$_POST["emailid"];
    $pass1=$_POST["pass1"];
    $pass2=$_POST["pass2"];
    if($pass1==$pass2)
    {
        $pass=$pass1;

    }
    


    $sql = "INSERT INTO `register`(`EPIC_Number`, `Email`,`Password`) VALUES ('$epic_no','$emailid','$pass')";
                  
    if(@mysqli_query($con,$sql)) 
    {
?>
                                            
<script type="text/javascript">
window.location.href = 'login.html';
</script>
<?php
    }
else
   echo"<p> Error ! Adding  new employee ".mysqli_error($con)."</p>";

   mysqli_close($con);
//insert data without Epic no


elseif(isset($_POST['submit3'])): 
    
    $con=mysqli_connect("localhost","root");
    if(!$con)                                    //checking connection
    {
        die("could not connect:".mysql_error());
    }
    mysqli_select_db($con,"nvsp");
    
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $emailid=$_POST["emailid"];
    $pass1=$_POST["pass1"];
    $pass2=$_POST["pass2"];
    $no=$_POST["mobile_no"];
   
    if($pass1==$pass2)
    {
        $pass=$pass1;

    }
    


    $sql = "INSERT INTO `register` (`Mobile_No`, `Email`, `Password`,`F_Name`,`L_Name`) VALUES ('$no', '$emailid', '$pass','$fname','$lname');";
                  
    if(@mysqli_query($con,$sql)) 
    {
?>
                                            
<script type="text/javascript">
window.location.href = 'login.html';
</script>
<?php
    }
else
   echo"<p> Error ! Adding  new employee ".mysqli_error($con)."</p>";

   mysqli_close($con);
endif;                                      
?>
</head>
</html>