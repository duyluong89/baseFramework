<?php
class Country extends MY_Model{
	function __construct(){
		parent::__construct();
		$this->tableName = "country";
	}

	function get_active(){
		return $this->get_where_custom('active',1);
	}
}

?>