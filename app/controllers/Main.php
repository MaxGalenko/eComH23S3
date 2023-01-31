<?php
namespace app\controllers;

class Main extends \app\core\Controller {
	function index() {
		$this->view('Main/index');
	}

	function index2() {
		$this->view('Main/index2');
	}

	// sets a default value making it an optional parameter
	function greetings($name = "Carl") {
		$this->view('Main/greetings', $name);
	}
}