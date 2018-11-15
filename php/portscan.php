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
		$time_s = microtime(true);
		$fp = fsockopen($rip, $port, $errno, $errstr, 1.5);
		$time_a = microtime(true) - $time_s;
		if($fp)
		{
			$time_b = 50; //防止因连接太快，程序还没记录上传入连接就返回了
			if((200 - $time_a) > $time_b)
			{
				$time_b = 200 - $time_a;
			}
			fclose($fp); //顺便防止在创建房间后才识别到断开连接，显示离开房间
			usleep($time_b * 1000);
			echo("Open");
		}else
		{
			echo("Close");
			fclose($fp);
		}
	}else
	{
		echo("You can only scan ".$rip);
	}
}else
{
	echo("Prohibit proxy access");
}
?>