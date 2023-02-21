<?php
namespace app\controllers;

class Client extends \app\core\Controller{
	public function index(){
		$client = new \app\models\Client();
		$clients = $client->getAll();
		$this->view('Client/index', $clients);
	}

	public function create(){
		if(isset($_POST['action'])){
			//make a new client
			$client = new \app\models\Client();
			//populate the client
			$client->first_name = $_POST['first_name'];
			$client->last_name = $_POST['last_name'];
			$client->middle_name = $_POST['middle_name'];
			//invoke the insert method
			$client->insert();
			//back to the list of clients
			header('location:/Client/index');
		}else{
			$this->view('Client/create');
		}
	}

	public function delete($client_id){
		$client = new \app\models\Client();
		$client->delete($client_id);
		header('location:/Client/index');
	}


}