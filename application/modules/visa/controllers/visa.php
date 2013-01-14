<?php 
class Visa extends MX_Controller{
	function __construct(){
		parent::__construct();
		 $this->load->library('paypal_lib','onepay');
         $this->load->model("country/Country");
	}

	function index(){
            $data['Countries'] = $this->Country->get_active();
			$data['module'] = 'visa';
			$data['view_file'] = 'apply_visa';
			$data['payment_form'] =  $this->form();
			echo Modules::run('template/two_cols_left',$data);
	}

	/*
	* proccess after apply visa. 
	* 1. include data to Database.
	* 2. Send Mail to customer and administrator.
	* 3. If customer apply and payment then proccess payment method.
	*/
	function apply(){
		try{

		}
		catch(Exception $ex){
			throw new Exception("Error Processing Request", 1);
		}
	}

	/*
	* get all intput post after apply visa
	*/
	function get_visa_post(){
		$fullname = $this->input->post('fullname');
		$gender = $this->input->post('gender');
		$dateofbirth = $this->input->post('dateofbirth');
		$national = $this->input->post('national');
		$passport = $this->input->post('passport');
		$typevisa = $this->input->post('typevisa');
		$arrival = $this->input->post('arrival');
		$dateofarrival = $this->input->post('dateofarrival');
		$rushservices = $this->input->post('rushservices');


		return $data;
	}

 function form()
        {
                
            $this->load->library('paypal_lib');
            $this->paypal_lib->add_field('business', 'vuongkiemminh@gmail.com');
            $this->paypal_lib->add_field('return', site_url('visa/success'));
            $this->paypal_lib->add_field('cancel_return', site_url('visa/cancel'));
            $this->paypal_lib->add_field('notify_url', site_url('visa/paypal/ipn')); // <-- IPN url
            $this->paypal_lib->add_field('custom', '1234567890'); // <-- Verify return

            $this->paypal_lib->add_field('item_name', 'Paypal Test Transaction');
            $this->paypal_lib->add_field('item_number', '6941');
            $this->paypal_lib->add_field('amount', '0.01');

                // if you want an image button use this:
            //$this->paypal_lib->image('btn_paynowCC_LG.gif');
                
                // otherwise, don't write anything or (if you want to 
                // change the default button text), write this:
            $this->paypal_lib->button('Payment with Paypal!');
            return $this->paypal_lib->paypal_form();
            //$this->load->view('home', $data);
        
        }

        function auto_form()
        {
            $this->paypal_lib->add_field('business', 'PAYPAL@EMAIL.COM');
            $this->paypal_lib->add_field('return', site_url('visa/success'));
            $this->paypal_lib->add_field('cancel_return', site_url('visa/cancel'));
            $this->paypal_lib->add_field('notify_url', site_url('visa/paypal/ipn')); // <-- IPN url
            $this->paypal_lib->add_field('custom', '1234567890'); // <-- Verify return

            $this->paypal_lib->add_field('item_name', 'Paypal Test Transaction');
            $this->paypal_lib->add_field('item_number', '6941');
            $this->paypal_lib->add_field('amount', '197');

            $this->paypal_lib->paypal_auto_form();
        }
        function cancel()
        {
                $this->load->view('cancel');
        }
        
        function success()
        {
                // This is where you would probably want to thank the user for their order
                // or what have you.  The order information at this point is in POST 
                // variables.  However, you don't want to "process" the order until you
                // get validation from the IPN.  That's where you would have the code to
                // email an admin, update the database with payment status, activate a
                // membership, etc.
        
                // You could also simply re-direct them to another page, or your own 
                // order status page which presents the user with the status of their
                // order based on a database (which can be modified with the IPN code 
                // below).

            // Update status Pay done when payment successfully and send mail 
                //var_dump($_POST); die();
                $data['pp_info'] = $_POST;  
                $this->load->view('success', $data);
        }
        
        function ipn()
        {
                // Payment has been received and IPN is verified.  This is where you
                // update your database to activate or process the order, or setup
                // the database with the user's order details, email an administrator,
                // etc. You can access a slew of information via the ipn_data() array.
 
                // Check the paypal documentation for specifics on what information
                // is available in the IPN POST variables.  Basically, all the POST vars
                // which paypal sends, which we send back for validation, are now stored
                // in the ipn_data() array.
 
                // For this example, we'll just email ourselves ALL the data.
                $to    = 'vuongkiemminh@gmail.com';    //  your email

                if ($this->paypal_lib->validate_ipn()) 
                {
                        $body  = 'An instant payment notification was successfully received from ';
                        $body .= $this->paypal_lib->ipn_data['payer_email'] . ' on '.date('m/d/Y') . ' at ' . date('g:i A') . "\n\n";
                        $body .= " Details:\n";

                        foreach ($this->paypal_lib->ipn_data as $key=>$value)
                                $body .= "\n$key: $value";
        
                        // load email lib and email results
                        $this->load->library('email');
                        $this->email->to($to);
                        $this->email->from($this->paypal_lib->ipn_data['payer_email'], $this->paypal_lib->ipn_data['payer_name']);
                        $this->email->subject('CI paypal_lib IPN (Received Payment)');
                        $this->email->message($body);   
                        $this->email->send();
                }
        }

        function send_paypal(){
            if(isset($_POST)){

            }
            echo json_encode("successfully");
         }

}
?>