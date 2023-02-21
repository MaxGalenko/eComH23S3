<?php
namespace app\models;

class Client extends \app\core\Model{
	public $client_id;
	public $first_name;
	public $last_name;
	public $middle_name;

	public function insert(){
		$SQL = "INSERT INTO client (first_name, last_name, middle_name) value (:first_name, :last_name, :middle_name)";
		$STH = $this->connection->prepare($SQL);
		$data = ['first_name'=>$this->first_name,
					'last_name'=>$this->last_name,
					'middle_name'=>$this->middle_name];
		$STH->execute($data);
		$this->client_id = $this->connection->lastInsertId();
	}


	public function delete($client_id){
		$SQL = "DELETE FROM client WHERE client_id=:client_id";
		$STH = $this->connection->prepare($SQL);
		$data = ['client_id'=>$client_id];
		$STH->execute($data);
	}


	public function getAll(){
		$SQL = "SELECT * FROM client";
		$STH = $this->connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Client');
		return $STH->fetchAll();
	}

}