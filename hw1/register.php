<?php 
require 'connectVar.php';
$errors=0; 
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Be a member!</title>
  </head>
  <body>
		<h3 align="center">歡迎註冊為會員</h3>
		<form align="center" name="register" method="post" action="register1.php">
		<p>* 帳號: <input type="text" name="user" /></br></p>
		<p>* 密碼: <input type="password" name="pw"/></br></p>
		<p>* 再一次輸入密碼: <input type="password" name="pw2"/></br></p>
		<p>電話: <input type="text" name="tele"/></br></p>
		<p>地址: <input type="text" name="address"/></br></p>
		<p>E-MAIL: <input type="text" name="email"/></br></p>
		<p>* 為必填資料</p>
		<p><input type="submit" name="button" value="確定" />&nbsp&nbsp<input id=lo type=button value= 登入 onclick = location.href='http://140.117.178.139/hw1/login.php'>
		&nbsp&nbsp<input id=lo type=button value= 返回 onclick = location.href='http://140.117.178.139/hw1/hwone.php'></p>
		</form>
	
  </body>
</html>