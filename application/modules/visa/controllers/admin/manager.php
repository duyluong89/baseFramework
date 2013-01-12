<?php
class Manager extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Visa');
	}

	function index(){
		$data['paydone'] = $this->Visa->getvisa_paydone();
		$data['waitvisa'] = $this->Visa->getvisa_waitvisa();
		$data['title'] = 'Country managerment';
		$data['module'] = 'visa';
		$data['view_file'] = 'admin/index';
		echo Modules::run('template/admin_two_cols',$data);
	}

	function load_default(){
		$data['paydone'] = $this->Visa->getvisa_paydone();
		$data['waitvisa'] = $this->Visa->getvisa_waitvisa();
		$this->load->view('admin/manager',$data);
	}
	function getStatus($status){

		switch ($status) {
			case PAYDONE:
				$status = PAYDONE;
				break;
			case WAITVISA:
				$status = WAITVISA;
				break;
	
		}
		return $status;
	}

	function search(){
		if($this->input->post('ajax') == '1'){
			$key = $this->input->post('keysearch');
			$visas = $this->Visa->getsearchvisa($key);
			$data['search'] = $visas;
			$this->load->view('admin/search',$data);
			
		}else{
			
		}
	
	}

	function updatedispatch(){
		$code = $this->input->post("codekey");
		$dispatch = $this->input->post("dispatchkey");
		$data = array("dispatch"=>$dispatch);
		if($this->Visa->update_dispatch($code,$data)){
			$this->load_default();
		}
	}

	function updatestatus(){
		$code = $this->input->post("codekey");
		$status = $this->input->post("status");
		$data = array("status"=>$status);
		if($this->Visa->update_dispatch($code,$data)){
			$this->load_default();
		}
	}

	function edit($code){
		$data['visa'] = $this->Visa->get_where_code($code);
		$data['title'] = 'Country managerment';
		$data['module'] = 'visa';
		$data['view_file'] = 'admin/edit';
		echo Modules::run('template/admin_two_cols',$data);
	}

	function update_visa(){
		$code = $this->input->post("code");
		$content = $this->input->post("content");
		$email = $this->input->post("email");
		$data = array("email"=>$email, "content"=>$content);
		if($this->Visa->update_dispatch($code,$data)){
			$this->index();
		}
	}

	function del_visa($code){
		if($this->Visa->delete_visa($code)){
			redirect("admin/visa");
			
		}
	}
}

?>