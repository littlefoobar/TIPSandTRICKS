<?php
function find_missing_letter(array $array): string {

	return implode(array_diff(range(current($array),end($array)),$array));
	
}
echo find_missing_letter(["O", "Q", "R", "S"]);

?>