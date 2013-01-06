<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Template extends MX_Controller{
	function one_cols($data){
		$this->view->load('one_cols',$data);
	}
	function two_cols($data){
		$this->view->load('two_cols',$data);
	}
	function three_cols($data){
		$this->view->load('three_cols',$data);
	}
	function admin_one_cols($data){
		$this->view->load('admin_one_cols',$data);
	}
	function admin_two_cols($data){
		$this->view->load('admin_two_cols',$data);
	}
}
?>