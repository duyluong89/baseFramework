<?php
 function getBlock($code=""){
 	$ci =& get_instance();
 	$ci->load->model("blockstatic/Blocks");
		if($code != ""){
			$data["static"] = $ci->Blocks->getSingleBlock_Active($code);
		}else{
			 $data["static"] ="";
		}
	return $ci->load->view("blockstatic/block",$data,true);
 }



?>