<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>谢谢您的参与</title>
</head>

<body>

<?php
	$name=$_POST['name'];
	$emil=$_POST['sender'];
	$num=$_POST['num'];
	$text=$_POST['msg'];
	$subject="9th反馈信息";
	$mailcontent="姓名:".$name."\n".
	"邮件地址:".$emil."\n".
	"手机号码:".$num."\n".
	"反馈:".$text."\n";
	$toadd="405947712@qq.com";
	mail($toadd,$subject,$mailcontent);
?>
<h1>发送成功，第九欢迎你！</h1>
</body>
</html>
