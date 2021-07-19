<?php

/**
 * Database Configuration
 *
 * @param string
 * @return array
 */
$GLOBALS['DB_CONFIG'] = [
	'mysql'		=> [
		'driver'		=> 'mysql',
		'url'			=> '',
		'host'		=> 'localhost',
		'port'		=> '3306',
		'database'	=> '',
		'username'	=> 'root',
		'password'	=> '',
		'charset'	=> 'utf8mb4',
		'collation'	=> 'utf8mb4_unicode_ci',
		'prefix'		=> ''
	],
	'sqlite'	=> [
		'driver'		=> '',
		'url'			=> '',
		'database'	=> '',
		'prefix'		=> '',
		'fk_const'	=> ''
	],
	'pgsql'		=> [
		'driver'		=> '',
		'url'			=> '',
		'host'		=> '',
		'port'		=> '',
		'database'	=> '',
		'username'	=> '',
		'password'	=> '',
		'charset'	=> '',
		'collation'	=> '',
		'prefix'		=> ''
	],
];

define('DB', $GLOBALS['DB_CONFIG']['mysql']);
