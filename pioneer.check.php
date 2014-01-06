<?php
#power toggle
#receiver needs to have network standby enabled before this fully works
if(isset($_POST['PT'])){
	if (PioneerCtrl_getPower($ip) === false){
		DisplayResults('unit did not respond');
	}
	if (PioneerCtrl_getPower($ip) == 'PF'){
		PioneerCtrl_setPower($ip,'PO');
		DisplayResults('Power turned on');
	} elseif (PioneerCtrl_getPower($ip) == 'PO'){
		PioneerCtrl_setPower($ip,'PF');
		DisplayResults('Power turned off');
	}
}
#Mute toggle
if(isset($_POST['MT'])){
	if (PioneerCtrl_getMuting($ip) === false){
		DisplayResults('unit did not respond');
	}
	if (PioneerCtrl_getMuting($ip) == 'MUT0'){
		PioneerCtrl_setMuting($ip,'MF');
		DisplayResults('Muting turned off');
	} elseif (PioneerCtrl_getMuting($ip) == 'MUT1'){
		PioneerCtrl_setMuting($ip,'MO');
		DisplayResults('Muting turned on');
	}
}
#Volume Up
if(isset($_POST['VU'])){
	if (PioneerCtrl_getVolVal($ip) == '67'){
		DisplayResults('volume unable to be increased');
	} else {
		PioneerCtrl_setVolInc($ip);
		DisplayResults(PioneerCtrl_getVolVal($ip));		
	}
}
#Volume Down
if(isset($_POST['VD'])){
	if (PioneerCtrl_getVolVal($ip) == '0'){
		DisplayResults('volume unable to be decreased');
	} else {
		PioneerCtrl_setVolDec($ip);
		DisplayResults(PioneerCtrl_getVolVal($ip));		
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
		DisplayResults(PioneerCtrl_getVolVal($ip));	
	}else{
		DisplayResults('volume unable to be increased');
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
		DisplayResults(PioneerCtrl_getVolVal($ip));
	} else {
		DisplayResults('volume unable to be decreased');
	}
	
	}
#Get Volume
if(isset($_POST['GV'])){
	DisplayResults(PioneerCtrl_getVolVal($ip));
	}
#Function Up
if(isset($_POST['FU'])){
	PioneerCtrl_setFNUp($ip);
	DisplayResults(PioneerCtrl_getSource($ip));
	}
#Function Down
if(isset($_POST['FD'])){
	PioneerCtrl_setFNDn($ip);
	DisplayResults(PioneerCtrl_getSource($ip));
	}
#Get function
if(isset($_POST['GF'])){
	DisplayResults(PioneerCtrl_getSource($ip));
	}
#change tuner preset
if(isset($_POST['SR1'])){
	PioneerCtrl_setAdvSurr($ip);
	}
#change tuner preset
if(isset($_POST['SR2'])){
	PioneerCtrl_setAutoDirect($ip);
	}
#change tuner preset
if(isset($_POST['SR3'])){
	PioneerCtrl_setAlcStd($ip);
	}
?>