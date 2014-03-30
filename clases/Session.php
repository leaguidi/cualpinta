<?php
class Session
{
	public static function put($name, $value)
	{
		return $_SESSION[$name] = $value;
	}	

	public static function exists($name)
	{
		return (isset($_SESSION[$name])) ? true : false;
	}

	public static function delete($name)
	{
		if(self::exists($name))
		{
			unset($_SESSION[$name]);
		}
	}

	public static function get($name)
	{
		return $_SESSION[$name];
	}

	/**
	 * @param string $name 
	 * @param string $message (valor)
	 * @return string (vacion)
	 * Elimina una session si existe y la crea nuevamente
	 */
	public static function flash($name, $message)
	{
		if(Session::exists($name))
		{
			$session = Session::get($name);
			Session::delete($name);
			Session::put($name, $message);
		}
		else
		{
			Session::put($name, $message);
		}

		return '';
	}
}
?>