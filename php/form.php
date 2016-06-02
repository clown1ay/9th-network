<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Just Join Us</title>
        <link href='../../fonts.googleapis.com/css@family=PT+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="reset.css" title="" type="text/css" media="screen">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen">
        <script type="text/javascript" src="../../ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/html5.js"></script>
    </head>
   
    <body id="body" class="color-blue">
        <div id="wrapper">
            <!-- MAIN CONTENT  -->
            <section id="content">
                <h1 id="main-head">Just Join Us</h1>
                <!-- END MAIN CONTENT  -->
                <div class="aside" id="timer">
                </div>
            </section>
            <aside id="newsletter">
                <div class="wrapper">

              </div>
            </aside>
        </div>
        <aside id="secondary">
            <div class="wrapper">
                <section id="about">
                    <h2>第九网络组</h2>
                    <p>若您想加入我们社团，请详细填写右表，网站报错填写最后一项即可。</p>
                    <p>我们尽量会在一周内给你回复邮件，请正确填写邮箱地址和手机号码。</p>
                </section>
                <section id="contact">
                    <h2>第九欢迎你</h2>
                    <form method="post" id="contact-form" action="contact.php">
                        <p class="name">
                            <label for="name">name</label>
                            <input id="name" type="text" class="required" placeholder="姓名" name="name" />
                        </p>
                        <p class="sender">
                            <label for="email">Email</label>
                            <input id="sender" class="email required" type="text" placeholder="Email address" name="sender" />
                        </p>
                         <p class="sender">
                            <label for="num">num</label>
                           <input id="sender" class="email required" type="text" placeholder="手机" name="num" />
                </p>
                        <p class="msg">
                            <label for="msg">msg</label>
                            <textarea id="msg" class="required" placeholder="给我们建议" name="msg"></textarea>
                        </p>
                        <input class="submit-button" type="submit" value="submit" />
                    </form>
   
                </section>
            </div>
            <footer id="footer">
                <div class="wrapper">
             <p>Copyright (c)<?php echo date("y.m.d");?> The 9th Network Team</p>
                </div>
            </footer>
        </aside>

</body>
</html>