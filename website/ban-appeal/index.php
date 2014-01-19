<!DOCTYPE html>
    <!-- MGGS Ban Appeal page -->
    <head>
        <link href="/styles/style2.css" type="text/css" rel="stylesheet">
        <title>Appeal a Ban | MGGaming</title>
        <meta name="description" content="Appeal a ban here!">
        <meta name="keywords" content="ban appeal,minecraft servers,minecraft multiplayer servers,minecraft severs,best minecraft servers,minecraft survival server,minecraft multiplayer server,MGG">
    </head>
    <body bgcolor="#202020">
        <?php set_include_path("/home/mggaming/public_html/includes"); include "header.php" ?>
        <div class="navtop">
        </div>
        <div class="nav">
            <?php include "topnav.php" ?>
        </div>
        <div class="navbottom">
        </div>
        <div class="toppic">
            <img src=/imgs/banner.png title="MGGaming" />
        </div>
    <div class="content">
        <?php include "notice.php" ?>
        <br>
        <font size="5px" color="#383838">&nbsp;&nbsp;&nbsp;<H1>Appeal a Local Ban</H1><br></font>
<!-- Form Start -->
        <form method="POST" name="contactform" action="contact-form-handler.php"> 
<p>
<label for='name'><font size="3px" color="#383838">&nbsp;&nbsp;&nbsp;&nbsp;Your Minecraft Name:</font></label> <br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" size="45" placeholder="fail_FTW">
</p>
<p>
<label for='email'><font size="3px" color="#383838">&nbsp;&nbsp;&nbsp;&nbsp;Email Address:</font></label> <br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" size="45" placeholder="John.Doe@example.com"> <br> 
</p>
<p>
<label for='bannedby'><font size="3px" color="#383838">&nbsp;&nbsp;&nbsp;&nbsp;Who Banned You?</font></label> <br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="bannedby" size="45" placeholder="The Console"> <br>
</p>
<p>
<label for='message'><font color="#383838">&nbsp;&nbsp;&nbsp;&nbsp;Reason You Should Unbanned:</font></label> <br>
&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="message"rows="6" cols="50" title="Put more than a sentence!" placeholder="Put more than one or two sentences! Short appeals will be rejected immediately!"></textarea>
</p>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit"><br>
</form><br> NOTICE! Your ip will be logged! Don't do anything stupid! <br>
<br>
    <center>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- failftw Ads -->
        <ins class="adsbygoogle"
        style="display:inline-block;width:728px;height:90px"
        data-ad-client="ca-pub-4311183631277531"
        data-ad-slot="6183546005"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </center>

<script language="JavaScript">
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your IGN"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("bannedby","req","Please provide who banned you"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
<!-- Form end -->
    </div>
    <div class="footer">
        <?php include "footer.php" ?>
    </div>
    
    </body>