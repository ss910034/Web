<?php
	include("connectVar.php");
	$w = "SELECT * FROM `profile`";
	$result = $conn->query($w);
	while($row=$result->fetch_row()){
		echo $row[0]."<br>";
	}
?>	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	*{
		border : 1px solid ;
	}
</style>
<body>
	<table >
		<tr>
			<td>ssss</td>
			<td>dds</td>
			<TD>SSS</TD>
		</tr>
		<tr>
			<td>ssss</td>
			<td>dds</td>
		</tr>
		<tr>
			<td>ssss</td>
			<td>dds</td>
		</tr>
		<tr>
			<td>ssss</td>
			<td>dds</td>
		</tr>
	</table>
</body>
</html>
