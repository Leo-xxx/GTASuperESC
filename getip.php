<?php 
	echo(get_onlineip());
	function get_onlineip() 
		{
		    $onlineip = '';
		    if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
		        $onlineip = getenv('HTTP_CLIENT_IP');
		    } elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
		        $onlineip = getenv('HTTP_X_FORWARDED_FOR');
		    } elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
		        $onlineip = getenv('REMOTE_ADDR');
		    } elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
		        $onlineip = $_SERVER['REMOTE_ADDR'];
		    }
		    
			return $onlineip;
		}
?>