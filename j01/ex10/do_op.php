#!/usr/bin/php
<?php


if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	return;
}

$count = 1;

while ($count <= $argc - 1)
{
	$array[$count - 1] = $argv[$count];
	$count++;
}



foreach ($array as $cnt => $blop)
{
	$array[$cnt] = trim($array[$cnt]);
	$array[$cnt] = eregi_replace("[ \t]+", "", $array[$cnt]);
}

//	$array[0] = trim($array[0]);

/*print_r($array);*/

if ($array[1] == "+")
{
	$ret = $array[0] + $array[2];
	echo $ret . "\n";
}


if ($array[1] == "-")
{
	$ret = $array[0] - $array[2];
	echo $ret . "\n";
}

if ($array[1] == "*")
{
	$ret = $array[0] * $array[2];
	echo $ret . "\n";
}

if ($array[1] == "/")
{
	$ret = $array[0] / $array[2];
	echo $ret . "\n";
}

if ($array[1] == "%")
{
	$ret = $array[0] % $array[2];
	echo $ret . "\n";
}

?>
