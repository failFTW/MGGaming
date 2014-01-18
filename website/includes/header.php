<?php
$file = basename(__FILE__);
if(eregi($file,$_SERVER['REQUEST_URI'])) {
    die("Sorry but you cannot access this file directly for security reasons.");
}
?>

  <?php include "/home/mggaming/public_html/includes/config.php" ?>
  <div class="header">
    <a href="http://www.twitter.com/MaineGaming"><img align=right src=http://failftw.info/imgs/twlogo.png title="Follow us on Twitter!" /></a>
    <a href="https://www.facebook.com/MGGamingMC"><img align=right src=http://failftw.info/imgs/fblogo.png title="Like us on Facebook!" /></a>
    <img align=right src=http://failftw.info/imgs/cnnctwrds.png />
  </div>

<script type="text/javascript">
var msg = 'Gotta love dem H4X!'
var colorTimer = null;

function toHex(n){
var hexChars = '0123456789ABCDEF';
if (n == 0) return n;
var j, k;
var temp = '';
while (n != 0){
j = n % 16;
n = (n - j)/16;
temp = hexChars.charAt(j) + temp;
}
return temp;
}
function colorize(){
if (!document.getElementById) return;
for (i=0; i<msg.length; i++){
k = Math.round(Math.random() * 16777215);
k = toHex(k);
while (k.length < 6){
k = k + '0';
}
document.getElementById('colorizer' + i).style.color = '#' + k;
}

//  Speed change below - Default = 200 - Lower = Faster 

colorTimer = window.setTimeout('colorize()', 200);
}
</script>
<SCRIPT LANGUAGE="JavaScript">
<!-- ;

// Setting 

var rate = 25;  // Increase-Decrease amount ( Higher=Faster )

// - DO NOT ALTER BELOW -
// Main routine

if (document.getElementById)
window.onerror=new Function("return true")

var objActive; 
var act = 0;  
var elmH = 0; 
var elmS = 128; 
var elmV = 255; 
var clrOrg;  
var TimerID; 

if (document.all) {
    document.onmouseover = doRainbowAnchor;
    document.onmouseout = stopRainbowAnchor;
}
else if (document.getElementById) {
    document.captureEvents(Event.MOUSEOVER | Event.MOUSEOUT);
    document.onmouseover = Mozilla_doRainbowAnchor;
    document.onmouseout = Mozilla_stopRainbowAnchor;
}
function doRainbow(obj)
{
    if (act == 0) {
        act = 1;
        if (obj)
            objActive = obj;
        else
            objActive = event.srcElement;
        clrOrg = objActive.style.color;
        TimerID = setInterval("ChangeColor()",100);
    }
}
function stopRainbow()
{
    if (act) {
        objActive.style.color = clrOrg;
        clearInterval(TimerID);
        act = 0;
    }
}
function doRainbowAnchor()
{
    if (act == 0) {
        var obj = event.srcElement;
        while (obj.tagName != 'A' && obj.tagName != 'BODY') {
            obj = obj.parentElement;
            if (obj.tagName == 'A' || obj.tagName == 'BODY')
                break;
        }

        if (obj.tagName == 'A' && obj.href != '') {
            objActive = obj;
            act = 1;
            clrOrg = objActive.style.color;
            TimerID = setInterval("ChangeColor()",100);
        }
    }
}
function stopRainbowAnchor()
{
    if (act) {
        if (objActive.tagName == 'A') {
            objActive.style.color = clrOrg;
            clearInterval(TimerID);
            act = 0;
        }
    }
}
function Mozilla_doRainbowAnchor(e)
{
    if (act == 0) {
        obj = e.target;
        while (obj.nodeName != 'A' && obj.nodeName != 'BODY') {
            obj = obj.parentNode;
            if (obj.nodeName == 'A' || obj.nodeName == 'BODY')
                break;
        }

        if (obj.nodeName == 'A' && obj.href != '') {
            objActive = obj;
            act = 1;
            clrOrg = obj.style.color;
            TimerID = setInterval("ChangeColor()",100);
        }
    }
}
function Mozilla_stopRainbowAnchor(e)
{
    if (act) {
        if (objActive.nodeName == 'A') {
            objActive.style.color = clrOrg;
            clearInterval(TimerID);
            act = 0;
        }
    }
}
function ChangeColor()
{
    objActive.style.color = makeColor();
}
function makeColor()
{
    
    // HSVtoRGB
    if (elmS == 0) {
        elmR = elmV;    elmG = elmV;    elmB = elmV;
    }
    else {
        t1 = elmV;
        t2 = (255 - elmS) * elmV / 255;
        t3 = elmH % 60;
        t3 = (t1 - t2) * t3 / 60;

        if (elmH < 60) {
            elmR = t1;  elmB = t2;  elmG = t2 + t3;
        }
        else if (elmH < 120) {
            elmG = t1;  elmB = t2;  elmR = t1 - t3;
        }
        else if (elmH < 180) {
            elmG = t1;  elmR = t2;  elmB = t2 + t3;
        }
        else if (elmH < 240) {
            elmB = t1;  elmR = t2;  elmG = t1 - t3;
        }
        else if (elmH < 300) {
            elmB = t1;  elmG = t2;  elmR = t2 + t3;
        }
        else if (elmH < 360) {
            elmR = t1;  elmG = t2;  elmB = t1 - t3;
        }
        else {
            elmR = 0;   elmG = 0;   elmB = 0;
        }
    }

    elmR = Math.floor(elmR).toString(16);
    elmG = Math.floor(elmG).toString(16);
    elmB = Math.floor(elmB).toString(16);
    if (elmR.length == 1)    elmR = "0" + elmR;
    if (elmG.length == 1)    elmG = "0" + elmG;
    if (elmB.length == 1)    elmB = "0" + elmB;

    elmH = elmH + rate;
    if (elmH >= 360)
        elmH = 0;

    return '#' + elmR + elmG + elmB;
}
// end hide -->
</SCRIPT>
