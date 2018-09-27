#!/usr/bin/php
<?php


$string = $argv[1];

$string = trim($string);
$string = eregi_replace("[ ]+", " ", $string);
$array = explode(' ', $string);

$first = $array[0];
unset ($array[0]);
foreach ($array as $word)
{
	echo $word . ' ';
}

echo $first . "\n";





?>
