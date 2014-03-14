<?php

    class Conexion
    {
        //constantes para la conexion
        const SERVER    = 'localhost';
        const USUARIO   = 'root';
        const CLAVE     = '';
        const BASE      = 'agencia';
        
        //declaramos estática para que se acceda esta propiedad directamente desde el objeto
        static $link;
        
        // definimos el método constructor simplemente para que no se pueda instanciar
        private function __construct(){}
        
     /**
     * @static
     * @return PDO
     * declaramos estática para que se acceda este método directamente desde el objeto
     */
        static function conectar(){
            try {
                self::$link = new PDO("mysql:host=".self::SERVER.";dbname=".self::BASE.";charset=utf8", self::USUARIO, self::CLAVE);
                /*** nos conectamos ***/
                //echo 'conectado a mysql <br />'; 
                return self::$link;
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }           
        }
    }

//$con = Conexion::conectar();
