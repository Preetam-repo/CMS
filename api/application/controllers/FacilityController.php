<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacilityController extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('facilityModel');
                date_default_timezone_set("Asia/Kolkata");
                $this->db =$this->load->database('admin_master',TRUE);
        }

	public function get()
	{
		echo json_encode($this->facilityModel->get());
	}
	public function save()
	{
		echo json_encode($this->facilityModel->save());
	}
	public function edit()
	{
		echo json_encode($this->facilityModel->edit());
	}
	public function update()
	{
		echo json_encode($this->facilityModel->update());
	}
	public function delete()
	{
		echo json_encode($this->facilityModel->delete());
	}
}
