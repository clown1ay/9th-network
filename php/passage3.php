<html>
<head>
<meta name="viewport" content="width=device-width ,initial-scale=1">
<meta name="keywords" content="9thnet,第九网络组,9th,the9,西安建筑科技大学,西安建筑科技大学第九网络组,子午社联,子午社联第九网络组">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/t9.gif" type="image/gif" > 
<title>第九网络组</title>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body bgcolor="F5F5F5">
<img src="9th2.jpg">
<div class="toolbar">
<div>
<a class="toolbarimg" href="http://www.9thnet.com"><img src="images/9th.jpg" width="45" height="40" /></a>
<a class="toolbartext" href="read.php">资讯</a><a class="toolbartext" href="security.php">网络安全</a>
</div>
</div>
<div class="toolbar2">
  <div>
    <ul>
      <li><a href="read.php">系统</a></li>
      <li><a href="security.php">网络安全</a></li>
      <li><a href="#">IT新闻</a></li>
      <li><a href="#">建大热点</a></li>
      <li><a href="#">社团动态</a></li>
    </ul>
  </div>
</div>
<br>
<br>
<p>第九网络组社团 > 网络安全</p>
<br>
<br>
<div class="text"><p><h2><center>不安全的wifi</center></h2></p>
<p>作者：贺钧威（图片较多请耐心等待）</p>
<br>
<p>耐心是一切聪明才智的基础。<br> 
——柏拉图【古希腊】<br>
随着路由器的普遍，家家户户都有wifi，往往大家只知道输入密码连接，而细心点的人会发现当下的路由器后边都有个pin码，只要你输入和路由器pin码一样的数字使用wps也可以连接上去，这就是把双刃剑了，虽然密码花样百出但是pin码……呵呵,另一种办法是靠些软件跑字典跑出相匹配的密码。写这篇文章希望大家提高网络安全意识，而不是去偷邻居家的网（还不如厚着脸皮去问）
黑客不会手动一个一个去尝试，而是利用一个自动化的工具，下面讲解怎么做这样的工具：<br>
1.插上一个U盘，打开UItraIOS（试用就好）<a href="UltraISO_xp510.rar"><em>UItraIOS下载地址</em></a>在本地目录中找到镜像所在文件夹并打开镜像（所谓镜像指的是.iso文件）<a href="CDlinux0.9.6.1_SSE中文.iso"><em>CDlinux的镜像下载</em></a>之后在启动里写入，选中你的U盘点击写入就好（会被格式化，所以U盘里不要放东西）。
<img src="security/1.png">
<img src="security/2.png">
<br>
初步就完成了。
<br>
2.打开Grub4Dos（<a href="grub4dos-0.4.4.zip"><em>Grub4Dos下载</em></a>）选中磁盘和你的U盘（下拉菜单里可以看存储空间的大小来辨别你的U盘），
选中不保存原来的MBR，启动时不搜索软盘，不引导原来的MBR，点安装，弹出了黑框提示successfully按回车就行。
<img src="security/3.png"><img src="security/4.png">
<br>
3.将这四个文件放在U盘根目录下。（menu.lst/grub.exe/grldr/splash，<a href="wifi.rar"><em>下载后解压</em></a>）
你的U盘下现在应该是这个样子，共有六个文件，这样启动U盘就做成了。
<img src="security/5.png">
<br>
最后就是设置开机启动项，这个在装系统的时候会经常用到，会装系统的一般都懂怎么设置开机启动，一般笔记本在开机一瞬间按F12能打开快速启动项，选中你的U盘按回车，进入一个选择语言的画面，建议大家选择繁体中文，简体的貌似有问题，进入U盘启动的系统后，PIN或抓包跑字典，具体如下：
<br>
1，打开水滴。<img src="security/6.jpg">
<br>
2.  <img src="security/7.jpg">     
<br>
     左边无线网卡，显示出你的无线网卡的名字，就可以点右边的扫描了，等扫描结束，然后看中间看见有wps的，就是能pin的，选择一个，点击下面的Reaver，就开始破解了（这个属于PIN破解法，要点如下：3-10 seconds/pin一般几个小时就能出密码了,有防pin的路由器会等待300秒，这种方法就不可行了。<br>
<img src="security/8.jpg">
<img src="security/9.jpg">
<br>出密码是这样子的：<br>
<img src="security/10.jpg">
         <br>另一种方法是抓取数据包暴力猜解（跑字典）。<br>
 <img src="security/11.jpg">
没有客户端的不能抓包
点击启动开始抓包。
<img src="security/12.jpg">
<img src="security/13.jpg">
<img src="security/14.jpg">
<br>抓到了！ 强烈推荐你不要自己跑，要跑也回WINDOWS跑。<br>
<img src="security/15.jpg">
<br>不建议自己跑，可以在淘宝找店家跑，也不是很贵，15元  0.0
 
<img src="security/16.jpg">
  <br>这是跑出密码的样子。

<br>如果你点了否，那么就会出现如下：
<img src="security/17.jpg">
<img src="security/18.jpg">   

         
<br>这是选择要拷贝的文件别看错了，下面才是要存放的目录。
<img src="security/19.jpg">      
<img src="security/20.jpg">

<br>至此，握手包已经到手。

<br>windows下用EWSA可以跑字典<a href="EWSA.rar"><em>EWSA</em></a>
打开EWSA（option-中文）--打开项目--你抓到的wpk--开始测试（选中一个字典），这个很简单可以自己摸索。
<br>最后补充，握手包的形式是.cap跟.cap.wkp。如果PIN破解到一半，想关机，可以把进程复制到电脑里，进程在/tmp/minidwep里，文件是.wpc（容易出错，不推荐）<br><br>
<em>the quieter you become,the more you are able to hear</em>
</p>
<br>
</div>
	<div id="footer">
		<p>Copyright (c)<?php echo date("y.m.d");?> The 9th Network Team</p>
	</div>
</body>
</html>
