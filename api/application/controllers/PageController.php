<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('pageModel');
                date_default_timezone_set("Asia/Kolkata");
        }

	public function get()
	{
		echo json_encode($this->pageModel->get());
	}
	public function getSaved()
	{
		echo json_encode($this->pageModel->getSaved());
	}
	public function save()
	{
		echo json_encode($this->pageModel->save());
	}
	public function adminGet()
	{
		echo json_encode($this->pageModel->adminGet());
	}
}
