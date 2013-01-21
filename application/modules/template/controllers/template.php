<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Template extends MX_Controller{
	function one_cols($data){
		$this->load->view('one_cols',$data);
	}
	function two_cols_left($data){
		$data['payment'] = getBlock("payment");
		$this->load->view('2columns-left',$data);
	}
	function three_cols($data){
		$this->load->view('three_cols',$data);
	}
	function admin_one_cols($data){
		$this->load->view('admin_one_cols',$data);
	}
	function admin_two_cols($data){
		$this->load->view('admin_two_cols',$data);
	}
}
?>