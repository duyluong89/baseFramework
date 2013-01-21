<?php
class Manager extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("typeofvisa");
	}

	function index(){
		 $data['typeofvisa'] = $this->typeofvisa->get("name");
		 $data['title'] = 'typeofvisa managerment';
		 $data['module'] = 'typeofvisa';
		 $data['view_file'] = 'admin/index';
		 echo Modules::run('template/admin_two_cols',$data);
	}

	function get_input_post(){
		if($_POST){
			$data = array(
				'id' => ($this->input->post("id"))? $this->input->post("id"):0,
				'name' => $this->input->post("name"),
				'active' => ($this->input->post("active"))?1:0
				);
			return $data;
		}
	}

	function add(){
		$data['typeofvisa'] = $this->get_input_post();
		$data['module'] = 'typeofvisa';
		$data['view_file'] = 'admin/option';
		echo Modules::run('template/admin_two_cols',$data);
	}

	function edit($id){
		$data['typeofvisa'] = $this->typeofvisa->get_where($id);
		$data['module'] = 'typeofvisa';
		$data['view_file'] = 'admin/option';
		echo Modules::run('template/admin_two_cols',$data);
	}
	function save(){
		$data = $this->get_input_post();
		$status = $this->input->post("status");
		if($status == 0){
			if($this->typeofvisa->_insert($data))
				redirect('admin/typeofvisa/');
		}else{
			if($this->typeofvisa->_update($status,$data))
				redirect('admin/typeofvisa/');
		}
	}

	function del($id){
		if($this->typeofvisa->_delete($id)){
			redirect('admin/typeofvisa/');
		}
	}
}

?>