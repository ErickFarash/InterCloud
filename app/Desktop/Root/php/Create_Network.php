<?php
	$fn = "../../../config/Config.tcb";
	include ("../../../config/connect_server/connect_server.php");

	$R = $TCB->query("SELECT * FROM ".$X."network ORDER BY id DESC LIMIT 1;")->fetch_array();

	$SetNetwork = 'NETSH WLAN SET HOSTEDNETWORK MODE=ALLOW SSID="'.$R['name'].'" KEY="'.$R['pass'].'"';

	@system($SetNetwork);
	@system("NETSH WLAN START HOSTEDNETWORK");

?>