<?php
class Connection {
    //Agrega o remueve algunas bases de datos
	public $db1 = array(
		"host" => "localhost",    //localhost
		"user" => "root",       //nombre de usuario normalmente root
		"pw" => "",         //password sino tiene solo se dejan comillas
		"db_name" => "vacas"      //nombre de a base de datos user tiene establecido como nombre en la otra base de datos
	);
	/*public $db2 = array(
		"host" => "HOSTNAME",       //localhost         
		"user" => "USERNAME",       //nombre de usuario normalmente root
		"pw" => "PASSWORD",          //password sino tiene solo se dejan comillas
		"db_name" => "DATABASE_NAME"    //nombre de a base de datos user tiene establecido como nombre en la otra base de datos
	);*/
	
    //No cambiar nada de aquí
	public function __construct($cdb){
		$this->cdb = $cdb;
	}
	public function query($query) {
		$k = $this->cdb;
		$i = $this->$k;
		
		$j = mysql_connect($i['host'], $i['user'], $i['pw']) or die(mysql_error());
		$connect = mysql_select_db($i['db_name'], $j) or die(mysql_error());
		$result = mysql_query($query, $j) or die(mysql_error());

		$this->result = $result;
		return $result;
	}
	
	public function fetch(){
		$rows = mysql_num_rows($this->result);
		$data = array();
		for($i=0;$i<$rows;$i++){
			$data[$i] = mysql_fetch_assoc($this->result);
		}
		return $data;
	}
}
?>