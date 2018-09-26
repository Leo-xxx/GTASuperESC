<?php 
header("content-type: text/XML");
$b64 = $_GET["b64"];
if($b64=="1"){
	echo(file_get_contents("serverlistb64.txt"));
} else {
	echo(file_get_contents("serverlist.txt"));
}
?>