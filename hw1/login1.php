<?php 

require_once("connectVar.php");
$id=$_POST['user'];
$pw=$_POST['pw'];

$sql = "SELECT * FROM user where username = '$id'";
$result = $conn->query($sql);
$row = @mysqli_fetch_row($result);
if($id != null && $pw != null && $row[1]==$id && $row[2]== $pw)
{
	session_start();
	$_SESSION['username']=$id;
	echo 'Sign-in successful !!';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=hwone.php>';
}
else
{
	echo 'Sign-in fail !!';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
}
?>
