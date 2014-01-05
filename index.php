
<?php 
$ip = '192.168.2.4';
include 'pioneer.lib.php'; ?>

<form method="post" action="index.php">
Power:
<input name="PO" type="submit" value="Power On" />
<input name="PF" type="submit" value="Power Off" />
<input name="GP" type="submit" value="Get Power" />
<br>
Function:
<input name="FU" type="submit" value="Function Next" />
<input name="FD" type="submit" value="Function Last" />
<input name="GF" type="submit" value="Get Function" />
<a href="">Open Extended Menu</a>
<br>
Volume:
<input name="VU" type="submit" value="+1" />
<input name="VD" type="submit" value="-1" />
<input name="VU5" type="submit" value="+5" />
<input name="VD5" type="submit" value="-5" />
<input name="GV" type="submit" value="Get Volume" />
<br>
Tuner:
<input name="tune" type="submit" value="Tune" />
<br>
OSD:
<input name="osd" type="submit" value="Get OSD" />
<input name="enter" type="submit" value="Enter" />
<input name="return" type="submit" value="Return" />
<input name="s1" type="submit" value="Select 1" />
<input name="s2" type="submit" value="Select 2" />
<input name="s3" type="submit" value="Select 3" />
<input name="s4" type="submit" value="Select 4" />
<input name="s5" type="submit" value="Select 5" />
<input name="s6" type="submit" value="Select 6" />
<input name="s7" type="submit" value="Select 7" />
<input name="s8" type="submit" value="Select 8" />
<input name="s9" type="submit" value="Select 9" />
<input name="s10" type="submit" value="Select 10" />


</form>


<?php 
#Power On
if(isset($_POST['PO'])){
	PioneerCtrl_setPower($ip,'PO');
	}
#Power Off
if(isset($_POST['PF'])){
	PioneerCtrl_setPower($ip,'PF');
	}
#Get Power state
if(isset($_POST['GP'])){
	echo(PioneerCtrl_getPower($ip));
	}
#Volume Up
if(isset($_POST['VU'])){
	PioneerCtrl_setVolInc($ip);
	echo(PioneerCtrl_getVolVal($ip));
	}
#Volume Down
if(isset($_POST['VD'])){
	PioneerCtrl_setVolDec($ip);
	echo(PioneerCtrl_getVolVal($ip));
	}
#Volume Up 5x
if(isset($_POST['VU5'])){
	PioneerCtrl_setVolInc($ip);
	PioneerCtrl_setVolInc($ip);
	PioneerCtrl_setVolInc($ip);
	PioneerCtrl_setVolInc($ip);
	PioneerCtrl_setVolInc($ip);
	echo(PioneerCtrl_getVolVal($ip));
	}
#Volume Down 5x
if(isset($_POST['VD5'])){
	PioneerCtrl_setVolDec($ip);
	PioneerCtrl_setVolDec($ip);
	PioneerCtrl_setVolDec($ip);
	PioneerCtrl_setVolDec($ip);
	PioneerCtrl_setVolDec($ip);
	echo(PioneerCtrl_getVolVal($ip));
	}
#Get Volume
if(isset($_POST['GV'])){
	echo(PioneerCtrl_getVolVal($ip));
	}
#Function Up
if(isset($_POST['FU'])){
	PioneerCtrl_setFNUp($ip);
	echo(PioneerCtrl_getSource($ip));
	}
#Function Down
if(isset($_POST['FD'])){
	PioneerCtrl_setFNDn($ip);
	echo(PioneerCtrl_getSource($ip));
	}
#Get function
if(isset($_POST['GF'])){
	echo(PioneerCtrl_getSource($ip));
	}
#change tuner preset
if(isset($_POST['tune'])){
	
	}
#OSD
if(isset($_POST['OSD'])){
	echo(PioneerCtrl_getOSD($ip));
	}	
#Enter
if(isset($_POST['enter'])){
	
	}
#return
if(isset($_POST['return'])){
	
	}
#S1
if(isset($_POST['s1'])){
	
	}
#S2
if(isset($_POST['s2'])){
	
	}
#S3
if(isset($_POST['s3'])){
	
	}
#S4
if(isset($_POST['s4'])){
	
	}
#S5
if(isset($_POST['s5'])){
	
	}
#S6
if(isset($_POST['s6'])){
	
	}
#S7
if(isset($_POST['s7'])){
	
	}
#S8
if(isset($_POST['s8'])){
	
	}
#S9
if(isset($_POST['s9'])){
	
	}
#S10
if(isset($_POST['s10'])){
	
	}
?>