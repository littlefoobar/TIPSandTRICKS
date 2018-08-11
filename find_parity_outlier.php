<?php
function odd($var)
{
    return($var & 1);
}

function even($var)
{
   
    return(!($var & 1));
}
function find($integers) {

	$array_count_odd = array_count_values(array_filter($integers, "odd"));
	$array_count_even = array_count_values(array_filter($integers, "even"));

	if(count($array_count_even) == 1)
		return  key($array_count_even);
	else if(count($array_count_odd) == 1)
		return  key($array_count_odd);
	 
}
echo find([100, 101, 102]);
?>