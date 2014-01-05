<?php
#Power On
if(isset($_POST['PO'])){
	PioneerCtrl_setPower($ip,'PO');
	}
#Power Off
if(isset($_POST['PF'])){
	PioneerCtrl_setPower($ip,'PF');
	}
#power toggle
#receiver needs to have network standby enabled before this fully works
if(isset($_POST['PT'])){
	if (PioneerCtrl_getPower($ip) === false){
		echo 'unit did not respond';
	}
	if (PioneerCtrl_getPower($ip) == 'PF'){
		PioneerCtrl_setPower($ip,'PO');
	} elseif (PioneerCtrl_getPower($ip) == 'PO'){
		PioneerCtrl_setPower($ip,'PF');
	}
}
#Get Power state
if(isset($_POST['GP'])){
	echo(PioneerCtrl_getPower($ip));
	}
#Volume Up
if(isset($_POST['VU'])){
	if (PioneerCtrl_getVolVal($ip) == '67'){
		echo 'volume unable to be increased';
	} else {
		PioneerCtrl_setVolInc($ip);
		echo(PioneerCtrl_getVolVal($ip));		
	}
}
#Volume Down
if(isset($_POST['VD'])){
	if (PioneerCtrl_getVolVal($ip) == '0'){
		echo 'volume unable to be decreased';
	} else {
		PioneerCtrl_setVolDec($ip);
		echo(PioneerCtrl_getVolVal($ip));		
	}
}
#Volume Up 5x
if(isset($_POST['VU5'])){
	if (PioneerCtrl_getVolVal($ip) < '63'){
		PioneerCtrl_setVolInc($ip);
		PioneerCtrl_setVolInc($ip);
		PioneerCtrl_setVolInc($ip);
		PioneerCtrl_setVolInc($ip);
		PioneerCtrl_setVolInc($ip);
		echo(PioneerCtrl_getVolVal($ip));	
	}else{
		echo 'volume unable to be increased';
	}
}
#Volume Down 5x
if(isset($_POST['VD5'])){
	if (PioneerCtrl_getVolVal($ip) > '4'){
		PioneerCtrl_setVolDec($ip);
		PioneerCtrl_setVolDec($ip);
		PioneerCtrl_setVolDec($ip);
		PioneerCtrl_setVolDec($ip);
		PioneerCtrl_setVolDec($ip);
		echo(PioneerCtrl_getVolVal($ip));
	} else {
		echo 'volume unable to be decreased';
	}
	
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
?>