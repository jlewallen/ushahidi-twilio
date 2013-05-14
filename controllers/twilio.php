<?php defined('SYSPATH') or die('No direct script access.');

class Twilio_Controller extends Controller {
	
	private $request = array();
	
	public function __construct()
	{
		$this->request = ($_SERVER['REQUEST_METHOD'] == 'POST') ? $_POST : $_GET;
	}
		
	function index()
	{
		if (isset($this->request['From']))
		{
			$from = preg_replace("#[^0-9]#", "", $this->request['From']);
		}
		if (isset($this->request['To']))
		{
			$to = preg_replace("#[^0-9]#", "", $this->request['To']);
		}
		if (isset($this->request['Body']))
		{
			$body = trim($this->request['Body']);
		}

		if (isset($from) && isset($body) && isset($to) && !empty($body) && !empty($from)) {
			$status = sms::add($from, $body, $to);
			if ($status === TRUE) {
				echo "<Response><Sms>Thank you!</Sms></Response>\n";
				return;
			}
		}
		echo "<Response><Sms>Thanks!</Sms></Response>\n";

	}
}
