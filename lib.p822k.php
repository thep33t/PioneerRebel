<?php
	 # lib.p822k.php :: Pioneer VSX-822-K Telnet Functions
	 # Forked and modified from Quinn Ebert's "Pioneer Rebel" Software Project
	function PioneerCtrl_SEND_CMD($address,$command='PO',$parameter=false,$param_first=true) {
		$fp = fsockopen($address, 8102, $errno, $errstr, 30);
		if (!$fp) {
			echo __FUNCTION__."() ERROR: $errstr ($errno), planned command was \"$command\"!\n";
			return false;
		} else {
			$cmd = '';
			if (! $parameter) {
				$cmd = $command;
			} else {
				if ($param_first) {
					$cmd = $parameter.$command;
				} else {
					$cmd = $command.$parameter;
				}
			}
			$cmd .= "\r\n";
			fwrite($fp, $cmd);
			fclose($fp);
			usleep(200000);
		}
		return false;
	}
	#This was added because rcv's are slower and less responsive than send commands.
	function PioneerCtrl_RCV_CMD($address,$command='PO',$parameter=false,$param_first=true) {
		$fp = fsockopen($address, 8102, $errno, $errstr, 30);
		if (!$fp) {
			echo __FUNCTION__."() ERROR: $errstr ($errno), planned command was \"$command\"!\n";
			return false;
		} else {
			$cmd = '';
			if (! $parameter) {
				$cmd = $command;
			} else {
				if ($param_first) {
					$cmd = $parameter.$command;
				} else {
					$cmd = $command.$parameter;
				}
			}
			$cmd .= "\r\n";
			fwrite($fp, $cmd);
			$out = fgets($fp);
			fclose($fp);
			flush();
			usleep(200000);
			return $out;
		}
		return false;
	}

	function PioneerCtrl_setVolDec($address) {
		PioneerCtrl_SEND_CMD($address,'VD');
	}
	function PioneerCtrl_setVolInc($address) {
		PioneerCtrl_SEND_CMD($address,'VU');
	}




	function PioneerCtrl_setSource($address,$fnInput) {
		PioneerCtrl_SEND_CMD($address,$fnInput.'FN');
	}
	function PioneerCtrl_setPower($address,$fnPower) {
			PioneerCtrl_SEND_CMD($address,$fnPower);
	}



	function PioneerCtrl_setMuting($address,$fnMuted) {
		PioneerCtrl_SEND_CMD($address,$fnMuted);
	}
	function PioneerCtrl_getMuting($address) {
		$out = PioneerCtrl_RCV_CMD($address,'?M');
		if ( $out === false ) return false;
			$val = trim($out);
			return $val;
	}



	function PioneerCtrl_getPower($address) {
		$out = PioneerCtrl_RCV_CMD($address,'?P');
		if ( $out === false ) return false;
		if (trim($out) == 'PWR0'){
			$val = 'PO';
			return $val;
		} else {
			$val = 'PF';
			return $val;
		}
	}



	function PioneerCtrl_getVolPct($address) {
		$out = intval(PioneerCtrl_getVolVal($address));
		if (! $out) return false;
		$pct = strval(intval(round((floatval($out)*1.25))));
		return $pct;
	}
	function PioneerCtrl_getVolVal($address) {
		$out = PioneerCtrl_RCV_CMD($address,'?V');
		if (! $out) return false;
		$val = intval((((intval(substr($out,3)))-1)/2));
		return $val;
	}
	function PioneerCtrl_getSource($address) {
                $inNames["FN02"] = "Tuner";
                $inNames["FN04"] = "Bluray";
                $inNames["FN06"] = "MediaCenterPC";
                $inNames["FN10"] = "Comp";
                $inNames["FN15"] = "AppleTV";
                $inNames["FN17"] = "iPodUSB";
                $inNames["FN22"] = "Xbox One";
                $inNames["FN23"] = "HDMI5MHL";
                $inNames["FN25"] = "BD";
                $inNames["FN38"] = "NetRadio";
                $inNames["FN41"] = "Pandora";
                $inNames["FN44"] = "MediaServer";
                $inNames["FN45"] = "Favorites";
                $inNames["FN46"] = "AirPlay";
		$out = PioneerCtrl_RCV_CMD($address,'?FN');
		if (! $out) return false;
		$val = trim($out);
		return $inNames[$val];
	}
	


	function PioneerCtrl_setPreset($address,$presetno) {
		PioneerCtrl_SEND_CMD($address,$presetno.'PR');
	}


	# Presses Play button
	function PioneerCtrl_pushPlay($address) {
		PioneerCtrl_SEND_CMD($address,'10PB');
	}
	# Presses Pause button
	function PioneerCtrl_pushPause($address) {
		PioneerCtrl_SEND_CMD($address,'11PB');
	}
	# Presses Skip Reverse button
	function PioneerCtrl_pushRSkip($address) {
		PioneerCtrl_SEND_CMD($address,'12PB');
	}
	# Presses Skip Forward button
	function PioneerCtrl_pushFSkip($address) {
		PioneerCtrl_SEND_CMD($address,'13PB');
	}
	# Presses Stop button
	function PioneerCtrl_pushStop($address) {
		PioneerCtrl_SEND_CMD($address,'20PB');
	}
	# Presses Enter button
	function PioneerCtrl_pushEnter($address) {
		PioneerCtrl_SEND_CMD($address,'30PB');
	}
	# Presses Return button
	function PioneerCtrl_pushReturn($address) {
		PioneerCtrl_SEND_CMD($address,'31PB');
	}
	# Presses iPod Control button
	function PioneerCtrl_pushIpod($address) {
		PioneerCtrl_SEND_CMD($address,'40PB');
	}


	# Sets function up (like physical jog wheel)
	function PioneerCtrl_setFNUp($address) {
		PioneerCtrl_SEND_CMD($address,'FU');
	}
	# Sets function down (like physical jog wheel)
	function PioneerCtrl_setFNDn($address) {
		PioneerCtrl_SEND_CMD($address,'FD');
	}

	function DisplayResults($message) {
		echo '<div style="position:absolute; left:0px; right:0px; z-index:2;"class="jumbotron" id="status">';
		echo '<h1>' . $message . '</h1>';
		echo '</div>';
	}

        function PioneerCtrl_getHDZPower($address) {
                $out = PioneerCtrl_RCV_CMD($address,'?ZEP');
                if ( $out === false ) return false;
                if (trim($out) == 'ZEP0'){
                        $val = 'ZEO';
                        return $val;
                } else {
                        $val = 'ZEF';
                        return $val;
                }
        }
        function PioneerCtrl_setHDZPower($address,$fnPower) {
                PioneerCtrl_SEND_CMD($address,$fnPower);
        }
        function PioneerCtrl_getHDZSource($address) {
                $inNames["ZEA02"] = "Tuner";
                $inNames["ZEA04"] = "Bluray";
                $inNames["ZEA06"] = "MediaCenterPC";
                $inNames["ZEA10"] = "Comp";
                $inNames["ZEA15"] = "AppleTV";
                $inNames["ZEA17"] = "iPodUSB";
                $inNames["ZEA22"] = "Xbox One";
                $inNames["ZEA23"] = "HDMI5MHL";
                $inNames["ZEA25"] = "BD";
                $inNames["ZEA38"] = "NetRadio";
                $inNames["ZEA41"] = "Pandora";
                $inNames["ZEA44"] = "MediaServer";
                $inNames["ZEA45"] = "Favorites";
                $inNames["ZEA46"] = "AirPlay";
                $out = PioneerCtrl_RCV_CMD($address,'?ZEA');
                if (! $out) return false;
                $val = trim($out);
                return $inNames[$val];
	}

        # Sets HDZ function up (like physical jog wheel)
        function PioneerCtrl_setHDZFNUp($address) {
                PioneerCtrl_SEND_CMD($address,'ZEC');
        }
        # Sets HDZ function down (like physical jog wheel)
        function PioneerCtrl_setHDZFNDn($address) {
                PioneerCtrl_SEND_CMD($address,'ZEB');
        }


?>
