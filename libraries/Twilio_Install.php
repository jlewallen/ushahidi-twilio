<?php defined('SYSPATH') or die('No direct script access.');
class Twilio_Install {
	
	/**
	 * Constructor to load the shared database library
	 */
	public function __construct()
	{
		$this->db =  new Database();
	}

	/**
	 * Creates the required columns for the Twilio Plugin
	 */
	public function run_install()
	{
		
	}

	/**
	 * Drops the Twilio Tables
	 */
	public function uninstall()
	{
	}
}
