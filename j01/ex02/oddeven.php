#!/usr/bin/php
<?php
$in = fopen('php://stdin', 'r');
	while($in)
	{
		echo "Entrez un nombre: ";
		$lessive = fgets($in);
		$lessive=str_replace("\n", "", "$lessive");
		if (is_numeric($lessive) == 1)
		{
			echo "Le chiffre " . $lessive . " est " . (($lessive % 2) == 0 ? "Pair" : "Impair") . PHP_EOL;
		}
		else
			echo "'" . $lessive . "'" . " n'est pas un chiffre" . PHP_EOL;

	}
	fclose($in);
?>
