<?php 
header("content-type: text/XML");
echo(file_get_contents("serverlist.txt"));
?>