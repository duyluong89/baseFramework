<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends MX_Controller{
	function index(){
		$data['module'] = 'default';
		$data['view_file'] = 'home';
		echo Modules::run('template/two_cols_left',$data);
	}

	function payment_late(){
		echo 'ddd';die();
	}
}

?>