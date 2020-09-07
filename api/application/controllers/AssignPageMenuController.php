<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssignPageMenuController extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('assignPageMenuModel');
                date_default_timezone_set("Asia/Kolkata");
                $this->db =$this->load->database('admin_master',TRUE);
        }

	public function get()
	{
		echo json_encode($this->assignPageMenuModel->get());
	}
	public function getSaved()
	{
		echo json_encode($this->assignPageMenuModel->getSaved());
	}
	public function save()
	{
		echo json_encode($this->assignPageMenuModel->save());
	}
	public function edit()
	{
		echo json_encode($this->assignPageMenuModel->edit());
	}
	public function update()
	{
		echo json_encode($this->assignPageMenuModel->update());
	}
	public function delete()
	{
		echo json_encode($this->assignPageMenuModel->delete());
	}
}
