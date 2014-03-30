<?php 

ini_set('display_errors', 1);
session_start();

$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => '127.0.0.1',
		'username' => 'root',
		'password' => '',
		'db' => 'cualpinta'
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

function escape($string)
	{
		return htmlentities($string, ENT_QUOTES, 'utf-8');
	}

spl_autoload_register('autoCargador');
 ?>