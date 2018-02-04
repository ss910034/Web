<?php 
session_start();
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Homework 1</title>
	<link rel="stylesheet" type="text/css" href="one.css">
  </head>
  <body>
	<?php
		if((!empty($_SESSION['username'])))
		{
			echo "Hello ,歡迎 ".$_SESSION['username']." 您的登入 =D&nbsp&nbsp";
			echo '<a href="logout.php">登出</a><br><br>';
		}		
		else
		{
			echo "<input id=lo type=button value= 登入 onclick = location.href='http://140.117.178.139/hw1/login.php'>&nbsp&nbsp";
			echo "<input id=lo1 type=button value= 註冊 onclick = location.href='http://140.117.178.139/hw1/register.php' >";
		}
	?>
	<p><a href="add_hero.php">新增英雄</a></p>
	<h3 align="center">AD CARRY</h3>
	<p>
	<table border="3" align="center">
	<tr>
		<th width=120 nowrap>picture</th>
		<th width=120 nowrap>name</th>
		<th width=120 nowrap>nickname</th>
		<th width=120 nowrap>area</th>
		<th width=120 nowrap>type</th>
	</tr>
	<?php
		require_once 'connectVar.php';
		$sql = "SELECT * FROM `profile` WHERE type= 'adcarry'";
		$result=$conn->query($sql);
		 while($row = $result->fetch_array()) {
			echo "<tr>";
			echo "<td><img src =".$row[3]." ></td>";
			echo "<td align=center>".$row[0]."</td>";
			echo "<td align=center>".$row[1]."</td>";
			echo "<td align=center>".$row[5]."</td>";
			echo "<td align=center>".$row[6]."</td>";
			echo "</tr>";	
			echo "<tr>";	
			//$len=mb_substr($row[4],'utf8');
			//echo $len;
			echo "<td colspan= 5 width=120 >".mb_substr($row[4], 0,100, 'utf8');
			if(mb_strlen($row[4],'utf8')>=100)
			{
				echo "...</td>";
			}
			else{
				echo "</td>";
				}
			echo "</tr>";
		}
	?>
	</tr>
	</table>
	</p>
	
	<h3 align="center">AP CARRY</h3>
	<p>
	<table width="120" border="3" align="center">
	<tr>
		<th>picture</th>
		<th width=120 nowrap>name</th>
		<th width=120 nowrap>nickname</th>
		<th width=120 nowrap>area</th>
		<th width=120 nowrap>type</th>
	</tr>
	<?php
		$sql = "SELECT * FROM `profile` WHERE type= 'apcarry'";
		$result=$conn->query($sql);
		 while($row = $result->fetch_array()) {
			echo "<tr>";
			echo "<td><img src =".$row[3]." ></td>";
			echo "<td align=center>".$row[0]."</td>";
			echo "<td align=center>".$row[1]."</td>";
			echo "<td align=center>".$row[5]."</td>";
			echo "<td align=center>".$row[6]."</td>";
			echo "</tr>";	
			echo "<tr>";			
			echo "<td colspan= 5 width=120 >".mb_substr($row[4], 0,100, 'utf8');
			if(mb_strlen($row[4],'utf8')>=100)
			{
				echo "...</td>";
			}
			else{
				echo "</td>";
				}
			echo "</tr>";
		}
	?>
	</tr>
	</table>
	</p>
	
	<h3 align="center">SUPPORT</h3>
	<p>
	<table width="120" border="3" align="center">
	<tr>
		<th>picture</th>
		<th width=120 nowrap>name</th>
		<th width=120 nowrap>nickname</th>
		<th width=120 nowrap>area</th>
		<th width=120 nowrap>type</th>
	</tr>
	<?php
		$sql = "SELECT * FROM `profile` WHERE type= 'support'";
		$result=$conn->query($sql);
		 while($row = $result->fetch_array()) {
			echo "<tr>";
			echo "<td><img src =".$row[3]." ></td>";
			echo "<td align=center>".$row[0]."</td>";
			echo "<td align=center>".$row[1]."</td>";
			echo "<td align=center>".$row[5]."</td>";
			echo "<td align=center>".$row[6]."</td>";
			echo "</tr>";	
			echo "<tr>";			
			echo "<td colspan= 5 width=120 >".mb_substr($row[4], 0,100, 'utf8');
			if(mb_strlen($row[4],'utf8')>=100)
			{
				echo "...</td>";
			}
			else{
				echo "</td>";
				}
			echo "</tr>";
		}
	?>
	</tr>
	</table>
	</p>
	
	<h3 align="center">TANK</h3>
	<p>
	<table width="120" border="3" align="center">
	<tr>
		<th>picture</th>
		<th width=120 nowrap>name</th>
		<th width=120 nowrap>nickname</th>
		<th width=120 nowrap>area</th>
		<th width=120 nowrap>type</th>
	</tr>
	<?php
		$sql = "SELECT * FROM `profile` WHERE type= 'tank'";
		$result=$conn->query($sql);
		 while($row = $result->fetch_array()) {
			echo "<tr>";
			echo "<td><img src =".$row[3]." ></td>";
			echo "<td align=center>".$row[0]."</td>";
			echo "<td align=center>".$row[1]."</td>";
			echo "<td align=center>".$row[5]."</td>";
			echo "<td align=center>".$row[6]."</td>";
			echo "</tr>";	
			echo "<tr>";			
			echo "<td colspan= 5 width=120 >".mb_substr($row[4], 0,100, 'utf8');
			if(mb_strlen($row[4],'utf8')>=100)
			{
				echo "...</td>";
			}
			else{
				echo "</td>";
				}
			echo "</tr>";
		}
	?>
	</tr>
	</table>
	</p>
	
	<h3 align="center">FIGHTER</h3>
	<p>
	<table width="120" border="3" align="center">
	<tr>
		<th>picture</th>
		<th width=120 nowrap>name</th>
		<th width=120 nowrap>nickname</th>
		<th width=120 nowrap>area</th>
		<th width=120 nowrap>type</th>
	</tr>
	<?php
		$sql = "SELECT * FROM `profile` WHERE type= 'fighter'";
		$result=$conn->query($sql);
		 while($row = $result->fetch_array()) {
			echo "<tr>";
			echo "<td><img src =".$row[3]." ></td>";
			echo "<td align=center>".$row[0]."</td>";
			echo "<td align=center>".$row[1]."</td>";
			echo "<td align=center>".$row[5]."</td>";
			echo "<td align=center>".$row[6]."</td>";
			echo "</tr>";	
			echo "<tr>";			
			echo "<td colspan= 5 width=120 >".mb_substr($row[4], 0,100, 'utf8');
			if(mb_strlen($row[4],'utf8')>=100)
			{
				echo "...</td>";
			}
			else{
				echo "</td>";
				}
			echo "</tr>";
		}
	?>
	</tr>
	</table>
	</p>
	
	<h3 align="center">ASSASSIN</h3>
	<p>
	<table width="120" border="3" align="center">
	<tr>
		<th>picture</th>
		<th width=120 nowrap>name</th>
		<th width=120 nowrap>nickname</th>
		<th width=120 nowrap>area</th>
		<th width=120 nowrap>type</th>
	</tr>
	<?php
		$sql = "SELECT * FROM `profile` WHERE type= 'assassin'";
		$result=$conn->query($sql);
		 while($row = $result->fetch_array()) {
			echo "<tr>";
			echo "<td><img src =".$row[3]." ></td>";
			echo "<td align=center>".$row[0]."</td>";
			echo "<td align=center>".$row[1]."</td>";
			echo "<td align=center>".$row[5]."</td>";
			echo "<td align=center>".$row[6]."</td>";
			echo "</tr>";	
			echo "<tr>";			
			echo "<td colspan= 5 width=120 >".mb_substr($row[4], 0,100, 'utf8');
			if(mb_strlen($row[4],'utf8')>=100)
			{
				echo "...</td>";
			}
			else{
				echo "</td>";
				}
			echo "</tr>";
		}
	?>
	</tr>
	</table>
	</p>
  </body>
</html>
