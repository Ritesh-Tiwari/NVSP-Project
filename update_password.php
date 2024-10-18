<?php
    $old_pass=$_POST['old_pass'];
    $pass=$_POST['new_pass'];
    $id=$_POST['hidden'];
   echo $pass;
    echo $id;
    $conn=mysqli_connect("localhost","root","","nvsp") or die("database not be connceted");
    $query="select *from register where Email='$id' and Password='$old_pass';";
    $result=mysqli_query($conn,$query);
    $no=mysqli_num_rows($result);
    if($no>=1)
    {
       $query = "UPDATE register SET Password='$pass' WHERE Email='$id'";

            if (mysqli_query($conn, $query)) {
            echo "<h3 style='text-aligin:center; color:blue;'>Password Change successfully</h3>";
                  header("location:my_profile.php?id=$id");
            } 
            else {

                  echo "<h3 style='text-aligin:center; color:blue;'>Error updating record: . mysqli_error($conn);</h3>";
                  echo "<br><center><a  href='my_profile.php?id=$id'>Go Back</a></center>";
                            
                }
  }
?>