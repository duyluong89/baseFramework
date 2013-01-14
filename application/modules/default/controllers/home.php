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

	function sendmail(){
		$to    = 'vuongkiemminh@gmail.com';   
		$body  = 'An instant payment notification was successfully received from ';
        $this->load->library('email');
        $this->email->to($to);
        $this->email->from('jonhcarter26@gmail.com','Trinh Duy Luong');
        $this->email->subject('CI paypal_lib IPN (Received Payment)');
        $this->email->message($body);   
        $this->email->send();
        
	}

	
	function testpay(){

		$settings = array(
		    'username' => 'duyluongnd@gmail.com',
		    'password' => 'duyluong1989',
		    'signature' => 'duyluong1989',
		    'test_mode' => true
		);

		$params = array(
		    'amount' => 100.00,
		    'currency' => 'USD',
		    'return_url' => 'https://www.example.com/checkout/payment_return/123',
		    'cancel_url' => 'https://www.example.com/checkout'
	    );

		$this->load->library('merchant');
		$this->merchant->load('paypal_express');
		$this->merchant->initialize($settings);
		$response = $this->merchant->purchase_return($params);
		if ($response->success())
			{
			   echo 'success';
			}
			else
			{
			    $message = $response->message();
			    echo('Error processing payment: ' . $message);
			    exit;
			}
	}
}

?>