<?php
$pip = $_GET['ip'];
$rip = $_SERVER["REMOTE_ADDR"];
$fip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$port = $_GET['port'];
if(!$rip)
{
	$rip = $_SERVER["HTTP_CLIENT_IP"];
}
//echo($pip.",".$rip.",".$fip.",".$port);
if(!$fip)
{
	if($pip == $rip)
	{
		$fp = fsockopen($rip, $port, $errno, $errstr, 1.5);
		if($fp)
		{
			echo("Open");
		}else
		{
			echo("Close");
		}
		fclose($fp);
	}else
	{
		echo("You can only scan ".$rip);
	}
}else
{
	echo("Prohibit proxy access");
}
?>