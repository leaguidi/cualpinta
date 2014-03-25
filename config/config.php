<?php 

function autoCargador($nombreClase){
	require_once ('../clases/'.$nombreClase.'.php');
}

spl_autoload_register('autoCargador');
 ?>