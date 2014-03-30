<?php 

ini_set('display_errors', 1);
	session_start();

	$GLOBALS['config'] = array(
		'mysql' => array(
			'host' => '127.0.0.1',
			'username' => 'root',
			'password' => 'Qwer1234F!',
			'db' => 'oop'
		),
		'remember' => array(
			'cookie_name' => 'hash',
			'cookie_expiry' => 604800
		),
		'session' => array(
			'session_name' => 'user',
			'token_name' => 'token'
		)
	);

function autoCargador($nombreClase)
{
	require_once ('../clases/'.$nombreClase.'.php');
}

require_once('../functions/sanitize.php');

spl_autoload_register('autoCargador');
 ?>