<?php
include 'pioneer.lib.php';
$ip = "192.168.2.4";
# pvRebel_setVolDec($ip);
#Get current mode
echo (pvRebel_getSource($ip));
?>