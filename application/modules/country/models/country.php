<?php
class Country extends MY_Model{
	function __construct(){
		parent::__construct();
		$this->tableName = "country";
	}

	
}

?>