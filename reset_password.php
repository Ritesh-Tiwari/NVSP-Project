<?php
    $no=$_POST['no'];
    $pass=$_POST['new_pass'];
   
   echo $pass;
    echo $id;
    $conn=mysqli_connect("localhost","root","","nvsp") or die("database not be connceted");
    $query="select *from register where Mobile_No='$no';";
    $result=mysqli_query($conn,$query);
    $no=mysqli_num_rows($result);
    if($no>=1)
    {
       $query = "UPDATE register SET Password='$pass' WHERE Mobile_No='$no'";

            if (mysqli_query($conn, $query)) {
            echo "<h3 style='text-aligin:center; color:blue;'>Password Change successfully</h3>";
                  header("location:login.html");
            } 
            else {

                  echo "<h3 style='text-aligin:center; color:blue;'>Error updating record: . mysqli_error($conn);</h3>";
                  echo "<br><center><a  href='reset_password.html'>Go Back</a></center>";
                            
                }
  }
?>