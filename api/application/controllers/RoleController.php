<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoleController extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('roleModel');
                $this->load->model('facilityModel');
                date_default_timezone_set("Asia/Kolkata");
                $this->db = $this->load->database('admin_master',TRUE);
        }
	public function get()
	{
		echo json_encode($this->roleModel->get());
	}
	public function save()
	{
		echo json_encode($this->roleModel->save());
	}
}