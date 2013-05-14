<?php defined('SYSPATH') or die('No direct script access.');

class Twilio_Sms_Provider implements Sms_Provider_Core {
	
	public function send($to = NULL, $from = NULL, $message = NULL)
	{
		return "Twilio not configured!";
	}
	
}
