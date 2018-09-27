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

/*print_r ($array);*/


$count = 0;

foreach ($array as $count => $line)
{
	if (preg_match("/^[a-zA-Z]$/", $line[0]))
	{
		$alpha[] = $line;
		unset($array[$count]);
	}
	if (preg_match("/^[1-9]$/", $line[0]))
	{
		$numeric[] = $line;
		unset($array[$count]);
	}
	$count++;
}



natcasesort($alpha);
natcasesort($numeric);
natcasesort($array);

foreach($alpha as $element) { echo $element . "\n"; }
foreach($numeric as $element) { echo $element . "\n"; }
foreach($array as $element) { echo $element . "\n"; }

/*print_r($alpha);
print_r($numeric);
print_r($array);*/
?>
