<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('userModel');
                date_default_timezone_set("Asia/Kolkata");
                $this->db = $this->load->database('admin_master',TRUE);
        }
	public function get()
	{
		echo json_encode($this->userModel->get());
	}
	public function save()
	{
		echo json_encode($this->userModel->save());
	}
	public function delete()
	{
		echo json_encode($this->userModel->delete());
	}
	public function getMenuRole()
	{
		echo json_encode($this->userModel->getMenuRole());
	}
	public function saveMenuRole()
	{
		echo json_encode($this->userModel->saveMenuRole());
	}
}