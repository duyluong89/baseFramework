<?php
class Block extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("Blocks");
	}

	static function getBlock($code=""){
		if($code != ""){
			$data["static"] = $this->Blocks->getSingleBlock_Active($code);
		}else{
			return $data["static"] ="dd";
		}
		return $this->load->view("block",$data);
	}
}
?>