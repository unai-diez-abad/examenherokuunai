<?php
class Database {
	public static $db;
	public static $con;
	mysql://b727a069b4f4e0:dd01c150@us-cdbr-east-05.cleardb.net/heroku_3686daf2efe4b77?reconnect=true
	function Database(){
		$this->user="b727a069b4f4e0";$this->pass="dd01c150";$this->host="us-cdbr-east-05.cleardb.net";$this->ddbb="heroku_3686daf2efe4b77";
		//Copiar también la información de la conexión en la función de abajo connect()
	}

	function connect(){
		//Copiar aquí también la info de la conexión
		$this->user="b727a069b4f4e0";$this->pass="dd01c150";$this->host="us-cdbr-east-05.cleardb.net";$this->ddbb="heroku_3686daf2efe4b77";
		$con = new mysqli($this->host="us-cdbr-east-05.cleardb.net",$this->user="b727a069b4f4e0",$this->pass="dd01c150",$this->ddbb="heroku_3686daf2efe4b77");
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
