<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Twilio Hook
 */

class twilio {
	
	/**
	 * Registers the main event add method
	 */
	public function __construct()
	{	
		// Hook into routing
		Event::add('system.pre_controller', array($this, 'add'));
	}
	
	/**
	 * Adds all the events to the main Ushahidi application
	 */
	public function add()
	{
		// SMS Provider
		plugin::add_sms_provider("twilio");
	}
}

new twilio;
