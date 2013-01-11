<?php
class Manager extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Visa');
	}

	function index(){
		$data['paydone'] = $this->Visa->get("date_create");
		$data['waitvisa'] = $this->Visa->get("date_create");
		$data['title'] = 'Country managerment';
		$data['module'] = 'visa';
		$data['view_file'] = 'admin/index';
		echo Modules::run('template/admin_two_cols',$data);
	}

	function getStatus($status){
		switch ($status) {
			case 'value':
				# code...
				break;
			
			default:
				# code...
				break;
		}
	}
}

?>