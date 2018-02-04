<?php 
$name=$_POST['name'];
$nickname=$_POST['nick'];
$pic=$_FILES['pic']['name'];
$area=$_POST['area'];
$type=$_POST['tt'];
$des=$_POST['des'];
require 'connectVar.php';
$insert = $conn->query("INSERT INTO `profile` (`name`, `nick`, `picture_link`, `description`, `area`, `type`) VALUES ('$name','$nickname','$pic','$des','$area','$type')");
$errors=0; 
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>新英雄</title>
  </head>
  <body>
  <?php
	$error=0;
if (!trim($name)) { 
echo "<br><b>name</b> is required."; 
$errors++; 
} 

if (!trim($nickname)) { 
echo "<br><b>nickname</b> is required."; 
$errors++; 
} 

if (!trim($pic)) { 
echo "<br><b>picname</b> is required."; 
$errors++; 
}

if (!trim($area)) { 
echo "<br><b>area</b> is required."; 
$errors++; 
}
if (!trim($type)) { 
echo "<br><b>type</b> is required."; 
$errors++; 
}
if (!trim($des)) { 
echo "<br><b>describtion</b> is required."; 
$errors++; 
}
if ($errors > 0) 
echo "<br><br><br>please use your browser's back button "."to return to the form, and correct error(s)"; 
else
{
	echo "<h3>新英雄</h3>";
	echo "<p>name : ".$name."</p>";
	echo "<p>nickname :".$nickname."</p>";
	echo "<p>area :".$area."</p>";
	echo "<p>type :".$type."</p>";
	echo "<p>Picture name: " .$pic."<br/>";
	echo "檔案類型: ".$_FILES['pic']['type']."<br/>";
	echo "檔案大小: ".($_FILES['pic']['size']/1024)." Kb<br/>";
	echo "暫存名稱: ".$_FILES['pic']['tmp_name']."</p>"; 
	if($_FILES['pic']['size']>0)
	{
		move_uploaded_file($_FILES['pic']['tmp_name'],"".$_FILES['pic']['name']);
	}
	else
	{
		echo "上傳為空檔案，請重新嘗試 。";
	}
    echo "<p>decscription :".$des."</p>";
}
	
?>
	<p align="center"><a href="hwone.php">返回英雄列表</a>&nbsp<a href="add_hero.php">繼續新增英雄</a></p>
  </body>
</html>