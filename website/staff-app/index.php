<!DOCTYPE html>
    <!-- MGGS Staff application page -->
    <head><link href="/styles/style2.css" type="text/css" rel="stylesheet"><title>Staff Application | MGGaming</title>
        <meta name="description" content="Minecraft Servers for Everyone! EPIC!">
        <meta name="keywords" content="apply for staff,minecraft servers,minecraft multiplayer servers,minecraft severs,best minecraft servers,minecraft survival server,minecraft multiplayer server,MGG">
    </head>
    <body onload='colorize();' bgcolor="#202020">
        
        <?php set_include_path("/home/mggaming/public_html/includes"); include "header.php" ?>
        <div class="navtop">
            
        </div>
        <div class="nav">
            <?php include "topnav.php" ?>
        </div>
        <div class="navbottom">
            
        </div>
        <div class="toppic">
            <center><img src=/imgs/banner.png title="MGGaming" /></center>
        </div>
            
        </div>
    <div class="content">
        <?php include "notice.php" ?>
        <br>
        <font size="5px" color="#383838">&nbsp;&nbsp;&nbsp;<H1>Apply for Staff</H1><br></font>
<!-- Form Start -->
        <form method="POST" name="contactform" action="contact-form-handler.php"> 
<p>
<label for='fname'><font size="3px" color="#383838">&nbsp;&nbsp;&nbsp;&nbsp;Your First Name:</font></label> <br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" required="true" name="fname" size="45" onblur="this.value=removeSpaces(this.value);" placeholder="Will">
</p>
<p>
<label for='name'><font size="3px" color="#383838">&nbsp;&nbsp;&nbsp;&nbsp;Your Minecraft Name:</font></label> <br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" required="true" name="name" size="45" onblur="this.value=removeSpaces(this.value);" placeholder="fail_FTW">
</p>
<p>
<label for='email'><font size="3px" color="#383838">&nbsp;&nbsp;&nbsp;&nbsp;Email Address:</font></label> <br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" required="true" name="email" onblur="this.value=removeSpaces(this.value);" size="45" placeholder="John.Doe@example.com"> <br> 
</p>
<p>
<label for='age'><font size="3px" color="#383838">&nbsp;&nbsp;&nbsp;&nbsp;Age:</font></label> <br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" required="true" min=0 max=50 onkeypress="return isNumberKey(event)" name="age" size="2"> <br> 
</p>
<p>
<label for='frank'><font size="3px" color="#383838">&nbsp;&nbsp;&nbsp;&nbsp;What rank are you now?</font></label> <br>
&nbsp;&nbsp;&nbsp;&nbsp;
<select name="frank">
    <optgroup label="MGGSurvival Only">
        <option value="Member" selected>Member</option>
        <option value="Survivor">Survivor</option>
        <option value="Veteran">Veteran</option>
        <option value="VIP">VIP</option>
        <option value="Helper">Helper</option>
        <option value="MGGSBuilder">Builder</option>
        <option value="MGGSProBuilder">ProBuilder</option>
    </optgroup>
    <optgroup label="MGGPrivate Only">
        <option value="JrBuilder">JrBuilder</option>
        <option value="MGGPBuilder">Builder</option>
        <option value="SrBuilder">SrBuilder</option>
        <option value="MGGSProBuilder">ProBuilder</option>
        <option value="MadterBuilder">MasterBuilder</option>
        <option value="L33tBuilder">L33tBuilder</option>
    </optgroup>
    <optgroup label="Staff">
        <option value="Mod">Mod</option>
        <option value="HeadMod">HeadMod</option>
        <option value="JrAdmin">JrAdmin</option>
        <option value="Admin">Admin</option>
        <option value="HeadAdmin">HeadAdmin</option>
    </optgroup>
</select> <br> 
</p>
<label for='trank'><font size="3px" color="#383838">&nbsp;&nbsp;&nbsp;&nbsp;What rank are you applying for?</font></label> <br>
&nbsp;&nbsp;&nbsp;&nbsp;
<select name="trank">
        <option value="Mod" selected>Mod</option>
        <option value="HeadMod">HeadMod</option>
        <option value="JrAdmin">JrAdmin</option>
        <option value="Admin">Admin</option>
        <option value="HeadAdmin">HeadAdmin</option>
</select> <br> 
</p>
<p>
<label for='exp'><font size="3px" color="#383838">&nbsp;&nbsp;&nbsp;&nbsp;Prior Experience:</font></label> <br>
&nbsp;&nbsp;&nbsp;&nbsp;<textarea required="true" name="exp"rows="8" cols="50" placeholder="Include links to pictures and/or server sites. If you have no prior experience, put 'none'"></textarea> <br> 
</p>
<p>
<label for='message'><font color="#383838">&nbsp;&nbsp;&nbsp;&nbsp;Reason YOU Should Be Promoted:</font></label> <br>
&nbsp;&nbsp;&nbsp;&nbsp;<textarea required="true" name="message"rows="8" cols="50" placeholder="Put more than a few sentences! Short applications will immediately."></textarea>
</p>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit"><br>
</form><br>NOTICE! Your IP will be logged! Don't do anything stupid! <br>

<script language="JavaScript">
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your IGN"); 
frmvalidator.addValidation("fname","req","Please provide your first name"); 
frmvalidator.addValidation("email","req","Please provide your email");  
frmvalidator.addValidation("frank","req","Please provide your current rank");  
frmvalidator.addValidation("trank","req","Please provide the rank you are applying for"); 
frmvalidator.addValidation("email","email","Please enter a valid email address");
frmvalidator.addValidation("age","req","Please provide your age"); 
frmvalidator.addValidation("exp","req","Please provide your previous experiences"); 
frmvalidator.addValidation("message","req","Please provide your reason for promotion"); 
</script>
<script language="javascript" type="text/javascript">
function removeSpaces(string) {
 return string.split(' ').join('');
}
</script>
<script>
    function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
    }
</script>
<!-- Form end -->
<br><br>
<center><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- failftw Ads -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-4311183631277531"
     data-ad-slot="6183546005"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></center>
    </div>
    <div class="footer">
        <?php include "footer.php" ?>
    </div>
    
    </body>