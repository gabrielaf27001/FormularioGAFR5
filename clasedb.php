<?php
class clasedb{
	private $db;
	public function conectar (){

		$this ->db=new mysqli('localhost', 'root','', 'programacion') or die ('no se puede conectar con Mysql');
		return $this->db;
	} 
}
?>