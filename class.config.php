<?php
class config{
	var $host, $mysql_user, $mysql_passwd, $mysql_dbName;
	public $baseServer;
	
	public function __construct() {
		$this->host = "139.59.38.158";
		$this->mysql_user = "shubham";
		$this->mysql_passwd = "Shubham@123";
		$this->mysql_dbName = "culrav";
		$this->baseServer = "/culrav/";
		date_default_timezone_set('Asia/Kolkata');
	}
}
?>