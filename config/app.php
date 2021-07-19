<?php

/**
 * Autoload Configuration Files
 *
 * @param string
 * @return array
 */
$config = [
	'database.php',
	'config.php',
	'functions.php',
	'response.php',
];


if (is_array($config)) {
	foreach ($config as $file) {
		if (file_exists('./../../config/' . $file)) {
			include './../../config/' . $file;
		} elseif (file_exists('./../config/' . $file)) {
			include './../config/' . $file;
		} else {
			include './config/' . $file;
		}
	}
}
