<?php

if (!function_exists('status')) {
	function status($s) {
		if ($s == '1') return 'Active'; 
		elseif ($s == '0') return 'Closed';
		else return $s;
	}
}