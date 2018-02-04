<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>新增英雄</title>
  </head>
  <body>
	<p>
	<h3 align="center">新增英雄</h3>
	<form id="form1" name="form1" method="post" action="my.php" Enctype="Multipart/Form-Data" >
	<p>name : <input type="text" name = "name" id="textfield" /> </p>
	<p>nickname : <input type="text" name = "nick" id="textfield2" /> </p>
	<p>area : <input type="text" name = "area" id="field3" /> </p>
	<p>Type : 
		<select name='tt'>
		<option value="Adcarry">ADCARRY</option>
		<option value="Apcarry">APCARRY</option>
		<option value="Tank">TANK</option>
		<option value="Assassin">ASSASSIN</option>
		<option value="Fighter">FIGHTER</option>
		</select>
		</p>
	<p>picture link : <input  name = "pic" type="file" id="text3" size="170" /></p>
    <p>decscription : <input name = "des" type="text" id="textfield3" size="170" /> </p>		
	<input type="submit" name="button" id="button" value="送出" />
	</form>
	</p>
	<p align="center"><a href="hwone.php">返回</a></p>
	
  </body>
</html>