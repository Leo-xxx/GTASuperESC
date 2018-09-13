<?php
//第一次写PHP
$filename = "updatecheck.txt";
$nowver = $_POST["ver"];
$file = base64_decode(getSubstr(file_get_contents($filename),"<base64>","</base64>"));
$newver = getSubstr($file,"<ver>","</ver>");
$txtecho = $txtecho.=getSubstr($file,"<head>","</head>");
header("content-type: text/XML"); //防止</>被cloudflare防XSS吞掉
for ($yicishu=$nowver+1; $yicishu<=$newver; $yicishu++) {
	if (strstr($file,"<$yicishu>") != false) {
		$txtecho = $txtecho.="\r\n<$yicishu>".getSubstr($file,"<$yicishu>","</$yicishu>")."</$yicishu>";
	}
} 
echo("<base64>".base64_encode($txtecho)."</base64>");

function getSubstr($str, $leftStr, $rightStr)
{
	$left = strpos($str, $leftStr);
	$right = strpos($str, $rightStr,$left);
	if($left < 0 or $right < $left) return '';
	return substr($str, $left + strlen($leftStr), $right-$left-strlen($leftStr));
}
?>