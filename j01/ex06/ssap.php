#!/usr/bin/php
<?php


unset($argv[0]);
$array = array();

foreach($argv as $param)
{
	$param = trim($param);
	$param = eregi_replace("[ ]+", " ", $param);
	$tab = explode(' ', $param);
	foreach ($tab as $string)
	{
		$array[] = $string;
	}
	sort($array);
}

foreach ($array as $line)
{
	echo $line . "\n";
}


?>
