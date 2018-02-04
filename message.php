<?php
  require_once("connectVar.php");
  if(isset($_POST['Submit']) && $_POST['Submit']=='submit'){
    if($_POST['formUsername']!=''&&$_POST['formMessage']!=''){
      $title=$_POST['formUsername'];
      $mess=$_POST['formMessage'];
      $sql = "INSERT INTO `mess`(`Title`, `Message`) VALUES ('".$title."','".$mess."')";
      $conn->query($sql);
    }
    else{?>
    <script type="text/javascript">
      alert("標題/留言內容不可以空白!!");
    </script>
<?php
    }
  }
  $sqls = "SELECT * FROM `MESS` WHERE 1";
  $result = $conn->query($sqls);
?>
<!DOCTYPE html>
<html>
<head>
  <title>系友留言板</title>
  <link rel="stylesheet" type="text/css" href="message.css">
</head>
<body>
  <nav><a href="#">All Messages</a></nav>
  <h1>Leave me a message to SIWANCSE...</h1>
    <div class="bubbleContainer">
      <div class="bubbleBody">
        <form id="message" action="#" method="post">
          <input type="text" name="formUsername" placeholder="Message Title"/>
          <textarea name="formMessage" placeholder="Message here"></textarea>
        </form>
      </div>
    </div>
    <button class="btnSendMessage" type="submit" name="Submit" value="submit" form="message">Send</button>
    
    <h1>Message Board</h1>
    <ul class="messageList">
      <li class="message">
      <?php
        while($row=$result->fetch_array()){?>
        <p class="messageTitle">▨ &nbsp;<?php echo $row[1];?></p>
        <p class="messageContent"><?php echo $row[2];?></p>
      <?php } ?>
      </li>
    </ul>
</body>
</html>