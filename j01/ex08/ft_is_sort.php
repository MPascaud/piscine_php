<?php

function ft_is_sort($maybe)
{

	$array = $maybe;
	sort($array);
	$sorted = array_diff_assoc($array, $maybe);

	if ($sorted == NULL)
		return (true);
	else
		return (false);

}


?>
