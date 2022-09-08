<?php
$first = $_POST["first"];
$second = $_POST["second"];
if (!is_numeric($first)) {
	echo "Unknown number $first";
}
elseif (!is_numeric($second)) {
	echo "Unknown number $second";
}
else {
	$symb = match($_POST['symb']) {
		"+" => $result = "$first + $second = " . $first + $second,
		"-" => $result = "$first - $second = " . $first - $second,
		"*" => $result = "$first * $second = " . $first * $second,
		"/" => $result = "$first / $second = " . $first / $second,		
		default => $result = "unknown",
	};
	echo $result;
}
?>