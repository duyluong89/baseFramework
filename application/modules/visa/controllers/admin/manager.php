<?php
class Manager extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Visa');
	}

	function index(){
		$data['Visa'] = $this->Visa->get("date_create");
		$data['title'] = 'Country managerment';
		$data['module'] = 'visa';
		$data['view_file'] = 'admin/index';
		echo Modules::run('template/admin_two_cols',$data);
	}

	
}

?>