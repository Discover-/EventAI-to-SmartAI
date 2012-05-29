<?php
if (!defined('CURRENT_PATH'))
	return;
$host = 'localhost';
$dbName = 'world';
$username = 'root';
$password = '';
$withDate = false; // Append date to filename ?

$pdoOptions = array();
$pdoOptions[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;