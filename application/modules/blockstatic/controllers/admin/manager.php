<?php
class Manager extends MX_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("Blocks");
	}

	function index(){
		 $data['Blocks'] = $this->Blocks->get("code");
		 $data['title'] = 'Block Static';
		 $data['module'] = 'blockstatic';
		 $data['view_file'] = 'admin/index';
		 echo Modules::run('template/admin_two_cols',$data);
	}

	function get_input_post(){
		if($_POST){
			$data = array(
				'id' => ($this->input->post("id"))? $this->input->post("id"):0,
				'code' => $this->input->post("code"),
				'title'=> $this->input->post("title"),
				'content'=> $this->input->post("content"),
				'showtitle'=>($this->input->post("showtitle"))?1:0,
				'active' => ($this->input->post("active"))?1:0
				);
			return $data;
		}
	}

	function add(){
		$data['title']="Add new block static";
		$data['block'] = $this->get_input_post();
		$data['module'] = 'blockstatic';
		$data['view_file'] = 'admin/option';
		echo Modules::run('template/admin_two_cols',$data);
	}

	function edit($id){
		$data['title']="Edit block static";
		$data['block'] = $this->Blocks->get_where($id);
		$data['module'] = 'blockstatic';
		$data['view_file'] = 'admin/option';
		echo Modules::run('template/admin_two_cols',$data);
	}
	function save(){
		$data = $this->get_input_post();
		$status = $this->input->post("status");
		if($status == 0){
			if($this->Blocks->_insert($data))
				redirect('admin/block/');
		}else{
			if($this->Blocks->_update($status,$data))
				redirect('admin/block/');
		}
	}

	function del($id){
		if($this->Blocks->_delete($id)){
			redirect('admin/block/');
		}
	}
}

?>