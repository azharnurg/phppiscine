#!/usr/bin/php
<?php 
if($argc > 1)
{
 	$i = 0;
	while ($i++ < count($argv))
		$str = trim(preg_replace("/\s+/", " ", $argv[1]));
	echo ($str. "\n");
}
?>
