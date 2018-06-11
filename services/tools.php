<?php

function pre($thing) {
	echo "<pre>";
	print_r($thing);
	echo "</pre>";
} 


function writeLog($thing) {

	if (is_array($thing)) {
		$thing = print_r($thing, true);
	}


	file_put_contents('../logs/log', PHP_EOL . date('Y-m-d H:i:s') . " " . $thing, FILE_APPEND);
}

function cleanText($text) {
	return htmlentities($text);
}