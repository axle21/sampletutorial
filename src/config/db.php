<?php


	class db{
		//property
		private $dbhost = "localhost";
		private $dbuser = "root";
		private $dbpass = "";
		private $dbname = "slimapp";


		//connect
		public function connect(){

			$mysql_conn_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
			$dbconn = new PDO($mysql_conn_str, $this->dbuser, $this->dbpass);
			$dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $dbconn;
		}

	}