#!/usr/bin/php
<?php

$ret = trim($argv[1]);
$ret = eregi_replace("[ ]+", " ", $ret);
echo $ret . "\n";





?>
