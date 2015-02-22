<?php
#This file gets called from JQuery's AJAX library on index.php, it processes commands via GET
#the If statements in here then call functions in lib.p822k.php
include 'lib.p822k.php';
include 'config.php';
$command = $_GET['command'];

#power toggle
#receiver needs to have network standby enabled before this fully works
if($command == 'PT'){
	if (PioneerCtrl_getPower($ip) === false){
		DisplayResults('<div class="statuscontent">unit did not respond</div>');
	}
	if (PioneerCtrl_getPower($ip) == 'PF'){
		PioneerCtrl_setPower($ip,'PO');
		DisplayResults('<div class="statuscontent">Power turned on</div>');
	} elseif (PioneerCtrl_getPower($ip) == 'PO'){
		PioneerCtrl_setPower($ip,'PF');
		DisplayResults('<div class="statuscontent">Power turned off</div>');
	}
}
#Get Power
if($command == 'GP'){
	if (PioneerCtrl_getPower($ip) === false){
		DisplayResults('<div class="statuscontent">unit did not respond</div>');
	}
	if (PioneerCtrl_getPower($ip) == 'PF'){
		DisplayResults('<div class="statuscontent">Power is off</div>');
	} elseif (PioneerCtrl_getPower($ip) == 'PO'){
		DisplayResults('<div class="statuscontent">Power is on</div>');
	}
}
#Mute toggle
if($command == 'MT'){
	if (PioneerCtrl_getMuting($ip) === false){
		DisplayResults('<div class="statuscontent">unit did not respond</div>');
	}
	if (PioneerCtrl_getMuting($ip) == 'MUT0'){
		PioneerCtrl_setMuting($ip,'MF');
		DisplayResults('<div class="statuscontent">Muting turned off</div>');
	} elseif (PioneerCtrl_getMuting($ip) == 'MUT1'){
		PioneerCtrl_setMuting($ip,'MO');
		DisplayResults('<div class="statuscontent">Muting turned on</div>');
	}
}
#Volume Up
if($command == 'VU'){
	if (PioneerCtrl_getVolVal($ip) == '67'){
		DisplayResults('<div class="statuscontent">volume unable to be increased</div>');
	} else {
		PioneerCtrl_setVolInc($ip);
		DisplayResults('<div class="statuscontent">Volume:' . PioneerCtrl_getVolVal($ip) . '</div>');		
	}
}
#Volume Down
if($command == 'VD'){
	if (PioneerCtrl_getVolVal($ip) == '0'){
		DisplayResults('<div class="statuscontent">volume unable to be decreased</div>');
	} else {
		PioneerCtrl_setVolDec($ip);
		DisplayResults('<div class="statuscontent">Volume:' . PioneerCtrl_getVolVal($ip) . '</div>');		
	}
}
#Volume Up 5x
if($command == 'VU5'){
	if (PioneerCtrl_getVolVal($ip) < '63'){
		PioneerCtrl_setVolInc($ip);
		PioneerCtrl_setVolInc($ip);
		PioneerCtrl_setVolInc($ip);
		PioneerCtrl_setVolInc($ip);
		PioneerCtrl_setVolInc($ip);
		DisplayResults('<div class="statuscontent">Volume:' . PioneerCtrl_getVolVal($ip) . '</div>');	
	}else{
		DisplayResults('<div class="statuscontent">volume unable to be increased</div>');
	}
}
#Volume Down 5x
if($command == 'VD5'){
	if (PioneerCtrl_getVolVal($ip) > '4'){
		PioneerCtrl_setVolDec($ip);
		PioneerCtrl_setVolDec($ip);
		PioneerCtrl_setVolDec($ip);
		PioneerCtrl_setVolDec($ip);
		PioneerCtrl_setVolDec($ip);
		DisplayResults('<div class="statuscontent">Volume:' . PioneerCtrl_getVolVal($ip) . '</div>');
	} else {
		DisplayResults('<div class="statuscontent">volume unable to be decreased</div>');
	}
}
#Get Volume
if($command == 'GV'){
	DisplayResults('<div class="statuscontent">' . PioneerCtrl_getVolVal($ip) . '</div>');
	}
#Function Up
if($command == 'FU'){
	PioneerCtrl_setFNUp($ip);
	DisplayResults('<div class="statuscontent">' . PioneerCtrl_getSource($ip, $inNames) . '</div>');
	}
#Function Down
if($command == 'FD'){
	PioneerCtrl_setFNDn($ip);
	DisplayResults('<div class="statuscontent">' . PioneerCtrl_getSource($ip, $inNames) . '</div>');
	}
#Get function
if($command == 'GF'){
	DisplayResults('<div class="statuscontent">' . PioneerCtrl_getSource($ip, $inNames) . '</div>');
	}

#Toggle HDZPower
if($command == 'HDZPT'){
        if (PioneerCtrl_getHDZPower($ip) === false){
                DisplayResults('<div class="statuscontent">unit did not respond</div>');
        }
        if (PioneerCtrl_getHDZPower($ip) == 'ZEF'){
                PioneerCtrl_setHDZPower($ip,'ZEO');
                DisplayResults('<div class="statuscontent">HDZ Power turned on</div>');
        } elseif (PioneerCtrl_getHDZPower($ip) == 'ZEO'){
                PioneerCtrl_setHDZPower($ip,'ZEF');
                DisplayResults('<div class="statuscontent">HDZ Power turned off</div>');
        }
}
#Get HDZPower
if($command == 'HDZGP'){
        if (PioneerCtrl_getHDZPower($ip) === false){
                DisplayResults('<div class="statuscontent">unit did not respond</div>');
        }
        if (PioneerCtrl_getHDZPower($ip) == 'ZEF'){
                DisplayResults('<div class="statuscontent">HDZ Power is off</div>');
        } elseif (PioneerCtrl_getHDZPower($ip) == 'ZEO'){
                DisplayResults('<div class="statuscontent">HDZ Power is on</div>');
        }
}
#Get HDZ Input
if($command == 'HDZGI'){
        if (PioneerCtrl_getHDZSource($ip, $inNamesHDZ) === false){
                DisplayResults('<div class="statuscontent">Unspecified Source</div>');
	}
		DisplayResults('<div class="statuscontent">' . PioneerCtrl_getHDZSource($ip,$inNamesHDZ) . '</div>');
}
#HDZ Function Up
if($command == 'ZEC'){
        PioneerCtrl_setHDZFNUp($ip);
        DisplayResults('<div class="statuscontent">' . PioneerCtrl_getHDZSource($ip,$inNamesHDZ) . '</div>');
        }
#HDZ Function Down
if($command == 'ZEB'){
        PioneerCtrl_setHDZFNDn($ip);
        DisplayResults('<div class="statuscontent">' . PioneerCtrl_getHDZSource($ip,$inNamesHDZ) . '</div>');
        }

#HDZ Input Bluray
if($command == 'HDZBLURAY'){
        PioneerCtrl_setHDZsource($ip, '04');
        DisplayResults('<div class="statuscontent">' . PioneerCtrl_getHDZSource($ip, $inNames) . '</div>');
        }
#HDZ Input MediaCenterPC
if($command == 'HDZHTPC'){
        PioneerCtrl_setHDZsource($ip, '06');
        DisplayResults('<div class="statuscontent">' . PioneerCtrl_getHDZSource($ip, $inNames) . '</dev>');
        }
#HDZ Input Comp
if($command == 'HDZCOMP'){
        PioneerCtrl_setHDZsource($ip, '10');
        DisplayResults('<div class="statuscontent">' . PioneerCtrl_getHDZSource($ip, $inNames) . '</dev>');
        }
#HDZ Input ATV
if($command == 'HDZATV'){
        PioneerCtrl_setHDZsource($ip, '15');
        DisplayResults('<div class="statuscontent">' . PioneerCtrl_getHDZSource($ip, $inNames) . '</dev>');
        }
#HDZ Input Xbox One
if($command == 'HDZXBONE'){
        PioneerCtrl_setHDZsource($ip, '22');
        DisplayResults('<div class="statuscontent">' . PioneerCtrl_getHDZSource($ip, $inNames) . '</dev>');
        }
#HDZ Input HDMI5/FRONT
if($command == 'HDZHDMI5'){
        PioneerCtrl_setHDZsource($ip, '23');
        DisplayResults('<div class="statuscontent">' . PioneerCtrl_getHDZSource($ip, $inNames) . '</dev>');
        }
#HDZ Input BD
if($command == 'HDZBD'){
        PioneerCtrl_setHDZsource($ip, '25');
        DisplayResults('<div class="statuscontent">' . PioneerCtrl_getHDZSource($ip, $inNames) . '</dev>');
        }


?>
