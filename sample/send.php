<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="nvsp";
$conn = mysql_connect($servername, $username);
if($conn)
{
	echo"connect";

}
else{
	echo "fail";
}
?>
</body></html>