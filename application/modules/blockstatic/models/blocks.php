<?php
class Blocks extends MY_Model{
	function __construct(){
		parent::__construct();
		$this->tableName = "block_static";
	}

	function get_active(){
		return $this->get_where_custom_order('active',1,"id");
	}

	function getSingleBlock_Active($code){
		$where = array(
			"code"=>$code,
			"active"=>1
			);
		$data = $this->getCustom($where);
		if(is_array($data) and count($data)>0)
			return $data[0];
		else
			return "";
	}
}

?>