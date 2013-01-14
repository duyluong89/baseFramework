<?php
class Manager extends MX_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("Country");
	}

	function index(){
		 $data['Countries'] = $this->Country->get("name");
		 $data['title'] = 'Country managerment';
		 $data['module'] = 'country';
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
		$data['Country'] = $this->get_input_post();
		$data['module'] = 'country';
		$data['view_file'] = 'admin/option';
		echo Modules::run('template/admin_two_cols',$data);
	}

	function edit($id){
		$data['Country'] = $this->Country->get_where($id);
		$data['module'] = 'country';
		$data['view_file'] = 'admin/option';
		echo Modules::run('template/admin_two_cols',$data);
	}
	function save(){
		$data = $this->get_input_post();
		$status = $this->input->post("status");
		if($status == 0){
			if($this->Country->_insert($data))
				redirect('admin/country/');
		}else{
			if($this->Country->_update($status,$data))
				redirect('admin/country/');
		}
	}

	function del($id){
		if($this->Country->_delete($id)){
			redirect('admin/country/');
		}
	}
}

?>