<?php
	 # pioneer.lib.php :: Pioneer VSX-822-K Telnet Functions
	 # Forked and modified from Quinn Ebert's "Pioneer Rebel" Software Project
	
	// Send a command, with optional prefixed or suffixed parameter, to the 822-K
	// Returns corresponding controller response on OK or false (boolean) on error
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
			$out = fgets($fp);
			fclose($fp);
			flush();
			// Cool-down time (my VSX preferred 200ms between reconnects...)
			usleep(200000);
			return $out;
		}
		return false;
	}
	// Send a command to the 822-K amp unit requesting the volume level decrement
	function PioneerCtrl_setVolDec($address) {
		PioneerCtrl_SEND_CMD($address,'VD');
	}
	// Send a command to the 822-K amp unit requesting the volume level increment
	function PioneerCtrl_setVolInc($address) {
		PioneerCtrl_SEND_CMD($address,'VU');
	}
	// Send a command to the 822-K amp unit requesting the input change to $input
	// (which, for now, is the two numerals preceding "FN" in the Telnet command)
	// 
	// See PioneerCtrl_getSource for the most-handy input number cross-reference
	function PioneerCtrl_setSource($address,$fnInput) {
		PioneerCtrl_SEND_CMD($address,$fnInput.'FN');
	}
	// Send a command to the 822-K amp unit requesting the power turn on or off
	// 
	// Pass $fnPower=true for power-on (requires network over sleep enabled)
	// Pass $fnPower=false for power-off
	function PioneerCtrl_setPower($address,$fnPower) {
			PioneerCtrl_SEND_CMD($address,$fnPower);
	}
	// Send a command to the 822-K amp unit requesting the muting turn on or off
	// 
	// Pass $fnMuted=true for muted-on
	// Pass $fnMuted=false for muted-off
	function PioneerCtrl_setMuting($address,$fnMuted) {
		$mutedTo = 'F';
		if ($fnMuted)
			$mutedTo = 'O';
		PioneerCtrl_SEND_CMD($address,'M'.$mutedTo);
	}
	// Request the current status of audio output muting on the 822-K amp unit
	// On success returns *1* for un-muted (IE: "VOL XYZ" shown on LCD) or *0* for
	// "MUTING" -- success values are int types.  On failure, returns BOOLEAN type
	// false (remember to use === or !== to differentiate 0 from false!!!)
	function PioneerCtrl_getMuting($address) {
		$out = PioneerCtrl_SEND_CMD($address,'?M');
		if ( $out === false ) return false;
		// It would be best to have a more-rigorous failure handling for this one:
		$out = trim($out);
		if (strtoupper($out)==='R') return false;
		if (strlen($out)!=4) return false;
		$out = substr($out,3);
		if ($out!=='0'&&$out!=='1') return false;
		return intval(trim($out));
	}
	function PioneerCtrl_getPower($address) {
		$out = PioneerCtrl_SEND_CMD($address,'?P');
		if ( $out === false ) return false;
		// It would be best to have a more-rigorous failure handling for this one:
		if (trim($out) == 'PWR0'){
			$val = 'PO';
			return $val;
		} else {
			$val = 'PF';
			return $val;
		}
	}
	// Request percent of maximum volume currently seen set on the 822-K (this is
	// gathered by equating the 81 distinct volume levels to the closest integers
	// on a 100% scale, basically, multiplying the numeric volume setting from 0
	// to 80 by 1.25 and rounding the result to the nearest integer)
	// Returns current volume percent as string on OK or false (boolean) on error
	function PioneerCtrl_getVolPct($address) {
		$out = intval(PioneerCtrl_getVolVal($address));
		if (! $out) return false;
		$pct = strval(intval(round((floatval($out)*1.25))));
		return $pct;
	}
	// Request the current numeric volume setting seen by the 822-K's controller
	// (a value ranging 0 to 80 is the expected value on my 822-K unit)
	// Returns the current volume as int on OK or false (boolean) on error
	function PioneerCtrl_getVolVal($address) {
		$out = PioneerCtrl_SEND_CMD($address,'?V');
		if (! $out) return false;
		$val = intval((((intval(substr($out,3)))-1)/2));
		return $val;
	}
	// Request the current LCD reading (from a list of known values) that might
	// be displayed on the 822-K.  The list of known values was hand-compiled
	// by running my unit through its full set of dialable inputs and noting
	// the "FNxy" value that Telnet interface echoed back for the input change
	// Returns the string value on OK or false (boolean) on error
	function PioneerCtrl_getSource($address) {
		$inNames["FN01"] = "CD";
		$inNames["FN02"] = "Tuner";
		$inNames["FN04"] = "DVD";
		$inNames["FN05"] = "TV";
		$inNames["FN06"] = "SatCbl";
		$inNames["FN10"] = "Video";
		$inNames["FN15"] = "DVRBDR";
		$inNames["FN17"] = "iPodUSB";
		$inNames["FN25"] = "BD";
		$inNames["FN33"] = "Adapter";
		$inNames["FN38"] = "NetRadio";
		$inNames["FN41"] = "Pandora";
		$inNames["FN44"] = "MediaServer";
		$inNames["FN45"] = "Favorites";
		$inNames["FN46"] = "AirPlay";
		$inNames["FN47"] = "DMR";
		$inNames["FN49"] = "Game";
		$out = PioneerCtrl_SEND_CMD($address,'?FN');
		if (! $out) return false;
		$val = trim($out);
		return $inNames[$val];
	}
	
	# switches preset station
	function PioneerCtrl_setPreset($address,$presetno) {
		PioneerCtrl_SEND_CMD($address,$presetno.'PR');
	}
	# Sets "Advanced Surround" like on the remote
	function PioneerCtrl_setAdvSurr($address) {
		PioneerCtrl_SEND_CMD($address,'0100SR');
	}
	# Sets "Auto/Direct" like on the remote
	function PioneerCtrl_setAutoDirect($address) {
		PioneerCtrl_SEND_CMD($address,'0005SR');
	}
	# Sets "ALC/Standard" like on the remote
	function PioneerCtrl_setAlcStd($address) {
		PioneerCtrl_SEND_CMD($address,'0010SR');
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
	# ReceiveGenerationInfo
	function PioneerCtrl_getGen($address) {
		PioneerCtrl_SEND_CMD($address,'?RGD');
	}
	# ReceiveEnableInputFunctionInfo
	function PioneerCtrl_getInputFunc($address) {
		PioneerCtrl_SEND_CMD($address,'?RGF');
	}
	# ReceiveNetworkStanbyInfo
	function PioneerCtrl_getStandbyInfo($address) {
		PioneerCtrl_SEND_CMD($address,'?RGC');
	}
	# ReceiveiPodInfo
	function PioneerCtrl_getiPodInfo($address) {
		PioneerCtrl_SEND_CMD($address,'?ICA');
	}
	# Receive OSD
	function PioneerCtrl_getOSD($address) {
		PioneerCtrl_SEND_CMD($address,'?GAP');
	}
	# ReceiveDisplayInformation
	function PioneerCtrl_getDisp($address) {
		PioneerCtrl_SEND_CMD($address,'?GEP');
	}
	# ReceiveListAndLineInformation
	function PioneerCtrl_getList($address) {
		PioneerCtrl_SEND_CMD($address,'?GDP');
	}
	# ReceiveScreenInformation
	function PioneerCtrl_getScreen($address) {
		PioneerCtrl_SEND_CMD($address,'?GCP');
	}

?>