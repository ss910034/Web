<?php 
require 'connectVar.php';
$id=$_POST['user'];
$pw=$_POST['pw'];
$pw2=$_POST['pw2'];
$tel=$_POST['tele'];
$add=$_POST['address'];
$em=$_POST['email'];
$errors=0; 
$result=$conn->query("SELECT * FROM user where username = '$id'");
$row=@mysqli_fetch_row($result);
if($id!=null && $pw!=null && $pw2!=null)
{
	if($row[1]==$id)
	{
		echo "此帳號已有人註冊過了，請重新輸入。";
		echo "<meta http-equiv=REFRESH CONTENT=2;url=register.php>";
	}
	else if($pw!=$pw2)
	{
		echo "再次輸入密碼與所填密碼不同，請重新輸入。";
		echo "<meta http-equiv=REFRESH CONTENT=2;url=register.php>";
	}
	else
	{
		$insert = $conn->query("INSERT INTO `user` (`username`, `password`, `telephone`, `address`, `email`) VALUES ('$id','$pw','$tel','$add','$em')");
		echo "恭喜妳正式成為我們的會員 !!";
		echo "<meta http-equiv=REFRESH CONTENT=2;url=login.php>";
	}
}
else
{
	echo "帳號密碼為必填資料，請輸入謝謝。";
	echo "<meta http-equiv=REFRESH CONTENT=2;url=register.php>";
}
?>
