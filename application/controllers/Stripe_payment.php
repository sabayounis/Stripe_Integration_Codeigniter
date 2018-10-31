<?php
	use stripe\Stripe;
	use stripe\Charge;
	use stripe\customer;
	class Stripe_payment extends CI_Controller{
		
		public function index(){
			
			$this->load->view('payment_view');
			
		}
		public function checkout(){
			$token = $_POST['stripeToken'];
			
			if(isset ($_POST['stripeToken'])){
			
			try {
				// set library path
				require_once APPPATH."third_party/stripe/init.php";
				// Set your API key
				Stripe::setApiKey("sk_test_PmyPdBDaoonWQIFmtHXB1Fg7");
				
				$charge = Charge::create(
			array(
				'amount' => 2000,
				'currency' => 'usd',
				'description' => 'Example charge',
				'source' => $token,
				));
				
				echo 'Payment sent ';
				
				} catch (Stripe_CardError $e) {
				$error= $e->getMessage();
				echo error;
				
			}
		}
		}
		
	}
?>