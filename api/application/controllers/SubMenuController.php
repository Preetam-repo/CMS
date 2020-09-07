<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubMenuController extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('subMenuModel');
                date_default_timezone_set("Asia/Kolkata");
                $this->db =$this->load->database('admin_master',TRUE);
        }

	public function get()
	{
		echo json_encode($this->subMenuModel->get());
	}
	public function save()
	{
		echo json_encode($this->subMenuModel->save());
	}
	public function edit()
	{
		echo json_encode($this->subMenuModel->edit());
	}
	public function update()
	{
		echo json_encode($this->subMenuModel->update());
	}
	public function delete()
	{
		echo json_encode($this->subMenuModel->delete());
	}
}
