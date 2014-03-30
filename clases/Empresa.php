<?php 

/**
 * Clase de usuarios empresa
 */
class Empresa {
	
	private $conn;
	private $empresaID;
	private $razonsocial;
	private $direccion;
	private $localidad;
	private $pais;
	private $cuit;
	private $email;
	private $tipo;
	private $fchbaja;
	private $razonfiscal;
	private $direccionfiscal;
	private $localidadfiscal;
	private $imagen;
	private $fchalta;
	private $latitud;
	private $longitud;
	
	public function getEmpresaID (){
		return $this->empresaID;
	}
	public function setEmpresaID ($id){
		$this->empresaID = $id;
	}
	
	public function getRazonSocial (){
		return $this->razonsocial;
	}
	public function setRazonSocial ($razonsocial){
		$this->razonsocial= $razonsocial;
	}
	
	public function getDireccion (){
		return $this->direccion;
	}
	public function setDireccion ($dir){
		$this->direccion = $dir;
	}
	
	public function getLocalidad (){
		return $this->localidad;
	}
	public function setLocalidad ($loc){
		$this->localidad = $loc;
	}
	
	public function getPais (){
		return $this->pais;
	}
	public function setPais ($pais){
		$this->pais = $pais;
	}
	
	public function getCuit (){
		return $this->Cuit;
	}
	public function setCuit ($cuit){
		$this->cuit = $cuit;
	}
	
	public function getEmail (){
		return $this->email;
	}
	public function setEmail ($email){
		$this->email = $email;
	}
	
	public function getTipo (){
		return $this->tipo;
	}
	public function setTipo ($tipo){
		$this->tipo = $tipo;
	}
	
	public function getFechaBaja (){
		return $this->fchbaja;
	}
	public function setFechaBaja ($fch){
		$this->fchbaja = $fch;
	}
	
	public function getNombreFiscal (){
		return $this->razonfiscal;
	}
	public function setNombreFiscal ($nom){
		$this->razonfiscal = $nom;
	}
	
	public function getDireccionsFiscal (){
		return $this->direccionfiscal;
	}
	public function setDireccionFiscal ($dir){
		$this->direccionfiscal = $dir;
	}
	
	public function getLocalidadFiscal (){
		return $this->localidadfiscal;
	}
	public function setLocalidadFiscal ($loc){
		$this->localidadfiscal = $loc;
	}
	
	public function getImagen (){
		return $this->imagen;
	}
	public function setImagen ($img){
		$this->imagen = $img;
	}
	
	public function getFechaAlta (){
		return $this->fchalta;
	}
	public function setFechaAlta ($fch){
		$this->fchalta = $fch;
	}
	
	public function getLatitud (){
		return $this->latitud;
	}
	public function setLatitud ($lat){
		$this->latitud = $lat;
	}
	
	public function getLongitud (){
		return $this->longitud;
	}
	public function setLongitud ($lon){
		$this->longitud = $lon;
	}
	
	function __construct() {
		$conn = DB::getInstance();
	}
	
	public function validarIngreso($usuario, $pass)
	{
		$sql = "SELECT empresaID FROM empresas WHERE usuario='".trim($usuario).
				"' AND password='".trim($pass)."' and fchbaja is null";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$empresa = $stmt->fetchAll();
		return $empresa;
	}
	
	
}


 ?>