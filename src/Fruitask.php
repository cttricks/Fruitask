<?php

namespace Fruitask;

class Fruitask {
	public $API_KEY = "";
	public $BASE_ID = "";
	
	public function getApiKey(){
		return $this->API_KEY;
	}
	
	public function setApiKey($data = ""){
		$this->API_KEY = $data;
	}

	public function setBaseId($data = ""){
		$this->BASE_ID = $data;
	}
	
	public function getBaseId(){
		return $this->BASE_ID;
	}
}

?>
