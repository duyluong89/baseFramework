<?php
class typeofvisa extends MY_Model{
	function __construct(){
		parent::__construct();
		$this->tableName = "typeofvisa";
	}

	function get_active(){
		return $this->get_where_custom_order('active',1,"name");
	}
}

?>