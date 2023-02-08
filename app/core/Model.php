<?php
namespace app\core;

class Model {
	public $connection;

	public function __construct() {
		$host = 'localhost';
		$dbname = 'webapplication';
		$user = 'root';
		$pass = '';
		try {
		 # MySQL with PDO_MYSQL
		 $this->connection = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
}