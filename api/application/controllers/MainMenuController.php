<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainMenuController extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('mainMenuModel');
                date_default_timezone_set("Asia/Kolkata");
                $this->db =$this->load->database('admin_master',TRUE);
        }

	public function get()
	{
		echo json_encode($this->mainMenuModel->get());
	}
	public function save()
	{
		echo json_encode($this->mainMenuModel->save());
	}
	public function edit()
	{
		echo json_encode($this->mainMenuModel->edit());
	}
	public function update()
	{
		echo json_encode($this->mainMenuModel->update());
	}
	public function delete()
	{
		echo json_encode($this->mainMenuModel->delete());
	}
}
