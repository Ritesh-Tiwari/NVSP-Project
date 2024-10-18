<?php
$fname=$_POST["fname2"];
$lname=$_POST["Last_Name2"];
$mobile_no=$_POST["mobile_no2"];
$Email=$_POST["E-mail2"];
$epic_no=$_POST["epic_no2"];
$id=$_POST['hidden'];
echo $id;
$conn=mysqli_connect("localhost","root","","nvsp") or die("database not be connceted");
$sql = "UPDATE register SET F_Name='$fname' ,L_Name='$lname' ,Mobile_No='$mobile_no' ,Email='$Email' ,EPIC_Number='$epic_no' WHERE Email='$id'";

if (mysqli_query($conn, $sql)) {
    echo "<h3 style='text-aligin:center; color:blue;'>Record updated successfully</h3>";
    header("location:my_profile.php?id=$id");
} else {
    echo "<h3 style='text-aligin:center; color:blue;'>Error updating record: . mysqli_error($conn);</h3>";
     echo "<br><center><a  href='my_profile.php?id=$id'>Go Back</a></center>";
                            
}
mysqli_close($conn);
?>
