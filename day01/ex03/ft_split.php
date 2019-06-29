#!/usr/bin/php
<?PHP

function ft_split($str)
{ 
	$word = explode(" ", $str);
	$result = array_values(array_filter($word));
	sort($result);
	return($result);
}
?>
