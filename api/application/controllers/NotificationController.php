<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class NotificationController extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('aoWebsiteModel');
                date_default_timezone_set("Asia/Kolkata");
                $this->db = $this->load->database('ao_website_master',TRUE);
	            error_reporting(0);
        }

	public function sendNewsletter()
	{
		echo json_encode($this->aoWebsiteModel->sendNewsletter());
	}
	public function sendQuery()
	{
		echo json_encode($this->aoWebsiteModel->sendQuery());
	}
	
}
